@extends('layout.app')
@section('title','Best Graphic Designer Services Dubai & Abu Dhabi')
@section('description','Experts in creating state-of-the-art graphic designing work for your business website social media profile stationery design branding Business cards flyers logos identity designs banner designs website designs and many more')
@section('og:description','Experts in creating state-of-the-art graphic designing work for your business website social media profile stationery design branding Business cards flyers logos identity designs banner designs website designs and many more')
@section('og:title','Best Graphic Designer Services Dubai & Abu Dhabi')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/privacy-policy') -->
@section('canonical', rtrim(url()->current(), '/') . '/')
@section('content')
<section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{asset('assets/front/images/banner/graphic.webp')}}">

    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Graphic Designing</h1>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <p class="text-white">We believe smart, effective, creative results start with truly understanding your cause and taking a holistic perspective.</p>
            <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Service
                Details</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Service area start here -->
<section class="service-single-area pt-120 pb-60">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 order-2 order-lg-1">
                <div class="service-single__left-item">
                    <div class="image mb-50">
                        <img src="{{asset('/assets/front/images/service/graphic.webp')}}" alt="image">
                    </div>
                    <h3 class="title mb-30">Graphic Designing Service</h3>
                    <p class="mb-20">Does your marketing strategy show you saturation in sales? or you are disappointed due to the failure of the marketing strategy & couldn't show up on the online platform? No worries! Our critical thinker professional can develop cutting-edge budget-friendly solutions to create a robust digital marketing strategy..</p>
                    <p>We have the view that great design creates strong relationships. With graphic designing our services can enable businesses to cut above the crowd with images that will be remembered. Logos to social media creatives we design it keeping your brand in mind.</p>
                    <div class="row g-5 mt-40 mb-40 align-items-center">
                        <div class="col-lg-5">
                            <h4 class="mb-20">Benefits With Our Service</h4>
                            <ul>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Strong First Impression</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Better Brand Recognition</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Boost Engagement</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Competitive Advantage</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Trust & Credibility</li>
                            </ul>
                        </div>
                        <div class="col-lg-7">
                            <div class="image">
                                <img src="{{asset('/assets/front/images/service/graphic1.webp')}}" alt="image">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2">
                <div class="service-single__right-item">
                    <div class="item sub-bg mb-30">
                        <h4 class="mb-20">All Services</h4>
                        <ul class="category service-category">
                            <li><a href="{{route('WebDevelopment')}}">Web Development</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li class="active"><a href="{{route('Digitalmarketing')}}">Digital Marketing</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="{{route('AppDevelopment')}}">App Development</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="{{route('Seo')}}">SEO</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="{{route('Graphicdesigning')}}">Graphic Desigining</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="{{route('Socialmediamarketing')}}">Social Media Marketing</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="{{route('googleads')}}">Google Ads</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                        </ul>
                    </div>
                    <div class="item sub-bg mb-30">
                        <h4 class="mb-20">Opening Hours</h4>
                        <ul class="category">
                            <li class="secondary-color justify-content-start gap-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.8505 9.41291L8.61967 7.73979V4.3316C8.61967 3.98891 8.34266 3.71191 7.99998 3.71191C7.65729 3.71191 7.38029 3.98891 7.38029 4.3316V8.04966C7.38029 8.24485 7.47201 8.42892 7.62817 8.54541L10.1069 10.4044C10.2138 10.485 10.3441 10.5285 10.478 10.5284C10.667 10.5284 10.8529 10.4435 10.9744 10.2799C11.1802 10.0066 11.1244 9.61804 10.8505 9.41291Z"
                                        fill="#3C72FC" />
                                    <path
                                        d="M8 0C3.58853 0 0 3.58853 0 8C0 12.4115 3.58853 16 8 16C12.4115 16 16 12.4115 16 8C16 3.58853 12.4115 0 8 0ZM8 14.7607C4.27266 14.7607 1.23934 11.7273 1.23934 8C1.23934 4.27266 4.27266 1.23934 8 1.23934C11.728 1.23934 14.7607 4.27266 14.7607 8C14.7607 11.7273 11.7273 14.7607 8 14.7607Z"
                                        fill="#3C72FC" />
                                </svg>
                                Mon - Sat: 10.00 AM - 4.00 PM
                            </li>
                            <li class="secondary-color justify-content-start gap-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.8505 9.41291L8.61967 7.73979V4.3316C8.61967 3.98891 8.34266 3.71191 7.99998 3.71191C7.65729 3.71191 7.38029 3.98891 7.38029 4.3316V8.04966C7.38029 8.24485 7.47201 8.42892 7.62817 8.54541L10.1069 10.4044C10.2138 10.485 10.3441 10.5285 10.478 10.5284C10.667 10.5284 10.8529 10.4435 10.9744 10.2799C11.1802 10.0066 11.1244 9.61804 10.8505 9.41291Z"
                                        fill="#3C72FC" />
                                    <path
                                        d="M8 0C3.58853 0 0 3.58853 0 8C0 12.4115 3.58853 16 8 16C12.4115 16 16 12.4115 16 8C16 3.58853 12.4115 0 8 0ZM8 14.7607C4.27266 14.7607 1.23934 11.7273 1.23934 8C1.23934 4.27266 4.27266 1.23934 8 1.23934C11.728 1.23934 14.7607 4.27266 14.7607 8C14.7607 11.7273 11.7273 14.7607 8 14.7607Z"
                                        fill="#3C72FC" />
                                </svg>
                                Sun: 09.00 AM - 4.00 PM
                            </li>
                            <li class="secondary-color justify-content-start gap-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.8505 9.41291L8.61967 7.73979V4.3316C8.61967 3.98891 8.34266 3.71191 7.99998 3.71191C7.65729 3.71191 7.38029 3.98891 7.38029 4.3316V8.04966C7.38029 8.24485 7.47201 8.42892 7.62817 8.54541L10.1069 10.4044C10.2138 10.485 10.3441 10.5285 10.478 10.5284C10.667 10.5284 10.8529 10.4435 10.9744 10.2799C11.1802 10.0066 11.1244 9.61804 10.8505 9.41291Z"
                                        fill="#3C72FC" />
                                    <path
                                        d="M8 0C3.58853 0 0 3.58853 0 8C0 12.4115 3.58853 16 8 16C12.4115 16 16 12.4115 16 8C16 3.58853 12.4115 0 8 0ZM8 14.7607C4.27266 14.7607 1.23934 11.7273 1.23934 8C1.23934 4.27266 4.27266 1.23934 8 1.23934C11.728 1.23934 14.7607 4.27266 14.7607 8C14.7607 11.7273 11.7273 14.7607 8 14.7607Z"
                                        fill="#3C72FC" />
                                </svg>
                                Friday: Closed
                            </li>
                            <li class="secondary-color justify-content-start gap-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.8505 9.41291L8.61967 7.73979V4.3316C8.61967 3.98891 8.34266 3.71191 7.99998 3.71191C7.65729 3.71191 7.38029 3.98891 7.38029 4.3316V8.04966C7.38029 8.24485 7.47201 8.42892 7.62817 8.54541L10.1069 10.4044C10.2138 10.485 10.3441 10.5285 10.478 10.5284C10.667 10.5284 10.8529 10.4435 10.9744 10.2799C11.1802 10.0066 11.1244 9.61804 10.8505 9.41291Z"
                                        fill="#3C72FC" />
                                    <path
                                        d="M8 0C3.58853 0 0 3.58853 0 8C0 12.4115 3.58853 16 8 16C12.4115 16 16 12.4115 16 8C16 3.58853 12.4115 0 8 0ZM8 14.7607C4.27266 14.7607 1.23934 11.7273 1.23934 8C1.23934 4.27266 4.27266 1.23934 8 1.23934C11.728 1.23934 14.7607 4.27266 14.7607 8C14.7607 11.7273 11.7273 14.7607 8 14.7607Z"
                                        fill="#3C72FC" />
                                </svg>
                                Emergency: 24 hours
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service area end here -->

