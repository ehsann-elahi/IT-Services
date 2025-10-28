<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use ZipArchive;

class ImageController extends Controller
{
    public function index()
    {
        return view('images.index', [
            'success' => null,
            'files'   => []
        ]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image',
        ]);

        // 🧹 Purane data clear karo
        $webpDir = storage_path('app/public/webp');
        $originalsDir = storage_path('app/public/originals');

        if (file_exists($webpDir)) {
            $files = glob($webpDir . '/*');
            foreach ($files as $file) {
                if (is_file($file)) unlink($file);
            }
        }

        if (file_exists($originalsDir)) {
            $files = glob($originalsDir . '/*');
            foreach ($files as $file) {
                if (is_file($file)) unlink($file);
            }
        }

        $uploadedFiles = $request->file('images');
        $savedFiles = [];
        $skippedFiles = [];

        foreach ($uploadedFiles as $file) {
            $mime = $file->getMimeType();

            // ❌ Agar SVG hai to skip karo
            if ($mime === 'image/svg+xml') {
                $skippedFiles[] = $file->getClientOriginalName();
                continue;
            }

            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalName . '.webp';

            $originalPath = $file->storeAs('originals', $file->getClientOriginalName(), 'public');
            $fullPath = storage_path('app/public/' . $originalPath);

            $webpData = $this->convertImageToWebP($fullPath, $fileName);
             $webpPath = storage_path('app/public/webp/' . pathinfo($fileName, PATHINFO_FILENAME) . '.webp');

            $savedFiles[] = [
                'path' => $webpData['path'],
                'size' => $webpData['size'], // ✅ ab ye converted image ka size hoga
            ];
        }
        // ✅ Success + Skip Alert
        $successMessage = 'Images uploaded and converted successfully!';
        if (!empty($skippedFiles)) {
            $successMessage .= ' ⚠️ Some files were skipped: ' . implode(', ', $skippedFiles);
        }

        return view('images.index', [
            'success' => $successMessage,
            'files'   => $savedFiles
        ]);
    }

    private function convertImageToWebP($imagePath, $fileName)
    {
        $webpDirectory = storage_path('app/public/webp');
        if (!file_exists($webpDirectory)) {
            mkdir($webpDirectory, 0777, true);
        }

        $webpPath = $webpDirectory . '/' . $fileName;

        $info = getimagesize($imagePath);
        $mime = $info['mime'];
        [$width, $height] = $info;

        switch ($mime) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($imagePath);
                break;
            case 'image/png':
                $image = imagecreatefrompng($imagePath);
                imagepalettetotruecolor($image);
                imagealphablending($image, true);
                imagesavealpha($image, true);
                break;
            default:
                return basename($imagePath);
        }

        // 🖼 Smart Resize (agar bohot badi image ho)
        $maxWidth = 1920;
        $maxHeight = 1080;
        if ($width > $maxWidth || $height > $maxHeight) {
            $ratio = min($maxWidth / $width, $maxHeight / $height);
            $newWidth = intval($width * $ratio);
            $newHeight = intval($height * $ratio);

            $resized = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($resized, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            $image = $resized;
        }

        // 🎯 Compression loop (quality balance)
        $quality = 100;
        do {
            imagewebp($image, $webpPath, $quality);
            clearstatcache(true, $webpPath);
            $filesize = filesize($webpPath);

            if ($filesize <= 100 * 1024) {
                break; // ✅ 100KB se neeche ho gaya
            }

            $quality -= 5;
        } while ($quality >= 50);

        imagedestroy($image);
        // ✅ Always return final actual file size
        clearstatcache(true, $webpPath);
        return [
            'path' => 'storage/webp/' . $fileName,
            'size' => filesize($webpPath) // ✅ converted file size
        ];
    }

    public function downloadSingle($filename)
    {
        $path = storage_path('app/public/webp/' . $filename);

        if (file_exists($path)) {
            return Response::download($path, $filename, [
                'Content-Type' => 'image/webp',
            ]);
        }

        return back()->with('error', 'File not found!');
    }

    public function downloadAll()
    {
        $files = glob(storage_path('app/public/webp/*'));
        $zipFile = storage_path('app/public/webp_images.zip');

        $zip = new ZipArchive;
        if ($zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
            foreach ($files as $file) {
                $zip->addFile($file, basename($file));
            }
            $zip->close();
        }

        return response()->download($zipFile)->deleteFileAfterSend(true);
    }
}
