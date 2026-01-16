@extends('layout.app')
@section('title','Bulk Image to WebP Converter')
@section('description','Convert and optimize your images into WebP format instantly with MetaDigital free online bulk image converter.')
@section('og:description','Convert and optimize your images into WebP format instantly with MetaDigital free online bulk image converter.')
@section('og:title','Bulk Image to WebP Converter')
@section('canonical', rtrim(url()->current(), '/') . '/')
@section('styles')
<style>
    .gallery-item {
        position: relative;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover .gallery-img {
        transform: scale(1.1);
    }

    .gallery-img {
        transition: transform 0.4s ease;
        width: 100%;
        height: 220px;
        /* fixed height for all */
        object-fit: cover;
        /* crop nicely, no distortion */
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.55);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .gallery-item:hover .overlay {
        opacity: 1;
    }

    .overlay a {
        pointer-events: auto;
        z-index: 9999;
    }

    .overlay {
        pointer-events: none;
        /* overlay par click disable */
    }

    #convertedImages {
        min-height: 300px;
    }

    .img-wrapper {
        height: 220px;
        width: 100%;
        overflow: hidden;
        background: #f2f2f2;
    }

    .img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
</style>
@endsection
@section('content')

<!-- Banner Section -->
<section class="banner__inner-page bg-image pt-180 pb-180 bg-image" data-background="{{asset('assets/front/images/banner/webpconverter.webp')}}">

    <div class="container text-center">
        <h1 class="wow fadeInUp">Free Bulk WebP Image Converter – Fast, Simple & 100% Free</h1>
        <p class="text-white">Convert your images to WebP format instantly in bilk with our fast and reliable online converter. Whether you’re a designer, photographer, or website owner, this tool helps you reduce image size without losing quality, making your websites and projects load faster and perform better — all for free.</p>
        <div class="breadcrumb-list mt-3">
            <a href="{{route('index')}}">Home</a>
            <span><i class="fa-regular fa-angles-right mx-2"></i> Tools</span>
            <span><i class="fa-regular fa-angles-right mx-2"></i> Bulk Image to WebP</span>
        </div>
    </div>
</section>

<!-- Features Section (TOP) -->
<section class="features-area pt-120 pb-40 sub-bg">
    <div class="container text-center">
        <div class="section-header text-center mb-60">
            <h5>
                <img class="me-1" src="{{asset('/assets/front/images/icon/section-title.webp')}}" alt="icon">
                IMAGE OPTIMIZATION
            </h5>
            <h2>Bulk WebP Image Converter</h2>
            <p>
                The Free WebP Image Converter by <strong>MetaDigital Marketing </strong>is a fast, secure, and 100% free online tool that lets users convert any image format — including <strong>JPG, PNG, and JPEG — into lightweight WebP files in seconds.</strong> It’s built for designers, photographers, and website owners who want smaller, high-quality images for faster website performance and better SEO. Every converted file is automatically optimized to stay <strong> under 100 KB, with no watermarks or data tracking.</strong> Users can simply upload an image, click “Convert,” and download a perfectly optimized WebP instantly — no software or sign-up required.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="feature-box shadow-sm p-4 rounded bg-white h-100">
                    <i class="fa-solid fa-bolt fs-1 text-primary mb-3"></i>
                    <h6>Instant Conversion</h6>
                    <p class="small text-muted">: Convert any image format (JPG, PNG, JPEG, BMP, GIF, JPEG) to WebP in seconds</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box shadow-sm p-4 rounded bg-white h-100">
                    <i class="fa-solid fa-code-compare fs-1 text-danger mb-3"></i>
                    <h6>Smart Compression </h6>
                    <p class="small text-muted">Every converted image is automatically optimized to be under 100 KB, keeping your files fast-loading .</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box shadow-sm p-4 rounded bg-white h-100">
                    <i class="fa-solid fa-layer-group fs-1 text-warning mb-3"></i>
                    <h6>Bulk Supported</h6>
                    <p class="small text-muted">Upload multiple imagesin zip or one go without any limit and download in zip.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box shadow-sm p-4 rounded bg-white h-100">
                    <i class="fa-solid fa-shield-halved fs-1 text-success mb-3"></i>
                    <h6>Perfect for Web User</h6>
                    <p class="small text-muted">Ideal for designers, photographers, and web developers who want faster websites and better SEO.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upload Section -->
