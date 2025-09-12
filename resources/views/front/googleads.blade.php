@extends('layout.app')
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
        <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Google Ads</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <p class="text-white">We specialize in creating customized ad campaigns that bring real results</p>
            <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Service
                Details</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Service area start here -->
<section class="service-single-area pt-120 pb-120">
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
                                <img src="{{asset('assets/front/images/service/service-single-image2.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <p class="mb-40">If your target customers are in Dubai and Abu Dhabi our team can manage both local PPC campaigns and Google Ads campaigns</p>
                    <h3 class="title mb-30">Common Queries About Our Google Ads Services</h3>
                    <p class="mb-30">we understand that businesses often have questions before investing in Google Ads Services. That is why our team provides clear guidance on campaign setup keyword targeting budget planning and ad optimization.</p>
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
            </div>
            <div class="col-lg-4 order-1 order-lg-2">
                <div class="service-single__right-item">
                    <div class="item sub-bg mb-30">
                        <h4 class="mb-20">All Services</h4>
                        <ul class="category service-category">
                            <li class="active"><a href="#0">Digital Marketing</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="#0">Web Development</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="#0">App Development</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="#0">SEO</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="#0">Graphic Desigining</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="#0">Social Media Marketing</a> <i
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

@endsection