<!-- Graphic Designing Work Process start here -->
<section class="projects-area pt-40 pb-50">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5>
                <img class="me-1" src="{{asset('/assets/front/images/icon/section-title.webp')}}" alt="icon">
                GRAPHIC DESIGNING
            </h5>
            <h2>Our Creative Graphic Designing</h2>
            <p>We design <strong>visually stunning and brand-focused graphics</strong> that capture attention, inspire trust, and create a lasting impact across all digital platforms.</p>
        </div>


        <!-- Step 1 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/apps5.webp')}}" alt="Design Research & Strategy">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 1: Research & Creative Strategy</h3>
                <p>We begin every project with a deep understanding of your <strong>brand, audience, and goals</strong>.
                    Our creative team conducts <strong>market research and competitor analysis</strong> to craft a design strategy
                    that ensures your brand <strong>stands out and connects with your audience</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Brand analysis & creative planning</li>
                    <li><i class="fa-solid fa-check"></i> Competitor research for unique positioning</li>
                    <li><i class="fa-solid fa-check"></i> Strategy aligned with business objectives</li>
                    <li><i class="fa-solid fa-check"></i> Creative roadmap for consistent branding</li>
                </ul>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/design.webp')}}" alt="UI/UX Design & Branding">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 2: Conceptualization & Design</h3>
                <p>Our designers bring ideas to life with <strong>creative concepts, mood boards, and mockups</strong>.
                    From <strong>logo design and brand identity</strong> to <strong>social media creatives and marketing materials</strong>,
                    we ensure your brand <strong>looks professional, modern, and memorable</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Unique & modern logo design</li>
                    <li><i class="fa-solid fa-check"></i> Engaging brand identity & style guides</li>
                    <li><i class="fa-solid fa-check"></i> Creative social media & marketing visuals</li>
                    <li><i class="fa-solid fa-check"></i> Custom designs tailored to your audience</li>
                </ul>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/webs3.webp')}}" alt="Design Execution">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 3: Design Execution & Delivery</h3>
                <p>Once the concept is approved, our team creates <strong>high-quality, visually stunning designs</strong>
                    optimized for both <strong>digital and print platforms</strong>. Every design is created with attention to detail,
                    ensuring it strengthens your <strong>brand recognition and customer engagement</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> High-resolution designs for print & digital</li>
                    <li><i class="fa-solid fa-check"></i> Consistent branding across all channels</li>
                    <li><i class="fa-solid fa-check"></i> Marketing banners, posters & promotional graphics</li>
                    <li><i class="fa-solid fa-check"></i> Eye-catching visuals that drive engagement</li>
                </ul>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/laundrydesign.webp')}}" alt="Client Success & Results">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 4: Client Success & Brand Growth</h3>
                <p>We focus on delivering <strong>100% client satisfaction</strong> with designs that not only look good
                    but also <strong>deliver results</strong>. Our creative solutions have helped multiple businesses across the UAE
                    achieve <strong>stronger brand recognition, customer trust, and higher engagement</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Proven record of happy, satisfied clients</li>
                    <li><i class="fa-solid fa-check"></i> Stronger brand recognition & credibility</li>
                    <li><i class="fa-solid fa-check"></i> Improved customer engagement & trust</li>
                    <li><i class="fa-solid fa-check"></i> Long-term creative partnership for growth</li>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- Graphic Designing Work Process end here -->


