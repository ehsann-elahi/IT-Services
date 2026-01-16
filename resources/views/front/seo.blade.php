@extends('layout.app')
@section('title','SEO & Lead Generation Sale | Dubai | Abu Dhabi')
@section('description','Grow your business with Dubai & Abu Dhabi-based best online marketing services provider company.Services using google ads, pay-per-click and local SEO')
@section('og:description','Grow your business with Dubai & Abu Dhabi-based best online marketing services provider company.Services using google ads, pay-per-click and local SEO')
@section('og:title','SEO & Lead Generation Sale | Dubai | Abu Dhabi')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/privacy-policy') -->
@section('canonical', rtrim(url()->current(), '/') . '/')
@section('content')
<section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{asset('assets/front/images/banner/seo.webp')}}">

    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Search Engine Optimization</h1>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <p class="text-white">Social Media Management, Search engine optimization, Social Media advertisement, Smart Ads, and Google Ads</p>
            <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Service
                Details</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Service area start here -->
<section class="service-single-area pt-120 pb-50">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 order-2 order-lg-1">
                <div class="service-single__left-item">
                    <div class="image mb-50">
                        <img src="{{asset('/assets/front/images/service/seo.webp')}}" alt="image">
                    </div>
                    <h3 class="title mb-30">Search Engine Optimization Services</h3>
                    <p class="mb-20">Our SEO service is most appreciated service by our clients as we help a number of businesses to come out from loss to profit in the shortest time span that is now become part of our family & enjoying the fruitful outcomes of our great cheaper, state of the art SEO services solutions..</p>
                    <p>Our SEO strategies are designed to bring your website to the top of Google and other search engines so when people search for services like yours they find you first.We offer a full range of SEO solutions tailored to your business goals</p>
                    <div class="row g-5 mt-40 mb-40 align-items-center">
                        <div class="col-lg-5">
                            <h4 class="mb-20">Benefits With Our Service</h4>
                            <ul>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Higher Rankings on Google</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>More Targeted Traffic</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Increased Brand Credibility</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Strong Local Presence</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Long-Term Business Growth</li>
                            </ul>
                        </div>
                        <div class="col-lg-7">
                            <div class="image">
                                <img src="{{asset('/assets/front/images/service/seo1.webp')}}" alt="image">
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

<!-- SEO Work Process start here -->
<section class="projects-area pt-40 pb-50">
    <div class="container">



        <div class="section-header text-center mb-60">
            <h5>
                <img class="me-1" src="{{asset('/assets/front/images/icon/section-title.webp')}}" alt="icon">
                SEO SOLUTIONS
            </h5>
            <h2>Our SEO Expertise</h2>
            <p>With proven SEO strategies, we help businesses achieve <strong>top Google rankings, high-quality traffic, and 100% measurable results</strong> across the UAE market.</p>
        </div>

        <!-- Step 1 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/seo1.webp')}}" alt="SEO Audit & Strategy">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 1: SEO Audit & Strategy</h3>
                <p>We start with a detailed <strong>SEO audit and competitor analysis</strong> to understand your
                    current rankings, industry trends, and target audience. Based on insights, we create a
                    <strong>custom SEO strategy</strong> to help your business rank higher and gain more organic traffic.
                </p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Comprehensive website SEO audit</li>
                    <li><i class="fa-solid fa-check"></i> In-depth competitor & keyword analysis</li>
                    <li><i class="fa-solid fa-check"></i> Tailored SEO strategy for your business</li>
                    <li><i class="fa-solid fa-check"></i> Clear roadmap for long-term rankings</li>
                </ul>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/seo2.webp')}}" alt="On-Page Optimization">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 2: On-Page Optimization</h3>
                <p>We optimize your website with <strong>SEO best practices</strong> including meta tags, site speed,
                    mobile responsiveness, and content structure. Our goal is to create a <strong>user-friendly and
                        search-engine-friendly</strong> website that drives better rankings and conversions.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Optimized titles, meta descriptions & headings</li>
                    <li><i class="fa-solid fa-check"></i> Improved site speed & mobile performance</li>
                    <li><i class="fa-solid fa-check"></i> SEO-friendly content & internal linking</li>
                    <li><i class="fa-solid fa-check"></i> Error-free technical SEO setup</li>
                </ul>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/seo3.webp')}}" alt="Off-Page SEO & Link Building">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 3: Off-Page SEO & Link Building</h3>
                <p>We strengthen your online authority with <strong>high-quality backlinks, content marketing, and local SEO strategies</strong>.
                    This ensures your business gains <strong>trust, visibility, and higher Google rankings</strong> in the UAE and beyond.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> White-hat link building strategies</li>
                    <li><i class="fa-solid fa-check"></i> Local SEO for UAE business growth</li>
                    <li><i class="fa-solid fa-check"></i> Content-driven outreach campaigns</li>
                    <li><i class="fa-solid fa-check"></i> Stronger brand authority & visibility</li>
                </ul>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/seo4.webp')}}" alt="Tracking & Results">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 4: Tracking, Reporting & Results</h3>
                <p>We continuously monitor your <strong>rankings, traffic, and conversions</strong> to ensure
                    100% measurable results. With transparent reports and ongoing optimization, we help you
                    maintain <strong>top rankings and long-term SEO success</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Monthly performance reports</li>
                    <li><i class="fa-solid fa-check"></i> Keyword ranking & traffic tracking</li>
                    <li><i class="fa-solid fa-check"></i> Continuous SEO improvements</li>
                    <li><i class="fa-solid fa-check"></i> 100% client satisfaction guaranteed</li>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- SEO Work Process end here -->



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
    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Common Queries About Our SEO Services</h2>
    <p class="mb-30 mt-20">Many businesses have questions before starting their SEO journey. From how long SEO takes to deliver results to whether it works better than paid ads we are here to clear your doubts.We make sure you feel confident about investing in search engine optimization for long-term growth.</p>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms"
            data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    Is SEO suitable for small businesses?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Absolutely. Local SEO helps small businesses get discovered in their area making it easier to compete with bigger brands.
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
                    How do I know SEO is working?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>We provide regular reports on traffic keyword rankings and leads so you can track real growth.
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
                    How long does SEO take to show results?
                </button>
            </h2>
            <div id="collapsethree" class="accordion-collapse collapse"
                aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>SEO is a long-term investment. Most businesses start seeing improvements in 3–6 months with stronger results over time.
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
                    Do I still need SEO if I run ads?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse"
                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Yes Ads stop showing when you stop paying, but SEO builds lasting visibility and trust. Both work even better together.
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