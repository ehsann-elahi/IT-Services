@extends('layout.app')
@section('title','Bulk Image to WebP Converter')
@section('description','Convert and optimize your images into WebP format instantly with MetaDigital free online bulk image converter.')
@section('og:description','Convert and optimize your images into WebP format instantly with MetaDigital free online bulk image converter.')
@section('og:title','Bulk Image to WebP Converter')
@section('canonical', url()->current())
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
</style>
@endsection
@section('content')

<!-- Banner Section -->
<section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{asset('assets/front/images/banner/webpconverter.png')}}">
    
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
                <img class="me-1" src="{{asset('assets/front/images/icon/section-title.png')}}" alt="icon">
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
<section id="upload-section" class="pt-40 pb-120 sub-bg">
    <div class="container text-center">
        <h2 class="mb-4 wow fadeInUp ">Upload & Convert to WebP</h2>
        <p class="text-muted mb-5 wow fadeInUp" data-wow-delay="0.2s">
            Drag & drop your <strong>JPG, PNG, or GIF</strong> files (even ZIP/PDF) and get them instantly
            converted into <strong>lightweight WebP images</strong> — optimized for speed, SEO, and performance.
        </p>

        <!-- Upload Box -->
        <div class="upload-section shadow rounded p-5 bg-white mx-auto wow fadeInUp" style="max-width:650px;">
            <form id="uploadForm" action="{{ route('images.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="drag-drop-area p-5 border border-2 border-dashed rounded mb-4">
                    <i class="fa-solid fa-cloud-arrow-up fs-1 text-primary mb-3"></i>
                    <h5 class="mb-2">Drag & Drop Files Here</h5>
                    <p class="text-muted small">Supports JPG, PNG, GIF</p>
                    <input type="file" name="images[]" multiple required class="form-control mt-3">
                </div>

                <!-- File Type Icons -->
                <div class="d-flex justify-content-center gap-3 mb-4">
                    <div class="file-icon"><i class="fa-regular fa-image text-danger fs-2"></i>
                        <p class="small mt-2">JPEG</p>
                    </div>
                    <div class="file-icon"><i class="fa-regular fa-image text-warning fs-2"></i>
                        <p class="small mt-2">PNG</p>
                    </div>
                    <div class="file-icon"><i class="fa-regular fa-image text-info fs-2"></i>
                        <p class="small mt-2">GIF</p>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary px-5 py-2">
                    <i class="fa-solid fa-play me-2"></i> Convert Now
                </button>
            </form>
        </div>

        <!-- Alerts -->
        <div class="mt-4">
            @if($success)
            <div class="alert alert-success">{{ $success }}</div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

    </div>
</section>

<!-- Converted Images Section -->
@if($success)
<section class="pt-100 pb-100">
    <div class="container">
        <h3 class="text-center mb-5 wow fadeInUp">
            Your Converted Images (WebP Format)
        </h3>
        <p class="text-center text-muted mb-4 wow fadeInUp" data-wow-delay="0.2s">
            Download your optimized WebP images instantly — same name, smaller size, better performance.
        </p>

        <div class="row g-4">
            @foreach($files as $file)
            <div class="col-md-4">
                <div class="card border-0 shadow-lg overflow-hidden rounded-3 gallery-item">
                    <div class="position-relative">
                        <img src="{{ asset($file['path']) }}" class="w-100 h-48 object-cover gallery-img" alt="Converted Image">
                        <div class="overlay d-flex justify-content-center align-items-center">
                            <a href="{{ route('images.downloadSingle', basename($file['path'])) }}"
                                class="btn btn-success rounded-pill px-3 py-2">
                                <i class="fa-solid fa-download me-1"></i> Download
                            </a>
                        </div>

                    </div>
                    <div class="card-body text-center">
                        <p class="fw-bold small mb-1 truncate">{{ basename($file['path']) }}</p>
                        <p class="text-muted small">{{ number_format($file['size'] / 1024, 2) }} KB</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('images.downloadAll') }}" class="btn btn-primary btn-lg rounded-pill">
                <i class="fa-solid fa-box-archive me-2"></i> Download All (ZIP)
            </a>
        </div>
    </div>
</section>
@endif
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
                        <img src="{{asset('assets/front/images/service/bulk-png-to-webp-converter.webp')}}" alt="Free bulk WebP Image Converter">
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
        <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.747803" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                stroke-width="1.5" />
            <mask id="path-2-inside-1_1120_294" fill="white">
                <path
                    d="M3 5.9978C3 3.78866 4.79086 1.9978 7 1.9978H13C15.2091 1.9978 17 3.78866 17 5.9978C17 8.20694 15.2091 9.9978 13 9.9978H7C4.79086 9.9978 3 8.20694 3 5.9978Z" />
            </mask>
            <path
                d="M3 5.9978C3 2.96024 5.46243 0.497803 8.5 0.497803H11.5C14.5376 0.497803 17 2.96024 17 5.9978C17 4.61709 15.2091 3.4978 13 3.4978H7C4.79086 3.4978 3 4.61709 3 5.9978ZM17 5.9978C17 9.03537 14.5376 11.4978 11.5 11.4978H8.5C5.46243 11.4978 3 9.03537 3 5.9978C3 7.37851 4.79086 8.4978 7 8.4978H13C15.2091 8.4978 17 7.37851 17 5.9978ZM3 9.9978V1.9978V9.9978ZM17 1.9978V9.9978V1.9978Z"
                fill="#3C72FC" mask="url(#path-2-inside-1_1120_294)" />
        </svg>
        FAQ
    </h5>
    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Common Queries About Our Free Image Converter</h2>
    <p class="mb-30 mt-20">Choosing the right partner for your website can be confusing. Businesses often ask about pricing customization SEO benefits and the overall process of web development. At MetaDigital Marketing, we understand these concerns and provide clear answers</p>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms"
            data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                   Is this WebP converter really free?

                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Yes — it’s completely free with no hidden charges, watermarks, or sign-up requirements.
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="200ms"
            data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    Can I convert multiple images?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Yes, our tool supports bulk uploads so you can convert multiple images at once.  
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="400ms"
            data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingthree">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapsethree"
                    aria-expanded="false" aria-controls="collapsethree">
                    . Are my files stored or shared?
                </button>
            </h2>
            <div id="collapsethree" class="accordion-collapse collapse"
                aria-labelledby="headingthree" data-bs-parent="#accordionExample">
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
                    <img src="{{asset('assets/front/images/shape/quote-shape.png')}}" alt="shape">
                </div>
                <div class="quote__shape bobble__animation">
                    <img src="{{asset('assets/front/images/shape/quote-shape2.png')}}" alt="shape">
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
@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const uploadSection = document.getElementById("upload-section");
        if (uploadSection) {
            setTimeout(() => {
                const offsetTop = uploadSection.getBoundingClientRect().top + window.scrollY - 100; 
                // -100 taake thoda upar ruk jaye (navbar agar ho to cover na kare)
                window.scrollTo({
                    top: offsetTop,
                   
                });
            }, 500); 
        }
    });
</script>
@endsection