<div class="upload-section shadow rounded p-5 bg-white mx-auto wow fadeInUp" style="max-width:650px;">
    <form id="uploadForm" action="{{ route('images.upload.ajax') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6 mx-auto">
                <label for="images" class="form-label">Select images</label>
                <input type="file" name="images[]" id="images" multiple required class="form-control" accept="image/*">
            </div>
            <div class="col-md-4 mx-auto">
                <label for="target_format" class="form-label">Convert to</label>
                <select name="target_format" id="target_format" class="form-select" required>
                    <option value="webp" selected>WebP (recommended)</option>
                    <option value="jpeg">JPG / JPEG</option>
                    <option value="png">PNG</option>
                    <option value="gif">GIF</option>
                    <option value="bmp">BMP</option>
                </select>
            </div>
        </div>

        <div id="dragDropArea" class="drag-drop-area p-4 border border-2 border-dashed rounded mb-4">
            <i class="fa-solid fa-cloud-arrow-up fs-1 text-primary mb-3"></i>
            <h5 class="mb-2">Drag & Drop Files Here</h5>
            <p class="text-muted small">Supports JPG, PNG, GIF, WEBP, BMP</p>
        </div>

        <button type="submit" id="convertBtn" class="btn btn-primary px-5 py-2">
            <i class="fa-solid fa-play me-2"></i> Convert Now
        </button>
    </form>
</div>

<!-- Converted Images Section -->
<div id="convertedImages" class="mt-4"></div>



<section class="service-single-area pt-120 pb-120">
    <div class="container">
        <div class="section-header text-center mb-40">
            <h2 class="wow fadeInUp" data-wow-delay="200ms">
                Why WebP format is the smarter choice of Professional

            </h2>
            <p class="wow fadeInUp mt-3" data-wow-delay="400ms">
                When your images are lighter, your entire website becomes quicker, improving both user experience and search engine performance. Google itself favors fast-loading websites, which makes WebP an excellent choice for anyone aiming to boost their SEO and visibility online. Whether you’re running a design portfolio, photography site, or eCommerce store, WebP helps you maintain visual quality while saving bandwidth and storage space.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 ">
                <div class="service-single__left-item">
                    <div class="image mb-50">
                        <img src="{{asset('/assets/front/images/service/bulk-png-to-webp-converter.webp')}}" alt="Free bulk WebP Image Converter">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="title mb-20">Why WebP Format Matters</h3>
                <p class="mb-20"> WebP is a modern image format developed by Google that delivers smaller file sizes with the same great quality as JPG or PNG. Using WebP images helps your website: </p>
                <ul>
                    <li class="mb-15"><i class="fa-solid fa-check mr-10"></i>Load faster on all devices</li>
                    <li class="mb-15"><i class="fa-solid fa-check mr-10"></i>Improve Google PageSpeed scores</li>
                    <li class="mb-15"><i class="fa-solid fa-check mr-10"></i>Enhance SEO and user experience</li>
                    <li class="mb-15"><i class="fa-solid fa-check mr-10"></i>Responsive & Mobile-Friendly</li>
                    <li class="mb-15"><i class="fa-solid fa-check mr-10"></i>Local Expertise in Dubai</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- FAQ area start here -->
