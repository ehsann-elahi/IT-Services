@extends('layout.app')
@section('title','Secure Shopping at the Best Place to Buy Window Curtains')
@section('description','We understand the importance of trust when shopping online. That is why we ensure safe transactions and strict privacy standards. Whether you are browsing luxury window curtains Dubai residents love or looking for the best place to buy window curtains')
@section('og:description','We understand the importance of trust when shopping online. That is why we ensure safe transactions and strict privacy standards. Whether you are browsing luxury window curtains Dubai residents love or looking for the best place to buy window curtains')
@section('og:title','Secure Shopping at the Best Place to Buy Window Curtains')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/privacy-policy') -->
@section('canonical', url()->current())
@section('content')
<section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{asset('assets/front/images/banner/banner-inner-page.jpg')}}">
    <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
        <img src="{{asset('assets/front/images/banner/inner-banner-shape2.png')}}" alt="shape">
    </div>
    <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
        <img src="{{asset('assets/front/images/banner/inner-banner-shape1.png')}}" alt="shape">
    </div>
    <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
        <img class="sway__animationX" src="{{asset('assets/front/images/banner/inner-banner-shape3.png')}}" alt="shape">
    </div>
    <div class="container">
        <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">App Development</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <p class="text-white">We build apps designed around your goals and audience.</p>
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
                        <img src="{{asset('assets/front/images/service/service-single-image1.jpg')}}" alt="image">
                        <div class="service-single__video-btn">
                            <div class="video-btn video-pulse wow fadeIn" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=iVqz_4M5mA0"><i
                                        class="fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <h3 class="title mb-30">App Development Service</h3>
                    <p class="mb-20">At MetaDigital Marketing we design and develop mobile apps that do more than just look good they solve real problems. Our expert team creates user friendly iOS and Android applications tailored to your business needs.</p>
                    <p>We build powerful user-friendly mobile and web applications tailored to your business needs. From idea to launch our expert developers ensure seamless performancea engaging designs and scalable solutions that help you stand out in today digital market.</p>
                    <div class="row g-5 mt-40 mb-40 align-items-center">
                        <div class="col-lg-5">
                            <h4 class="mb-20">Benefits With Our Service</h4>
                            <ul>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Customized Solutions</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Better User Experience</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Business Growth</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Latest Technology</li>
                                <li class="mb-15"><i class="fa-solid fa-check"></i>Ongoing Support</li>
                            </ul>
                        </div>
                        <div class="col-lg-7">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/service-single-image2.jpg')}}" alt="image">
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

<!-- App Development Work Process start here -->
<section class="projects-area pt-20 pb-50">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5>
                <img class="me-1" src="{{asset('assets/front/images/icon/section-title.png')}}" alt="icon">
                APP DEVELOPMENT
            </h5>
            <h2>Our App Development Solutions</h2>
            <p>From concept to launch, we create <strong>intuitive, feature-rich, and high-performing mobile apps</strong> that empower businesses to connect with their audience anytime, anywhere.</p>
        </div>

        <!-- Step 1 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/apps1.png')}}" alt="App Research & Strategy">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 1: Research & Strategy</h3>
                <p>Our app development journey starts with <strong>in-depth market research, competitor analysis, and user profiling</strong>.
                    We design a <strong>custom app strategy</strong> tailored to your business goals, ensuring your app delivers <strong>real value and growth</strong> from day one.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Business & market research for app success</li>
                    <li><i class="fa-solid fa-check"></i> Clear roadmap aligned with client goals</li>
                    <li><i class="fa-solid fa-check"></i> User-focused development strategies</li>
                    <li><i class="fa-solid fa-check"></i> Scalable architecture for future growth</li>
                </ul>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/apps5.png')}}" alt="App UI/UX Design">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 2: UI/UX Design & Prototyping</h3>
                <p>We create <strong>engaging, intuitive, and user-friendly app designs</strong> that keep users hooked.
                    With a focus on <strong>mobile-first, responsive design</strong>, we ensure your app delivers a <strong>seamless user experience</strong> across all devices.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Modern, attractive app interface design</li>
                    <li><i class="fa-solid fa-check"></i> User-friendly navigation & interactions</li>
                    <li><i class="fa-solid fa-check"></i> Mobile-first & responsive app design</li>
                    <li><i class="fa-solid fa-check"></i> Wireframes & prototypes for client approval</li>
                </ul>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/apps2.png')}}" alt="App Development">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 3: App Development & Integration</h3>
                <p>Using the <strong>latest technologies</strong>, our team builds apps that are <strong>fast, secure, and scalable</strong>.
                    We specialize in both <strong>iOS and Android app development</strong>, as well as <strong>cross-platform solutions</strong>
                    that maximize your reach and performance.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Native & cross-platform app development</li>
                    <li><i class="fa-solid fa-check"></i> Secure, high-performance coding standards</li>
                    <li><i class="fa-solid fa-check"></i> API & third-party service integrations</li>
                    <li><i class="fa-solid fa-check"></i> Scalable apps designed for growth</li>
                </ul>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/app3.png')}}" alt="App Launch & Support">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 4: Testing, Launch & Ongoing Support</h3>
                <p>Before launch, we run <strong>extensive testing</strong> to ensure your app is bug-free, fast, and user-ready.
                    Once deployed, we provide <strong>continuous updates, app store optimization, and long-term support</strong>
                    to guarantee <strong>100% client satisfaction</strong> and <strong>maximum ROI</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Rigorous testing for flawless performance</li>
                    <li><i class="fa-solid fa-check"></i> App Store & Google Play optimization</li>
                    <li><i class="fa-solid fa-check"></i> Continuous monitoring & updates</li>
                    <li><i class="fa-solid fa-check"></i> Proven track record of successful app launches</li>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- App Development Work Process end here -->


<!-- Service area end here -->
<div class="container mt-30  pt-30">

    <h3 class="title mb-30 text-center">Common Queries About Our App Development Services</h3>
    <p class="mb-30">Before venturing into the app development business we know that businesses usually possess questions. We guide our team through the selection of the appropriate platform: iOS Android or cross-platform project schedule. We provide scalability ease of use in terms of performance security.</p>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms"
            data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    How much does custom app development cost?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>The cost of app development depends on features complexity and platform (iOS Android or cross-platform). We provide tailored pricing to ensure you get a high-quality app that fits your budget.
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
                    How long does it take to develop a mobile app?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>On average a standard mobile app takes 2–6 months to develop. The timeline varies based on functionality design requirements and integration needs.
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
                    Will my app be secure and scalable?
                </button>
            </h2>
            <div id="collapsethree" class="accordion-collapse collapse"
                aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Absolutely We follow industry best practices to ensure your app is secure scalable and ready to handle growth as your business expands.
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
                    Can you integrate my app with existing systems or APIs?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse"
                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Of course We specialize in integrating apps with third-party APIs CRMs payment gateways and other systems to enhance functionality.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection