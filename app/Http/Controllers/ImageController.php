<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use ZipArchive;
use Exception;


class ImageController extends Controller
{
    public function index()
    {
        return view('images.index', [
            'success' => null,
            'files'   => []
        ]);
    }

    public function imagesGeotag()
    {
        return view('images.geotag', [
            'success' => null,
            'files'   => []
        ]);
    }

    public function geoTagUpload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg|max:5120'
        ]);

        $file = $request->file('image');

        $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $filename = $filename . '_' . uniqid() . '.jpg';

        // $path = $file->storeAs('public/converted', $filename);
        $file->storeAs('converted', $filename, 'public');

        $publicPath = 'storage/converted/' . $filename;

        return response()->json([
            'success' => true,
            'file' => [
                'name' => $filename,
                'path' => $publicPath,
                'format' => 'jpg',
                'size' => $file->getSize()
            ]
        ]);
    }


    public function uploadAjax(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image',
            'target_format' => 'required|string|in:jpg,jpeg,png,gif,webp,bmp'
        ]);

        $targetFormat = strtolower($request->input('target_format'));
        // Normalize jpeg alias
        if ($targetFormat === 'jpg') $targetFormat = 'jpeg';

        // directories
        $webpDir = storage_path('app/public/converted'); // all outputs saved here
        $originalsDir = storage_path('app/public/originals');

        // clear old data (optional)
        if (file_exists($webpDir)) {
            $files = glob($webpDir . '/*');
            foreach ($files as $file) {
                if (is_file($file)) unlink($file);
            }
        }

        if (!file_exists($webpDir)) {
            mkdir($webpDir, 0777, true);
        }

        if (!file_exists($originalsDir)) {
            mkdir($originalsDir, 0777, true);
        }

        $uploadedFiles = $request->file('images');
        $savedFiles = [];
        $skippedFiles = [];
        $errorFiles = [];

        foreach ($uploadedFiles as $file) {
            $originalFullName = $file->getClientOriginalName();
            $originalExt = strtolower($file->getClientOriginalExtension());
            $originalName = pathinfo($originalFullName, PATHINFO_FILENAME);

            // Store original (optional)
            $originalPath = $file->storeAs('originals', $originalFullName, 'public');
            $fullOriginalPath = storage_path('app/public/' . $originalPath);

            // If source and target formats are same -> skip (but keep friendly msg)
            // consider jpeg/jpg equivalence
            $srcExtNormalized = $originalExt === 'jpg' ? 'jpeg' : $originalExt;
            if ($srcExtNormalized === $targetFormat) {
                $skippedFiles[] = $originalFullName . " (already .$originalExt)";
                // optionally copy original to converted folder to allow download of "converted" file
                $destName = $originalName . '.' . $this->formatToExtension($targetFormat);
                copy($fullOriginalPath, storage_path('app/public/converted/' . $destName));
                $savedFiles[] = [
                    'path'   => 'storage/converted/' . $destName,
                    'name'   => $originalName,
                    'format' => $this->formatToExtension($targetFormat),
                    'size'   => filesize(storage_path('app/public/converted/' . $destName))
                ];

                continue;
            }

            // Convert
            try {
                $converted = $this->convertToFormat($fullOriginalPath, $originalName, $targetFormat);
                if ($converted === false) {
                    $errorFiles[] = $originalFullName;
                    continue;
                }

                $savedFiles[] = [
                    'path'   => $converted['public_path'],
                    'name'   => $originalName,
                    'format' => $this->formatToExtension($targetFormat),
                    'size'   => $converted['size']
                ];
            } catch (\Exception $e) {
                $errorFiles[] = $originalFullName . ' (' . $e->getMessage() . ')';
            }
        }

        // Build success message
        $messages = [];
        if (!empty($savedFiles)) {
            $messages[] = 'Converted ' . count($savedFiles) . ' file(s).';
        }
        if (!empty($skippedFiles)) {
            $messages[] = 'Skipped: ' . implode(', ', $skippedFiles);
        }
        if (!empty($errorFiles)) {
            $messages[] = 'Errors: ' . implode(', ', $errorFiles);
        }

        $successMessage = implode(' | ', $messages);

        return response()->json([
            'success' => $successMessage,
            'files' => $savedFiles
        ]);
    }

    private function convertToFormat($imagePath, $baseName, $targetFormat)
    {
        $info = @getimagesize($imagePath);
        if (!$info) return false;
        $mime = $info['mime'];
        [$width, $height] = $info;

        // create resource from source
        switch ($mime) {
            case 'image/jpeg':
            case 'image/pjpeg':
                $srcImg = imagecreatefromjpeg($imagePath);
                break;
            case 'image/png':
                $srcImg = imagecreatefrompng($imagePath);
                break;
            case 'image/gif':
                $srcImg = imagecreatefromgif($imagePath);
                break;
            case 'image/webp':
                if (!function_exists('imagecreatefromwebp')) {
                    // if PHP doesn't support webp read, fail gracefully
                    return false;
                }
                $srcImg = imagecreatefromwebp($imagePath);
                break;
            case 'image/bmp':
            case 'image/x-ms-bmp':
                $srcImg = imagecreatefrombmp($imagePath);
                break;
            default:
                // unsupported source
                return false;
        }

        if (!$srcImg) return false;

        // Optional smart resize (keep same as before)
        $maxWidth = 1920;
        $maxHeight = 1080;
        if ($width > $maxWidth || $height > $maxHeight) {
            $ratio = min($maxWidth / $width, $maxHeight / $height);
            $newWidth = intval($width * $ratio);
            $newHeight = intval($height * $ratio);
            $resized = imagecreatetruecolor($newWidth, $newHeight);

            // Preserve transparency for PNG/GIF/WebP
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
            $transparent = imagecolorallocatealpha($resized, 0, 0, 0, 127);
            imagefilledrectangle($resized, 0, 0, $newWidth, $newHeight, $transparent);

            imagecopyresampled($resized, $srcImg, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            imagedestroy($srcImg);
            $srcImg = $resized;
        }

        // prepare output path
        $outDir = storage_path('app/public/converted');
        if (!file_exists($outDir)) mkdir($outDir, 0777, true);

        $outExt = $this->formatToExtension($targetFormat); // 'png','jpeg','webp','gif','bmp'
        $outFilename = $baseName . '.' . $outExt;
        $outFullPath = $outDir . '/' . $outFilename;

        // Save according to target
        // Use quality control for jpeg/webp, PNG uses compression level (0-9), GIF uses imagegif
        $saved = false;
        switch ($targetFormat) {
            case 'jpeg':
                // convert to truecolor if palette
                if (!imageistruecolor($srcImg)) {
                    $tmp = imagecreatetruecolor(imagesx($srcImg), imagesy($srcImg));
                    imagecopy($tmp, $srcImg, 0, 0, 0, 0, imagesx($srcImg), imagesy($srcImg));
                    imagedestroy($srcImg);
                    $srcImg = $tmp;
                }
                $quality = 90;
                imagejpeg($srcImg, $outFullPath, $quality);
                $saved = file_exists($outFullPath);
                break;

            case 'png':
                // Preserve alpha
                imagealphablending($srcImg, false);
                imagesavealpha($srcImg, true);
                // PNG compression level: 0 (no compression) to 9.
                $pngCompression = 6;
                imagepng($srcImg, $outFullPath, $pngCompression);
                $saved = file_exists($outFullPath);
                break;

            case 'gif':
                // Convert truecolor back to palette for GIF if needed
                if (imageistruecolor($srcImg)) {
                    imagetruecolortopalette($srcImg, true, 256);
                }
                imagegif($srcImg, $outFullPath);
                $saved = file_exists($outFullPath);
                break;

            case 'webp':
                // start with high quality and reduce if needed (to try stay under 100KB similar to before)
                $quality = 100;
                do {
                    imagewebp($srcImg, $outFullPath, $quality);
                    clearstatcache(true, $outFullPath);
                    $filesize = file_exists($outFullPath) ? filesize($outFullPath) : PHP_INT_MAX;
                    if ($filesize <= 100 * 1024) break;
                    $quality -= 5;
                } while ($quality >= 50);
                $saved = file_exists($outFullPath);
                break;

            case 'bmp':
                if (function_exists('imagebmp')) {
                    imagebmp($srcImg, $outFullPath);
                    $saved = file_exists($outFullPath);
                } else {
                    // fallback: save as png but with .bmp extension (not ideal) => mark as saved false
                    $saved = false;
                }
                break;

            default:
                $saved = false;
        }

        imagedestroy($srcImg);

        if (!$saved) return false;

        clearstatcache(true, $outFullPath);
        return [
            'public_path' => 'storage/converted/' . $outFilename,
            'size' => filesize($outFullPath)
        ];
    }

    private function formatToExtension($format)
    {
        // map normalized target format to file extension
        switch ($format) {
            case 'jpeg':
                return 'jpg';
            case 'png':
                return 'png';
            case 'gif':
                return 'gif';
            case 'webp':
                return 'webp';
            case 'bmp':
                return 'bmp';
            default:
                return $format;
        }
    }

    public function downloadSingle($filename)
    {
        $path = storage_path('app/public/converted/' . $filename);

        if (file_exists($path)) {
            $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
            $contentType = 'application/octet-stream';
            switch ($ext) {
                case 'jpg':
                case 'jpeg':
                    $contentType = 'image/jpeg';
                    break;
                case 'png':
                    $contentType = 'image/png';
                    break;
                case 'gif':
                    $contentType = 'image/gif';
                    break;
                case 'webp':
                    $contentType = 'image/webp';
                    break;
                case 'bmp':
                    $contentType = 'image/bmp';
                    break;
            }

            return Response::download($path, basename($path), [
                'Content-Type' => $contentType,
            ]);
        }

        return back()->with('error', 'File not found!');
    }

    public function downloadAll()
    {
        $files = glob(storage_path('app/public/converted/*'));
        $zipFile = storage_path('app/public/converted_images.zip');

        $zip = new ZipArchive;
        if ($zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
            foreach ($files as $file) {
                if (is_file($file)) {
                    $zip->addFile($file, basename($file));
                }
            }
            $zip->close();
        }

        return response()->download($zipFile)->deleteFileAfterSend(true);
    }

    public function applyGeotag(Request $request)
    {
        $request->validate([
            'filename' => 'required|string',
            'format' => 'required|string',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'title' => 'nullable|string',
            'subject' => 'nullable|string',
            'tags' => 'nullable|string',
            'comments' => 'nullable|string',
        ]);

        $filename = basename($request->input('filename'));
        $format = strtolower($request->input('format'));
        $title = $request->input('title');

        // Remove extension if already included in filename
        $filenameFinal = pathinfo($filename, PATHINFO_FILENAME);

        $possiblePaths = [
            storage_path("app/public/converted/{$filenameFinal}.{$format}"),
            storage_path("app/public/converted/{$filenameFinal}.jpg"),
            storage_path("app/public/converted/{$filenameFinal}.jpeg"),
            storage_path("app/public/converted/{$filename}") // Try original filename as-is
        ];

        $originalPath = null;
        foreach ($possiblePaths as $path) {
            if (file_exists($path)) {
                $originalPath = $path;
                break;
            }
        }

        if (!$originalPath) {
            return response()->json([
                'error' => 'Image not found. Tried paths: ' . implode(', ', array_map('basename', $possiblePaths))
            ], 404);
        }

        try {

            if ($title && trim($title) !== '') {
                // Sanitize title for use as filename
                $sanitizedTitle = preg_replace('/[^a-zA-Z0-9_-]/', '_', $title);
                $jpegFilename = $sanitizedTitle . '.jpg';
            } else {
                $timestamp = time();
                $jpegFilename = $filenameFinal . '_meta_' . $timestamp . '.jpg';
            }

            $jpegPath = storage_path("app/public/converted/{$jpegFilename}");

            // Convert to JPEG if needed
            $this->convertImageToJpeg($originalPath, $jpegPath);

            if (!file_exists($jpegPath)) {
                return response()->json(['error' => 'Failed to convert image to JPEG'], 500);
            }


            // Write metadata
            $this->writeGeotagToImage(
                $jpegPath,
                $request->latitude,
                $request->longitude,
                $request->title,
                $request->subject,
                $request->tags,
                $request->comments
            );

            if (!file_exists($jpegPath)) {
                return response()->json(['error' => 'File was lost after metadata write'], 500);
            }

            return response()->json([
                'success' => 'Geotag applied successfully!',
                'filename' => $jpegFilename,
                'path' => "storage/converted/{$jpegFilename}",
                'size' => filesize($jpegPath)
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    private function writeGeotagToImage($imagePath, $latitude, $longitude, $title, $subject, $tags, $comments)
    {
        $hasExiftool = $this->detectExiftool();

        if (!$hasExiftool) {
            throw new Exception("Exiftool not installed. Install from: https://exiftool.org/");
        }

        $exiftoolPath = 'C:\\ExifTool\\exiftool.exe';

        $this->embedGPSWithExiftool(
            $imagePath,
            $latitude,
            $longitude,
            $title,
            $subject,
            $tags,
            $comments,
            $exiftoolPath
        );
    }

    private function detectExiftool()
    {
        $path = 'C:\\ExifTool\\exiftool.exe'; // 👈 your correct path

        if (!file_exists($path)) {
            return false;
        }

        $version = shell_exec("\"$path\" -ver");

        return $version ? true : false;
    }

    private function embedGPSWithExiftool($imagePath, $latitude, $longitude, $title, $subject, $tags, $comments, $exiftoolPath)
    {
        $subjectEsc = $subject ? escapeshellarg($subject) : '';
        $tagsEsc = $tags ? escapeshellarg($tags) : '';

        $cmd = "\"$exiftoolPath\" -overwrite_original " .
            "-GPSLatitude=$latitude -GPSLatitudeRef=" . ($latitude >= 0 ? 'N' : 'S') . " " .
            "-GPSLongitude=$longitude -GPSLongitudeRef=" . ($longitude >= 0 ? 'E' : 'W') . " " .
            ($title ? "-Title=" . escapeshellarg($title) . " " : "") .
            ($subject ? "-XPSubject=$subjectEsc " : "") .
            ($tags ? "-IPTC:Keywords=$tagsEsc -XMP:Subject=$tagsEsc " : "") .
            ($comments ? "-XPComment=" . escapeshellarg($comments) . " " : "") .
            "\"$imagePath\"";

        shell_exec($cmd);
    }

    private function convertImageToJpeg($src, $dest)
    {
        if (!file_exists($src)) {
            throw new Exception("Source file not found: {$src}");
        }

        $info = @getimagesize($src);
        if (!$info) {
            throw new Exception("Invalid image file or unreadable format");
        }

        $mime = $info['mime'];

        try {
            switch ($mime) {
                case 'image/png':
                    $img = imagecreatefrompng($src);
                    if (!$img) throw new Exception("Failed to create PNG resource");
                    break;
                case 'image/webp':
                    if (!function_exists('imagecreatefromwebp')) {
                        throw new Exception("WebP support not available in PHP");
                    }
                    $img = imagecreatefromwebp($src);
                    if (!$img) throw new Exception("Failed to create WebP resource");
                    break;
                case 'image/gif':
                    $img = imagecreatefromgif($src);
                    if (!$img) throw new Exception("Failed to create GIF resource");
                    break;
                case 'image/jpeg':
                case 'image/pjpeg':
                    // If already JPEG, just copy
                    if (!copy($src, $dest)) {
                        throw new Exception("Failed to copy JPEG file");
                    }
                    return;
                default:
                    throw new Exception("Unsupported file type: {$mime}");
            }

            if (!imagejpeg($img, $dest, 90)) {
                throw new Exception("Failed to write JPEG file");
            }

            imagedestroy($img);

            if (!file_exists($dest)) {
                throw new Exception("Output JPEG file was not created");
            }
        } catch (Exception $e) {
            if (isset($img)) imagedestroy($img);
            throw $e;
        }
    }
}