<div class="container mt-40 pt-20 pb-40 ">
    <h5 class="wow fadeInUp text-center" data-wow-delay="00ms" data-wow-duration="1500ms">
        <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.747803" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC" stroke-width="1.5" />
            <mask id="path-2-inside-1_1120_294" fill="white">
                <path d="M3 5.9978C3 3.78866 4.79086 1.9978 7 1.9978H13C15.2091 1.9978 17 3.78866 17 5.9978C17 8.20694 15.2091 9.9978 13 9.9978H7C4.79086 9.9978 3 8.20694 3 5.9978Z" />
            </mask>
            <path d="M3 5.9978C3 2.96024 5.46243 0.497803 8.5 0.497803H11.5C14.5376 0.497803 17 2.96024 17 5.9978C17 4.61709 15.2091 3.4978 13 3.4978H7C4.79086 3.4978 3 4.61709 3 5.9978ZM17 5.9978C17 9.03537 14.5376 11.4978 11.5 11.4978H8.5C5.46243 11.4978 3 9.03537 3 5.9978C3 7.37851 4.79086 8.4978 7 8.4978H13C15.2091 8.4978 17 7.37851 17 5.9978ZM3 9.9978V1.9978V9.9978ZM17 1.9978V9.9978V1.9978Z" fill="#3C72FC" mask="url(#path-2-inside-1_1120_294)" />
        </svg>
        FAQ
    </h5>
    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Common Queries About Our Free Image Converter</h2>
    <p class="mb-30 mt-20">Choosing the right partner for your website can be confusing. Businesses often ask about pricing customization SEO benefits and the overall process of web development. At MetaDigital Marketing, we understand these concerns and provide clear answers</p>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms" data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Is this WebP converter really free?

                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Yes — it’s completely free with no hidden charges, watermarks, or sign-up requirements.
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="200ms" data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Can I convert multiple images?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Yes, our tool supports bulk uploads so you can convert multiple images at once.
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="400ms" data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingthree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                    . Are my files stored or shared?
                </button>
            </h2>
            <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>No. All conversions are processed securely in your browser — nothing is uploaded or saved on our servers. </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ area end here -->
<section class="quote-area">
    <div class="container">
        <div class="quote__wrp gradient-bg">
            <div class="counter__shape wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="{{asset('/assets/front/images/shape/quote-shape.webp')}}" alt="shape">
            </div>
            <div class="quote__shape bobble__animation">
                <img src="{{asset('/assets/front/images/shape/quote-shape2.webp')}}" alt="shape">
            </div>
            <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between">
                <div class="section-header text-center">
                    <h2 class="wow fadeInLeft text-white" data-wow-delay="200ms" data-wow-duration="1500ms">
                        Explore More Free Tools <br></h2>
                    <p class="text-white">This converter is just one of the many free digital tools developed by MetaDigital Marketing to help businesses and creatives save time and boost performance online.
                        Discover more tools and marketing solutions on <a href="www.metadigitalmarketing.ae">MetaDigitalMarketing.ae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Geo-Tag Modal -->
<div class="modal fade" id="geoTagModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Image Metadata (EXIF)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <input type="hidden" id="geo_filename">
                <input type="hidden" id="geo_format">
                <div class="row g-3">
                    <!-- LEFT SIDE : FORM -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" id="geo_title" class="form-control" placeholder="e.g., Burj Khalifa at Sunset">
                        </div>
                        <div class="mb-3">
                            <label>Subject</label>
                            <input type="text" id="geo_subject" class="form-control" placeholder="e.g., Dubai Landmarks">
                        </div>
                        <div class="mb-3">
                            <label>Tags (comma separated)</label>
                            <input type="text" id="geo_tags" class="form-control" placeholder="e.g., dubai, burj khalifa, sunset">
                        </div>
                        <div class="mb-3">
                            <label>Comments</label>
                            <textarea id="geo_comments" class="form-control" placeholder="Add any additional notes..."></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Latitude</label>
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

                <div id="geo-status" class="mt-2 text-success d-none">
                    Saved Successfully!
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

