@extends('layout.app')
@section('title','We specialize in creating customized ad campaigns that bring real results')
@section('description','Connect with the best Digital Marketing companies. Compare expert profiles, client success stories & proven results to choose a verified provider that')
@section('og:description','Connect with the best Digital Marketing companies. Compare expert profiles, client success stories & proven results to choose a verified provider thats right for you.')
@section('og:title','We specialize in creating customized ad campaigns that bring real results')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/privacy-policy') -->
@section('canonical', url()->current())
@section('content')
<section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{asset('assets/front/images/banner/googleads.webp')}}">

    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Google Ads</h1>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <p class="text-white">We specialize in creating customized ad campaigns that bring real results</p>
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
                        <img src="{{asset('assets/front/images/service/googlead.png')}}" alt="image">
                    </div>
                    <h3 class="title mb-30">Google Ads Service</h3>
                    <p class="mb-20"> Our Google ads service provides budget-friendly cheaper quick customer attention & transparent solutions to start-ups and businesses who are planning to launch a new product or service in Abu Dhabi & Dubai and those companies who wanted to introduce themselves as market-leading brand or rebrand.</p>
                    <p>we offer professional Google Ads Services to help businesses reach the right customers at the right time. Whether you want more leads sales or brand awareness our certified PPC experts design and manage campaigns that deliver measurable results.</p>
                    <div class="row g-5 mt-40 mb-40 align-items-center">
                        <div class="col-lg-5">
                            <h4 class="mb-20">Benefits With Our Service</h4>
                            <ul>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Get instant traffic and leads</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Pay only when someone clicks</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Highly measurable results</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Drive targeted traffic that converts</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Compete effectively against bigger brands</li>
                            </ul>
                        </div>
                        <div class="col-lg-7">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/google1.png')}}" alt="image">
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

<!-- Google Ads Work Process start here -->
<section class="projects-area pt-40 pb-50">
    <div class="container">

        <div class="section-header text-center mb-60">
            <h5>
                <img class="me-1" src="{{asset('assets/front/images/icon/section-title.png')}}" alt="icon">
                GOOGLE ADS
            </h5>
            <h2>Our Google Ads Expertise</h2>
            <p>We create <strong>high-converting Google Ads campaigns</strong> that drive targeted traffic,
                generate qualified leads, and maximize your ROI with <strong>data-driven strategies and proven results</strong>.</p>
        </div>


        <!-- Step 1 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/google.webp')}}" alt="Campaign Research & Strategy">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 1: Campaign Research & Strategy</h3>
                <p>We begin by understanding your <strong>business goals, target audience, and budget</strong>.
                    Our experts conduct a detailed <strong>market and competitor analysis</strong> to build a
                    <strong>Google Ads strategy</strong> that maximizes ROI and ensures every click counts.
                </p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> In-depth keyword & audience research</li>
                    <li><i class="fa-solid fa-check"></i> Competitor campaign analysis</li>
                    <li><i class="fa-solid fa-check"></i> Tailored Google Ads strategy</li>
                    <li><i class="fa-solid fa-check"></i> Clear ROI-driven roadmap</li>
                </ul>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/google1.webp')}}" alt="Ad Creation & Setup">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 2: Ad Creation & Setup</h3>
                <p>We design <strong>compelling ad copies, creatives, and targeting structures</strong> to ensure your
                    campaigns attract the right customers. From <strong>search and display ads</strong> to
                    <strong>remarketing and shopping campaigns</strong>, we set up everything for success.
                </p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> High-converting ad copy & visuals</li>
                    <li><i class="fa-solid fa-check"></i> Search, Display & Shopping campaign setup</li>
                    <li><i class="fa-solid fa-check"></i> Advanced targeting for UAE audience</li>
                    <li><i class="fa-solid fa-check"></i> Smart bidding & budget optimization</li>
                </ul>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/google3.webp')}}" alt="Campaign Optimization">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 3: Campaign Optimization</h3>
                <p>We continuously monitor and optimize campaigns with <strong>A/B testing, audience refinements, and
                        bid adjustments</strong>. This ensures your ads perform at their best and deliver <strong>higher conversions at lower costs</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Ongoing campaign monitoring</li>
                    <li><i class="fa-solid fa-check"></i> A/B testing of ads & landing pages</li>
                    <li><i class="fa-solid fa-check"></i> Conversion rate optimization</li>
                    <li><i class="fa-solid fa-check"></i> Cost-per-click & ROI improvements</li>
                </ul>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/google2.webp')}}" alt="Reporting & Results">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 4: Reporting & Measurable Results</h3>
                <p>We provide <strong>transparent performance reports</strong> that show exactly how your budget is being spent.
                    With real-time tracking of <strong>clicks, leads, and conversions</strong>, you can see the value and
                    success of your campaigns.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Transparent monthly performance reports</li>
                    <li><i class="fa-solid fa-check"></i> Real-time tracking of ROI & conversions</li>
                    <li><i class="fa-solid fa-check"></i> Actionable insights for better decisions</li>
                    <li><i class="fa-solid fa-check"></i> 100% client satisfaction with proven results</li>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- Google Ads Work Process end here -->


<div class="container mt-30  pt-30">

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
    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Common Queries About Our Google Ads Services</h2>
    <p class="mb-30 mt-20">we understand that businesses often have questions before investing in Google Ads Services. That is why our team provides clear guidance on campaign setup keyword targeting budget planning and ad optimization.</p>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms"
            data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    What are Google Ads and how can they help my business?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Google Ads is an online advertising platform that helps your business appear at the top of Google search results. It drives highly targeted traffic generates leads and increases sales by showing your ads to people already searching for your products or services.
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
                    How much does it cost to run Google Ads?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>The cost of Google Ads depends on your industry competition and keywords. We create a budget-friendly strategy to maximize ROI so you only pay when someone clicks your ad
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
                    How quickly can I see results from Google Ads?
                </button>
            </h2>
            <div id="collapsethree" class="accordion-collapse collapse"
                aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Unlike SEO which takes time Google Ads can deliver instant visibility and traffic as soon as your campaign goes live. However optimizing for the best results may take a few weeks.
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
                    Do I need a big budget to start Google Ads?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse"
                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>No you do not need a large budget. Even small businesses can run effective campaigns with the right targeting and strategy. Our team ensures every dollar of your ad spend works efficiently.
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
                <img src="{{asset('assets/front/images/shape/quote-shape.png')}}" alt="shape">
            </div>
            <div class="quote__shape bobble__animation">
                <img src="{{asset('assets/front/images/shape/quote-shape2.png')}}" alt="shape">
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