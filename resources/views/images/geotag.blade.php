@extends('layout.app')
@section('title','Image Geotag Tool - Add GPS Metadata')
@section('description','Add GPS coordinates and metadata to your images with our free geotag tool.')
@section('og:description','Add GPS coordinates and metadata to your images with our free geotag tool.')
@section('og:title','Image Geotag Tool - Add GPS Metadata')
@section('canonical', rtrim(url()->current(), '/') . '/')

@section('styles')
<style>
    /* Matching converter tool styling */
    .drag-drop-area {
        border: 2px dashed #3C72FC;
        border-radius: 12px;
        padding: 40px;
        text-align: center;
        background: #f8f9fa;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .drag-drop-area:hover,
    .drag-drop-area.border-primary {
        border-color: #2563eb;
        background: #e3f2fd;
    }

    .preview-section {
        display: none;
        margin-top: 30px;
    }

    .preview-section.active {
        display: block;
    }

    .image-card {
        background: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .image-card img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .metadata-badge {
        display: inline-block;
        padding: 6px 12px;
        background: #10b981;
        color: white;
        border-radius: 15px;
        margin: 4px;
        font-size: 13px;
    }

    #geoTagModal .modal-body {
        min-height: 70vh;
    }

</style>
@endsection

@section('content')

<!-- Banner Section -->
<section class="banner__inner-page bg-image pt-180 pb-180" data-background="{{asset('assets/front/images/banner/webpconverter.webp')}}">
    <div class="container text-center">
        <h1 class="wow fadeInUp">Free Image Geotag Tool - Add GPS Location to Photos</h1>
        <p class="text-white">Add GPS coordinates and metadata to your images easily. Perfect for photographers, travelers, and content creators who want to embed location data into their photos.</p>
        <div class="breadcrumb-list mt-3">
            <a href="{{route('index')}}">Home</a>
            <span><i class="fa-regular fa-angles-right mx-2"></i> Tools</span>
            <span><i class="fa-regular fa-angles-right mx-2"></i> Image Geotag</span>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-area pt-120 pb-40 sub-bg">
    <div class="container text-center">
        <div class="section-header text-center mb-60">
            <h5>
                <img class="me-1" src="{{asset('/assets/front/images/icon/section-title.png')}}" alt="icon">
                IMAGE GEOTAGGING
            </h5>
            <h2>Add GPS Metadata to Your Images</h2>
            <p>
                The Free Image Geotag Tool by <strong>MetaDigital Marketing</strong> is a powerful, secure, and 100% free online tool that lets you add GPS coordinates, titles, tags, and other metadata to your JPEG images instantly. Perfect for photographers who want to organize their photos by location, content creators who need to add copyright information, and anyone who wants to embed rich metadata into their images. Upload your image, add GPS coordinates and metadata, then download your geotagged photo — no software installation or sign-up required.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="feature-box shadow-sm p-4 rounded bg-white h-100">
                    <i class="fa-solid fa-location-dot fs-1 text-primary mb-3"></i>
                    <h6>GPS Coordinates</h6>
                    <p class="small text-muted">Add precise latitude and longitude to your images</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box shadow-sm p-4 rounded bg-white h-100">
                    <i class="fa-solid fa-tags fs-1 text-danger mb-3"></i>
                    <h6>Rich Metadata</h6>
                    <p class="small text-muted">Add title, subject, tags, and comments to your photos</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box shadow-sm p-4 rounded bg-white h-100">
                    <i class="fa-solid fa-download fs-1 text-warning mb-3"></i>
                    <h6>Instant Download</h6>
                    <p class="small text-muted">Download your geotagged image immediately after processing</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box shadow-sm p-4 rounded bg-white h-100">
                    <i class="fa-solid fa-shield-halved fs-1 text-success mb-3"></i>
                    <h6>100% Free & Secure</h6>
                    <p class="small text-muted">No watermarks, no limits, completely free and secure</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upload Section matching converter structure -->
<section class="pt-80 pb-80">
    <div class="container">
        <!-- Using same structure as converter upload form -->
        <div class="upload-section shadow rounded p-5 bg-white mx-auto wow fadeInUp" style="max-width:650px;">

            <div class="row mb-3">
                <div class="col-md-12 text-center mb-3">
                    <h4>Upload Your Image</h4>
                    <p class="text-muted">Select a JPEG/JPG image to add geotag</p>
                </div>
            </div>

            <div id="dragDropArea" class="drag-drop-area mb-4">
                <i class="fa-solid fa-cloud-arrow-up fs-1 text-primary mb-3"></i>
                <h5 class="mb-2">Drag & Drop Your Image Here</h5>
                <p class="text-muted small">or click to browse</p>
                <input type="file" id="imageInput" accept="image/jpeg,image/jpg" style="display: none;">
                <button type="button" class="btn btn-primary mt-2" onclick="document.getElementById('imageInput').click()">
                    <i class="fa-solid fa-upload me-2"></i> Choose Image
                </button>
                <p class="small text-muted mt-3">Supports: JPG, JPEG (Max 5MB)</p>
            </div>

            <!-- Preview Section -->
            <div class="preview-section" id="previewSection">
                <div class="text-center mb-3">
                    <h5>Selected Image</h5>
                    <p class="text-muted small" id="fileName"></p>
                </div>
                <div class="image-card text-center">
                    <img id="previewImage" src="/placeholder.svg" alt="Preview">
                    <button type="button" class="btn btn-success btn-lg" id="applyGeotagBtn">
                        <i class="fa-solid fa-location-dot me-2"></i> Apply Geotag
                    </button>
                </div>
            </div>

        </div>

        <!-- Result Section matching converter structure -->
        <section id="resultSection" style="display: none;">
            <div class="container mt-5">
                <div class="section-header text-center mb-40">
                    <h3 class="text-success">
                        <i class="fa-solid fa-check-circle me-2"></i> Geotag Applied Successfully!
                    </h3>
                    <p>Your image has been geotagged. Download it below.</p>
                </div>

                <div class="row justify-content-center" id="geotaggedImageContainer">
                    <!-- Geotagged image card will be inserted here -->
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Geotag Modal matching converter modal structure -->
<div class="modal fade" id="geoTagModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fa-solid fa-location-dot me-2 text-primary"></i>
                    Update Image Metadata (EXIF)
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <input type="hidden" id="geo_filename">
                <input type="hidden" id="geo_format">
                <div class="row g-3">
                    <!-- LEFT SIDE : FORM -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" id="geo_title" class="form-control" placeholder="e.g., Burj Khalifa at Sunset">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" id="geo_subject" class="form-control" placeholder="e.g., Dubai Landmarks">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tags (comma separated)</label>
                            <input type="text" id="geo_tags" class="form-control" placeholder="e.g., dubai, burj khalifa, sunset">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Comments</label>
                            <textarea id="geo_comments" class="form-control" rows="3" placeholder="Add any additional notes..."></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Latitude</label>
                                <input type="text" id="geo_lat" class="form-control" placeholder="e.g., 25.2048">
                                <small class="text-muted">Range: -90 to 90</small>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Longitude</label>
                                <input type="text" id="geo_lng" class="form-control" placeholder="e.g., 55.2708">
                                <small class="text-muted">Range: -180 to 180</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Select Location on Map</label>
                        <div id="geoMap" style="height:90%; min-height:420px; border-radius:12px;" class="border">
                        </div>
                        <small class="text-muted d-block mt-2">
                            Drag the marker to update latitude & longitude
                        </small>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="saveGeoTag" class="btn btn-primary">
                    Save Metadata
                </button>
            </div>
        </div>
    </div>
</div>

<!-- How It Works Section -->
<section class="service-single-area pt-120 pb-120">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h2 class="wow fadeInUp">How It Works</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <i class="fa-solid fa-upload fs-1 text-primary"></i>
                    </div>
                    <h5>1. Upload Image</h5>
                    <p class="text-muted">Select or drag & drop your JPEG image</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <i class="fa-solid fa-location-dot fs-1 text-success"></i>
                    </div>
                    <h5>2. Add GPS Data</h5>
                    <p class="text-muted">Enter coordinates and metadata</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <i class="fa-solid fa-check-circle fs-1 text-warning"></i>
                    </div>
                    <h5>3. Apply Geotag</h5>
                    <p class="text-muted">Click apply to embed metadata</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <i class="fa-solid fa-download fs-1 text-danger"></i>
                    </div>
                    <h5>4. Download</h5>
                    <p class="text-muted">Get your geotagged image instantly</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dragDropArea = document.getElementById('dragDropArea');
        const imageInput = document.getElementById('imageInput');
        const previewSection = document.getElementById('previewSection');
        const previewImage = document.getElementById('previewImage');
        const fileName = document.getElementById('fileName');
        const applyGeotagBtn = document.getElementById('applyGeotagBtn');
        const resultSection = document.getElementById('resultSection');

        let uploadedFilename = null;
        let uploadedFileData = null;

        ['dragenter', 'dragover'].forEach(eventName => {
            dragDropArea.addEventListener(eventName, (e) => {
                e.preventDefault();
                e.stopPropagation();
                dragDropArea.classList.add('border-primary');
            }, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dragDropArea.addEventListener(eventName, (e) => {
                e.preventDefault();
                e.stopPropagation();
                dragDropArea.classList.remove('border-primary');
            }, false);
        });

        dragDropArea.addEventListener('drop', (e) => {
            const dt = e.dataTransfer;
            const files = dt.files;
            if (files.length > 0) {
                handleFile(files[0]);
            }
        });

        dragDropArea.addEventListener('click', function(e) {
            if (e.target.tagName !== 'BUTTON') {
                imageInput.click();
            }
        });

        imageInput.addEventListener('change', function(e) {
            if (e.target.files.length > 0) {
                handleFile(e.target.files[0]);
            }
        });

        function handleFile(file) {
            if (!file.type.match('image/jpeg') && !file.type.match('image/jpg')) {
                alert('Please upload a JPEG/JPG image only.');
                return;
            }

            if (file.size > 5 * 1024 * 1024) {
                alert('File size must be less than 5MB.');
                return;
            }

            fileName.textContent = file.name;

            const formData = new FormData();
            formData.append('image', file);

            dragDropArea.innerHTML = '<i class="fa-solid fa-spinner fa-spin fs-1 text-primary mb-3"></i><h5>Uploading...</h5>';

            fetch('{{ route("images.geoTagUpload") }}', {
                    method: 'POST'
                    , headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                    , body: formData
                })
                .then(res => res.json())
                .then(data => {
                    console.log('[v0] Upload response:', data);

                    if (data.success && data.file) {
                        uploadedFilename = data.file.name;
                        uploadedFileData = data.file;

                        console.log('[v0] Uploaded file:', uploadedFilename);
                        console.log('[v0] File path:', data.file.path);

                        const imageUrl = '{{ url("/") }}/' + data.file.path;
                        console.log('[v0] Image URL:', imageUrl);

                        previewImage.src = imageUrl + '?t=' + new Date().getTime();

                        previewSection.classList.add('active');

                        dragDropArea.innerHTML = `
                    <i class="fa-solid fa-check-circle fs-1 text-success mb-3"></i>
                    <h5 class="mb-2 text-success">Image Uploaded Successfully!</h5>
                    <p class="text-muted small">Scroll down to apply geotag</p>
                `;

                        setTimeout(() => {
                            previewSection.scrollIntoView({
                                behavior: 'smooth'
                                , block: 'center'
                            });
                        }, 300);
                    } else {
                        alert('Upload failed. Please try again.');
                        resetDragDropArea();
                    }
                })
                .catch(err => {
                    console.error('[v0] Upload error:', err);
                    alert('An error occurred during upload.');
                    resetDragDropArea();
                });
        }

        function resetDragDropArea() {
            dragDropArea.innerHTML = `
            <i class="fa-solid fa-cloud-arrow-up fs-1 text-primary mb-3"></i>
            <h5 class="mb-2">Drag & Drop Your Image Here</h5>
            <p class="text-muted small">or click to browse</p>
            <button type="button" class="btn btn-primary mt-2" onclick="document.getElementById('imageInput').click()">
                <i class="fa-solid fa-upload me-2"></i> Choose Image
            </button>
            <p class="small text-muted mt-3">Supports: JPG, JPEG (Max 5MB)</p>
        `;
        }

        let map, marker;

        function initGeoMap(lat = 25.2048, lng = 55.2708) {
            if (map) {
                map.remove();
            }

            map = L.map('geoMap').setView([lat, lng], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap'
            }).addTo(map);

            marker = L.marker([lat, lng], {
                draggable: true
            }).addTo(map);

            // Marker drag → update inputs
            marker.on('dragend', function(e) {
                const position = marker.getLatLng();
                document.getElementById('geo_lat').value = position.lat.toFixed(6);
                document.getElementById('geo_lng').value = position.lng.toFixed(6);
            });
        }

        applyGeotagBtn.addEventListener('click', function() {
            if (!uploadedFilename) {
                alert('Please upload an image first.');
                return;
            }

            const filenameWithoutExt = uploadedFilename.replace(/\.[^/.]+$/, '');
            console.log('[v0] Filename without extension:', filenameWithoutExt);

            document.getElementById('geo_filename').value = filenameWithoutExt;
            document.getElementById('geo_format').value = 'jpg';

            document.getElementById('geo_title').value = '';
            document.getElementById('geo_subject').value = '';
            document.getElementById('geo_tags').value = '';
            document.getElementById('geo_comments').value = '';
            document.getElementById('geo_lat').value = '';
            document.getElementById('geo_lng').value = '';

            const modal = new bootstrap.Modal(document.getElementById('geoTagModal'));
            modal.show();
            setTimeout(() => {
                initGeoMap(25.2048, 55.2708); // Default Dubai
            }, 300);
        });

        function updateMarkerFromInputs() {
            const lat = parseFloat(document.getElementById('geo_lat').value);
            const lng = parseFloat(document.getElementById('geo_lng').value);

            if (!isNaN(lat) && !isNaN(lng)) {
                marker.setLatLng([lat, lng]);
                map.setView([lat, lng], 13);
            }
        }

        document.getElementById('geo_lat').addEventListener('change', updateMarkerFromInputs);
        document.getElementById('geo_lng').addEventListener('change', updateMarkerFromInputs);

        const saveGeoTagBtn = document.getElementById('saveGeoTag');
        saveGeoTagBtn.addEventListener('click', function() {
            const filename = document.getElementById('geo_filename').value;
            const format = document.getElementById('geo_format').value;
            const title = document.getElementById('geo_title').value;
            const subject = document.getElementById('geo_subject').value;
            const comments = document.getElementById('geo_comments').value;
            const tags = document.getElementById('geo_tags').value;
            const latitude = document.getElementById('geo_lat').value;
            const longitude = document.getElementById('geo_lng').value;

            if (!latitude || !longitude) {
                alert('Latitude and Longitude are required!');
                return;
            }

            const lat = parseFloat(latitude);
            const lng = parseFloat(longitude);

            if (isNaN(lat) || lat < -90 || lat > 90) {
                alert('Latitude must be between -90 and 90');
                return;
            }

            if (isNaN(lng) || lng < -180 || lng > 180) {
                alert('Longitude must be between -180 and 180');
                return;
            }

            saveGeoTagBtn.disabled = true;
            saveGeoTagBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Saving...';

            fetch('{{ route("images.applyGeotag") }}', {
                    method: 'POST'
                    , headers: {
                        'Content-Type': 'application/json'
                        , 'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                    , body: JSON.stringify({
                        filename: filename
                        , format: format
                        , title: title
                        , subject: subject
                        , comments: comments
                        , tags: tags
                        , latitude: latitude
                        , longitude: longitude
                    })
                })
                .then(res => res.json())
                .then(data => {
                    saveGeoTagBtn.disabled = false;
                    saveGeoTagBtn.innerHTML = 'Save Metadata';

                    if (data.success) {
                        const modal = bootstrap.Modal.getInstance(document.getElementById('geoTagModal'));
                        modal.hide();

                        const timestamp = new Date().getTime();
                        const imageSrc = '{{ url("/") }}/' + data.path + '?t=' + timestamp;

                        let metadataBadges = `
                    <span class="metadata-badge">
                        <i class="fa-solid fa-location-dot me-1"></i>
                        GPS: ${latitude}, ${longitude}
                    </span>
                `;

                        if (title) {
                            metadataBadges += `<span class="metadata-badge"><i class="fa-solid fa-heading me-1"></i>${title}</span>`;
                        }
                        if (subject) {
                            metadataBadges += `<span class="metadata-badge"><i class="fa-solid fa-align-left me-1"></i>${subject}</span>`;
                        }
                        if (tags) {
                            metadataBadges += `<span class="metadata-badge"><i class="fa-solid fa-tags me-1"></i>${tags}</span>`;
                        }

                        const resultCard = `
                    <div class="col-md-6">
                        <div class="image-card">
                            <img src="${imageSrc}" alt="Geotagged Image" style="max-width: 100%; height: auto;">
                            <div class="mt-3">
                                <h5 class="text-success mb-3">
                                    <i class="fa-solid fa-check-circle me-2"></i>
                                    ${data.filename}
                                </h5>
                                <div class="mb-3">
                                    ${metadataBadges}
                                </div>
                                <a href="{{ url('/download') }}/${data.filename}"
                                   class="btn btn-success btn-lg w-100"
                                   download="${data.filename}">
                                    <i class="fa-solid fa-download me-2"></i>
                                    Download Geotagged Image
                                </a>
                                <p class="text-muted small mt-2">
                                    <i class="fa-solid fa-info-circle me-1"></i>
                                    Size: ${(data.size / 1024).toFixed(2)} KB
                                </p>
                            </div>
                        </div>
                    </div>
                `;

                        document.getElementById('geotaggedImageContainer').innerHTML = resultCard;
                        resultSection.style.display = 'block';

                        setTimeout(() => {
                            resultSection.scrollIntoView({
                                behavior: 'smooth'
                                , block: 'start'
                            });
                        }, 300);

                        alert('Geotag applied successfully! Download your image below.');
                    } else {
                        alert(data.error || 'Failed to apply geotag. Please try again.');
                    }
                })
                .catch(err => {
                    console.error('Geotag error:', err);
                    saveGeoTagBtn.disabled = false;
                    saveGeoTagBtn.innerHTML = 'Save Metadata';
                    alert('An error occurred. Please try again.');
                });
        });
    });

</script>
@endsection