@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const uploadForm = document.getElementById('uploadForm');
        const dragDropArea = document.getElementById('dragDropArea');
        const fileInput = document.getElementById('images');
        const container = document.getElementById('convertedImages');
        const convertBtn = document.getElementById('convertBtn');
        const uploadSection = document.querySelector('.upload-section');

        // ------------------------------
        // Drag & Drop Handling
        // ------------------------------
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
            const dataTransfer = new DataTransfer();
            for (let i = 0; i < files.length; i++) {
                dataTransfer.items.add(files[i]);
            }
            fileInput.files = dataTransfer.files;
        });

        // ------------------------------
        // AJAX Form Submit
        // ------------------------------
        uploadForm.addEventListener('submit', function(e) {
            e.preventDefault();
            convertBtn.disabled = true;
            convertBtn.innerHTML = `<i class="fa-solid fa-spinner fa-spin me-2"></i> Converting...`;

            const formData = new FormData(uploadForm);

            fetch(uploadForm.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    convertBtn.disabled = false;
                    convertBtn.innerHTML = `<i class="fa-solid fa-play me-2"></i> Convert Now`;

                    if (data.success) {
                        container.innerHTML = ''; // Clear previous results

                        let html = `
                    <section class="pt-100 pb-100">
                        <div class="container">
                            <h3 class="text-center mb-5">Your Converted Images</h3>
                            <div class="row g-4">
                    `;

                        data.files.forEach(file => {
                            html += `
                        <div class="col-md-4">
                            <div class="card border-0 shadow-lg overflow-hidden rounded-3 gallery-item">
                                <div class="position-relative">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('') }}${file.path}"
                                            onerror="this.src='{{ asset('no-image.png') }}'"
                                            alt="Converted Image">
                                    </div>

                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <a href="{{ url('download') }}/${file.name}.${file.format}"
                                            class="btn btn-success rounded-pill px-3 py-2">
                                            <i class="fa-solid fa-download me-1"></i> Download
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <p class="fw-bold small mb-1 truncate">${file.name}</p>
                                    <p class="small mb-1 text-primary">Format: <b>${file.format.toUpperCase()}</b></p>
                                    <p class="text-muted small">${(file.size / 1024).toFixed(2)} KB</p>
                                    ${file.format === 'jpg' || file.format === 'jpeg' ? `
                                        <button class="btn btn-info rounded-pill px-3 py-2 geo-tag-btn"
                                            data-filename="${file.name}" data-format="${file.format}">
                                            <i class="fa-solid fa-location-dot me-1"></i> Add Geo-Tag
                                        </button>
                                    ` : `
                                        <span class="badge bg-secondary">Geo-Tag Not Supported (Only JPG)</span>
                                    `}
                                </div>
                            </div>
                        </div>
                        `;
                        });

                        html += `
                            </div>
                            <div class="text-center mt-5">
                                <a href="{{ route('images.downloadAll') }}" class="btn btn-primary btn-lg rounded-pill">
                                    <i class="fa-solid fa-box-archive me-2"></i> Download All (ZIP)
                                </a>
                            </div>
                        </div>
                    </section>
                    `;

                        container.innerHTML = html;

                        // 🔥 Auto Scroll After Conversion
                        setTimeout(() => {
                            document.getElementById("convertedImages").scrollIntoView({
                                behavior: "smooth",
                                block: "start"
                            });
                        }, 300);


                        // Success alert
                        const alertDiv = document.createElement('div');
                        alertDiv.className = 'alert alert-success alert-dismissible fade show mt-4';
                        alertDiv.role = 'alert';
                        alertDiv.innerHTML = `
                        <strong>Success!</strong> Your images have been converted successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    `;
                        uploadSection.prepend(alertDiv);
                        setTimeout(() => {
                            const alert = bootstrap.Alert.getOrCreateInstance(alertDiv);
                            alert.close();
                        }, 5000);

                    } else {
                        alert('Conversion failed!');
                    }
                })
                .catch(err => {
                    console.error(err);
                    convertBtn.disabled = false;
                    convertBtn.innerHTML = `<i class="fa-solid fa-play me-2"></i> Convert Now`;
                    alert('Something went wrong.');
                });
        });
    });
</script>