<div class="container mt-30  pt-30 pb-40">

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
    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Common Queries About Our Graphic Designing Services</h3>
        <p class="mb-30">We often receive questions from businesses about our graphic designing services such as how the design process works what types of designs we offer and how long it takes to deliver a project. At MetaDigital we provide complete solutions</p>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms"
                data-wow-duration="1500ms">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        What types of graphic designing services do you provide?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>We offer a wide range of services including logo design social media creatives brochures flyers business cards web graphics infographics and complete branding solutions tailored to your business needs.
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
                        Can I request revisions if I am not satisfied with the design?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Yes absolutely We offer revisions to make sure the final design perfectly matches your brand vision and requirements.
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
                        Why should I choose your agency for graphic designing services?
                    </button>
                </h2>
                <div id="collapsethree" class="accordion-collapse collapse"
                    aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>At MetaDigital we combine creativity strategy and professionalism. Our designs are not only visually appealing but also aligned with your brand identity helping you attract more customers and build long-term recognition
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="600ms"
                data-wow-duration="1500ms">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                        aria-expanded="false" aria-controls="collapseFour">
                        Do you provide custom graphic designs or use templates?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse"
                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>All our designs are 100% custom-made. We do not rely on templates ensuring that your brand gets unique and original visuals that stand out.
                        </p>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- Quote area start here -->
<section class="quote-area pt-20 pb-80">
    <div class="container">
        <div class="quote__wrp gradient-bg">
            <div class="counter__shape wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="{{asset('/assets/front/images/shape/quote-shape.webp')}}" alt="shape">
            </div>
            <div class="quote__shape bobble__animation">
                <img src="{{asset('/assets/front/images/shape/quote-shape2.webp')}}" alt="shape">
            </div>
            <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between">
                <div class="section-header">
                    <h5 class="wow fadeInLeft text-white" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <svg class="me-1" width="28" height="12" viewBox="0 0 28 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.75" y="0.75" width="18.5" height="10.5" rx="5.25" stroke="white"
                                stroke-width="1.5" />
                            <rect x="8.75" y="0.75" width="18.5" height="10.5" rx="5.25" fill="white"
                                stroke="white" stroke-width="1.5" />
                        </svg>
                        GET IN TOUCH
                    </h5>
                    <h2 class="wow fadeInLeft text-white" data-wow-delay="200ms" data-wow-duration="1500ms">
                        So What you are
                        Waiting <br> For?</h2>
                </div>
                <a href="{{route('contact')}}" class="btn-one wow fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">Get Our Services <i class="fa-regular fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Quote area end here -->

@endsection