<script>
    // geotaging model
    document.addEventListener("click", function(e) {
        if (e.target.closest(".geo-tag-btn")) {
            let btn = e.target.closest(".geo-tag-btn");
            // Save card reference
            window.activeImageCard = btn.closest(".col-md-4");

            // Set filename & format in hidden inputs
            document.getElementById("geo_filename").value = btn.dataset.filename;
            document.getElementById("geo_format").value = btn.dataset.format;


            new bootstrap.Modal(document.getElementById("geoTagModal")).show();
            setTimeout(() => {
                initGeoMap(
                    document.getElementById('geo_lat').value || 25.2048, document.getElementById('geo_lng').value || 55.2708
                );
            }, 300);

        }
    });

    // geotaging apply
    const geoTagModal = new bootstrap.Modal(document.getElementById('geoTagModal'));
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

        saveGeoTagBtn.disabled = true;
        saveGeoTagBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Saving...';

        fetch('{{ route("images.applyGeotag") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    filename: filename,
                    format: format,
                    title: title,
                    subject: subject,
                    comments: comments,
                    tags: tags,
                    latitude: latitude,
                    longitude: longitude
                })
            })
            .then(res => res.json())
            .then(data => {
                saveGeoTagBtn.disabled = false;
                saveGeoTagBtn.innerHTML = 'Save Geo-Tag';

                if (data.success) {
                    alert('Geotag applied successfully!');
                    var modal = bootstrap.Modal.getInstance(document.getElementById('geoTagModal'));
                    modal.hide();

                    // Get the existing card to update
                    const oldCard = window.activeImageCard;

                    if (oldCard) {
                        const timestamp = new Date().getTime();
                        const imageSrcWithCacheBuster = "{{ asset('') }}" + data.path + '?t=' + timestamp;
                        oldCard.querySelector("img").src = imageSrcWithCacheBuster;

                        oldCard.querySelector(".fw-bold").innerHTML = `${data.filename} (Geotagged)`;
                        oldCard.querySelector(".text-muted").innerHTML = `${(data.size / 1024).toFixed(2)} KB`;
                        let downloadBtn = oldCard.querySelector(".overlay a");
                        downloadBtn.href = data.path;
                        downloadBtn.setAttribute('download', data.filename);
                        downloadBtn.setAttribute('target', '_blank');
                        // downloadBtn.href = "{{ url('download') }}/" + data.filename + "." + data.format;
                        // Replace Geo-Tag button with "Geo Tag Added"
                        oldCard.querySelector(".geo-tag-btn").outerHTML =
                            `<span class="badge bg-success"><i class="fa-solid fa-location-dot me-1"></i> Geo-Tag Added</span>`;
                    }

                } else {
                    alert('Error: ' + (data.error || 'Unknown error'));
                }
            })
            .catch(err => {
                saveGeoTagBtn.disabled = false;
                saveGeoTagBtn.innerHTML = 'Save Geo-Tag';
                alert('Error: ' + err.message);
            });
    });
</script>
<script>
    let geoMap, geoMarker;

    function initGeoMap(lat = 25.2048, lng = 55.2708) {
        if (geoMap) {
            geoMap.remove();
        }

        geoMap = L.map('geoMap').setView([lat, lng], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap'
        }).addTo(geoMap);

        geoMarker = L.marker([lat, lng], {
            draggable: true
        }).addTo(geoMap);

        // Marker drag → update inputs
        geoMarker.on('dragend', function() {
            const pos = geoMarker.getLatLng();
            document.getElementById('geo_lat').value = pos.lat.toFixed(6);
            document.getElementById('geo_lng').value = pos.lng.toFixed(6);
        });
    }

    function syncMarkerFromInputs() {
        if (!geoMarker) return;

        const lat = parseFloat(document.getElementById('geo_lat').value);
        const lng = parseFloat(document.getElementById('geo_lng').value);

        if (!isNaN(lat) && !isNaN(lng)) {
            geoMarker.setLatLng([lat, lng]);
            geoMap.setView([lat, lng], 13);
        }
    }

    document.getElementById('geo_lat').addEventListener('change', syncMarkerFromInputs);
    document.getElementById('geo_lng').addEventListener('change', syncMarkerFromInputs);
</script>
@endsection