@extends('layout.app')
@section('title','Leading SEO and Digital Marketing Agency in Dubai & Abu Dhabi')
@section('description','MetaDigital Marketing is the best global digital marketing agency based in Dubai & Abu Dhabi offering 360° marketing solutions')
@section('og:description','MetaDigital Marketing is the best global digital marketing agency based in Dubai & Abu Dhabi offering 360° marketing solutions')
@section('og:title','Leading SEO and Digital Marketing Agency in Dubai & Abu Dhabi')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/privacy-policy') -->
@section('canonical', url()->current())
@section('content')
<main>
    <!-- Banner area start here -->
    <section class="banner-two-area">
        <div class="banner-two__line">
            <img class="sway_Y__animation" src="{{asset('assets/front/images/banner/banner-line.png')}}" alt="shape">
        </div>
        <div class="swiper banner__slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-two__line-left" data-animation="slideInLeft" data-duration="3s"
                        data-delay=".3s">
                        <img src="{{asset('assets/front/images/banner/banner-two-left-line.png')}}" alt="shape">
                    </div>
                    <div class="banner-two__shape2" data-animation="slideInRight" data-duration="2s"
                        data-delay=".3s">
                        <img src="{{asset('assets/front/images/banner/banner-two-solid-right-down.png')}}" alt="shape">
                    </div>
                    <div class="banner-two__shape1" data-animation="slideInRight" data-duration="2s"
                        data-delay=".5s">
                        <img src="{{asset('assets/front/images/banner/banner-two-solid-right-up.png')}}" alt="shape">
                    </div>
                    <div class="banner-two__right-shape wow slideInRight" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <img class="sway_Y__animation" src="{{asset('assets/front/images/banner/banner-two-right-shape.png')}}"
                            alt="shape">
                    </div>
                    <div class="banner-two__circle-solid">
                        <img class="animation__rotate" src="{{asset('assets/front/images/banner/banner-two-circle-solid.png')}}"
                            alt="shape">
                    </div>
                    <div class="banner-two__circle-regular">
                        <img class="animation__rotateY" src="{{asset('assets/front/images/banner/banner-two-circle-regular.png')}}"
                            alt="shape">
                    </div>
                    <div class="slide-bg" data-background="{{asset('assets/front/images/banner/1.png')}}"></div>
                    <div class="container">
                        <div class="banner-two__content text-center">
                            <h2 data-animation="fadeInUp" data-delay=".3s" class="text-white mb-20">
                                MetaDigital Marketing
                            </h2>
                            <h1 data-animation="fadeInUp" data-delay=".5s" class="text-white">
                                Digital Marketing in Dubai & Abu Dhabi
                            </h1>
                            <p data-animation="fadeInUp" data-delay=".7s" class="mt-20">
                                We are here to provide a digital solution for your business. Let's Stand out from the crowd.<br> We provide you the customized services that fully fit your business type. So what are you waiting for???


                            </p>
                            <a data-animation="fadeInUp" data-delay="1s" href="{{route('contact')}}"
                                class="btn-one mt-50">Get Our Services <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-two__line-left" data-animation="slideInLeft" data-duration="3s"
                        data-delay=".3s">
                        <img src="{{asset('assets/front/images/banner/banner-two-left-line.png')}}" alt="shape">
                    </div>
                    <div class="banner-two__shape2" data-animation="slideInRight" data-duration="2s"
                        data-delay=".3s">
                        <img src="{{asset('assets/front/images/banner/banner-two-solid-right-down.png')}}" alt="shape">
                    </div>
                    <div class="banner-two__shape1" data-animation="slideInRight" data-duration="2s"
                        data-delay=".5s">
                        <img src="{{asset('assets/front/images/banner/banner-two-solid-right-up.png')}}" alt="shape">
                    </div>
                    <div class="banner-two__right-shape wow slideInRight" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <img class="sway_Y__animation" src="{{asset('assets/front/images/banner/banner-two-right-shape.png')}}"
                            alt="shape">
                    </div>
                    <div class="banner-two__circle-solid">
                        <img class="animation__rotate" src="{{asset('assets/front/images/banner/banner-two-circle-solid.png')}}"
                            alt="shape">
                    </div>
                    <div class="banner-two__circle-regular">
                        <img class="animation__rotateY" src="{{asset('assets/front/images/banner/banner-two-circle-regular.png')}}"
                            alt="shape">
                    </div>
                    <div class="slide-bg" data-background="{{asset('assets/front/images/banner/2.png')}}"></div>
                    <div class="container">
                        <div class="banner-two__content text-center">
                            <h2 data-animation="fadeInUp" data-delay=".3s" class="text-white mb-20">
                                MetaDigital Marketing
                            </h2>
                            <h1 data-animation="fadeInUp" data-delay=".5s" class="text-white">
                                Customer Support 24/7
                            </h1>
                            <p data-animation="fadeInUp" data-delay=".7s" class="mt-20">
                                We believe great service does not end after your order.<br> Our friendly support team is always ready to listen guide and resolve your concerns quickly
                            </p>
                            <a data-animation="fadeInUp" data-delay="1s" href="{{route('contact')}}"
                                class="btn-one mt-50">Get Our Services <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-two__line-left" data-animation="slideInLeft" data-duration="3s"
                        data-delay=".3s">
                        <img src="{{asset('assets/front/images/banner/banner-two-left-line.png')}}" alt="shape">
                    </div>
                    <div class="banner-two__shape2" data-animation="slideInRight" data-duration="2s"
                        data-delay=".3s">
                        <img src="{{asset('assets/front/images/banner/banner-two-solid-right-down.png')}}" alt="shape">
                    </div>
                    <div class="banner-two__shape1" data-animation="slideInRight" data-duration="2s"
                        data-delay=".5s">
                        <img src="{{asset('assets/front/images/banner/banner-two-solid-right-up.png')}}" alt="shape">
                    </div>
                    <div class="banner-two__right-shape wow slideInRight" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <img class="sway_Y__animation" src="{{asset('assets/front/images/banner/banner-two-right-shape.png')}}"
                            alt="shape">
                    </div>
                    <div class="banner-two__circle-solid">
                        <img class="animation__rotate" src="{{asset('assets/front/images/banner/banner-two-circle-solid.png')}}"
                            alt="shape">
                    </div>
                    <div class="banner-two__circle-regular">
                        <img class="animation__rotateY" src="{{asset('assets/front/images/banner/banner-two-circle-regular.png')}}"
                            alt="shape">
                    </div>
                    <div class="slide-bg" data-background="{{asset('assets/front/images/banner/3.png')}}"></div>
                    <div class="container">
                        <div class="banner-two__content text-center">
                            <h2 data-animation="fadeInUp" data-delay=".3s" class="text-white mb-20">
                                MetaDigital Marketing
                            </h2>
                            <h1 data-animation="fadeInUp" data-delay=".5s" class="text-white">
                                Making Connections
                            </h1>
                            <p data-animation="fadeInUp" data-delay=".7s" class="mt-20">
                                Every interaction is a chance to build trust. Whether it is with client colleagues or local communities <br> we focus on creating lasting connections that matter.


                            </p>
                            <a data-animation="fadeInUp" data-delay="1s" href="{{route('contact')}}"
                                class="btn-one mt-50">Get Our Services <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__dot-wrp banner-two__dot-wrp">
            <div class="dot-light banner__dot"></div>
        </div>
    </section>
    <!-- Banner area end here -->

    <!-- Process area start here -->
    <!-- Work Process area start here -->
    <section class="process-area pt-80 pb-80">
        <div class="container">
            <div class="section-header text-center mb-60">
                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <img class="me-1" src="{{asset('assets/front/images/icon/section-title.png')}}" alt="icon">
                    OUR PROCESS
                </h5>
                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    How We Deliver Success for Our Clients
                </h2>
                <p class="wow fadeInUp mt-3" data-wow-delay="300ms" data-wow-duration="1500ms">
                    At <strong>MetaDigital Marketing</strong>, we follow a <em>proven step-by-step process</em>
                    to ensure every project—whether it’s <strong>SEO, Web Development, App Development, or Digital Marketing</strong>—
                    delivers measurable growth and long-term success. Our approach combines <strong>research, strategy, execution, and optimization</strong>.
                </p>
            </div>

            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="process__item mb-100 text-center">
                        <div class="process__image">
                            <img src="{{asset('assets/front/images/process/process-image1.png')}}" alt="Discovery">
                            <span class="process-number">1</span>
                        </div>
                        <div class="process__content">
                            <h4 class="mt-25 mb-10">Research & Discovery</h4>
                            <p>We analyze your <strong>business goals, competitors, and target audience</strong> to build a strong foundation for success.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="process__item mb-100 text-center">
                        <div class="process__image">
                            <img src="{{asset('assets/front/images/process/process-image2.png')}}" alt="Strategy">
                            <span class="process-number">2</span>
                        </div>
                        <div class="process__content">
                            <h4 class="mt-25 mb-10">Strategy & Planning</h4>
                            <p>We craft a <strong>custom roadmap</strong>—covering design, marketing, or technology—that aligns with your goals.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="process__item mb-100 text-center">
                        <div class="process__image">
                            <img src="{{asset('assets/front/images/process/process-image3.png')}}" alt="Execution">
                            <span class="process-number">3</span>
                        </div>
                        <div class="process__content">
                            <h4 class="mt-25 mb-10">Execution & Development</h4>
                            <p>Our team executes with <strong>precision & creativity</strong>, delivering websites, apps, and campaigns that perform.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Work Process area end here -->

    <!-- Process area end here -->



    <!-- Service area start here -->
    <section class="service-two-area secondary-bg pt-120 pb-120">
        <div class="service-two__shape-left sway_Y__animationY">
            <img src="{{asset('assets/front/images/shape/service-two-shape-left.png')}}" alt="shape">
        </div>
        <div class="service-two__shape-right sway_Y__animation">
            <img src="{{asset('assets/front/images/shape/service-two-shape-right.png')}}" alt="shape">
        </div>
        <div class="container">
            <div class="d-flex gap-4 flex-wrap align-items-center justify-content-between mb-60">
                <div class="section-header">
                    <h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.75" y="0.750061" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                stroke-width="1.5" />
                            <mask id="path-2-inside-1_670_477" fill="white">
                                <path
                                    d="M3 6.00006C3 3.79092 4.79086 2.00006 7 2.00006H13C15.2091 2.00006 17 3.79092 17 6.00006C17 8.2092 15.2091 10.0001 13 10.0001H7C4.79086 10.0001 3 8.2092 3 6.00006Z" />
                            </mask>
                            <path
                                d="M3 6.00006C3 2.96249 5.46243 0.500061 8.5 0.500061H11.5C14.5376 0.500061 17 2.96249 17 6.00006C17 4.61935 15.2091 3.50006 13 3.50006H7C4.79086 3.50006 3 4.61935 3 6.00006ZM17 6.00006C17 9.03763 14.5376 11.5001 11.5 11.5001H8.5C5.46243 11.5001 3 9.03763 3 6.00006C3 7.38077 4.79086 8.50006 7 8.50006H13C15.2091 8.50006 17 7.38077 17 6.00006ZM3 10.0001V2.00006V10.0001ZM17 2.00006V10.0001V2.00006Z"
                                fill="#3C72FC" mask="url(#path-2-inside-1_670_477)" />
                        </svg>
                        SERVICES WE’RE OFFERING
                    </h5>
                    <h2 class="text-white wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        Digital Marketing Services</h2>
                </div>
                <div class="arry-btn  d-flex gap-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <button class="arry-prev service__arry-prev"><i class="fa-light fa-chevron-left"></i></button>
                    <button class="arry-next service__arry-next active"><i
                            class="fa-light fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="swiper service-two__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/service-image1.jpg')}}" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="{{asset('assets/front/images/icon/service-two-icon1.png')}}" alt="icon">
                                </div>
                                <div class="shape"><img src="{{asset('assets/front/images/shape/service-two-item-shape.png')}}"
                                        alt="shape"></div>
                                <h4><a href="{{route('WebDevelopment')}}" class="primary-hover">Website Development</a></h4>
                                <p>We are professional team who are passionate to transform the business into digital. Web development can be first step to showing your brand/services on digital platforms in Dubai & Abu Dhabi </p>
                                <a class="read-more-btn" href="{{route('WebDevelopment')}}">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/service-image2.jpg')}}" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="{{asset('assets/front/images/icon/service-two-icon2.png')}}" alt="icon">
                                </div>
                                <div class="shape"><img src="{{asset('assets/front/images/shape/service-two-item-shape.png')}}"
                                        alt="shape"></div>
                                <h4><a href="{{route('Digitalmarketing')}}" class="primary-hover">Digital Marketing</a></h4>
                                <p>Does your marketing strategy show you saturation in sales? or you are disappointed due to the failure of the marketing strategy & couldn't show up on the online platform? No worries!</p>
                                <a class="read-more-btn" href="{{route('Digitalmarketing')}}">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/service-image3.jpg')}}" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="{{asset('assets/front/images/icon/service-two-icon3.png')}}" alt="icon">
                                </div>
                                <div class="shape"><img src="{{asset('assets/front/images/shape/service-two-item-shape.png')}}"
                                        alt="shape"></div>
                                <h4><a href="{{route('googleads')}}" class="primary-hover">Google Ads</a></h4>
                                <p>Our Google ads service provides budget friendly cheaper quick customer attention solutions to start-ups and businesses who are planning to launch a new product or service</p>
                                <a class="read-more-btn" href="{{route('googleads')}}">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/service-image1.jpg')}}" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="{{asset('assets/front/images/icon/service-two-icon1.png')}}" alt="icon">
                                </div>
                                <div class="shape"><img src="{{asset('assets/front/images/shape/service-two-item-shape.png')}}"
                                        alt="shape"></div>
                                <h4><a href="{{route('Seo')}}" class="primary-hover">Search Engine Optimization</a></h4>
                                <p>Our SEO service is most appreciated service by our clients as we help a number of businesses to come out from loss to profit in the shortest time span that is now become part of our family</p>
                                <a class="read-more-btn" href="{{route('Seo')}}">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/service-image2.jpg')}}" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="{{asset('assets/front/images/icon/service-two-icon2.png')}}" alt="icon">
                                </div>
                                <div class="shape"><img src="{{asset('assets/front/images/shape/service-two-item-shape.png')}}"
                                        alt="shape"></div>
                                <h4><a href="{{route('Graphicdesigning')}}" class="primary-hover">Graphic Desigining</a></h4>
                                <p>Does your marketing strategy show you saturation in sales? or you are disappointed due to the failure of the marketing strategy & couldn't show up on the online platform? No worries!</p>
                                <a class="read-more-btn" href="{{route('Graphicdesigning')}}">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Service area end here -->

    <!-- Pricing area start here -->
    <section class="pricing-area pt-120 pb-50">
        <div class="container">
            <div class="section-header text-center mb-60">
                <h5>
                    <img class="me-1" src="{{asset('assets/front/images/icon/section-title.png')}}" alt="icon">
                    PRICE PLANS
                </h5>
                <h2>Affordable Digital Marketing Solutions</h2>
                <p>MetaDigital Marketing is a global digital marketing agency based in Dubai & Abu Dhabi that furnish out and out marketing solutions to the clients in UAE covering social media marketing website SEO</p>
            </div>

            <div class="row g-4">

                <!-- Digital Marketing -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="pricing__item">
                        <div class="item-shape">
                            <img src="{{asset('assets/front/images/shape/pricing-item-shape.png')}}" alt="shape">
                        </div>
                        <div class="pricing-head">
                            <div>
                                <h4 class="text-white mb-10">Digital Marketing</h4>
                                <h2>AED 300<span>/starting</span></h2>
                            </div>
                            <div class="pricing-icon" data-background="{{asset('assets/front/images/shape/pricing-icon-bg.png')}}">
                                <i class="fas fa-bullhorn text-white"></i>
                            </div>
                        </div>
                        <ul>
                            <li>Social Media Marketing in UAE</li>
                            <li>SEO Optimization for Dubai Market</li>
                            <li>Google Ads & PPC Campaigns</li>
                            <li>Content Creation & Branding</li>
                            <li>Monthly Strategy Reports</li>
                        </ul>
                        <a href="{{route('contact')}}" class="btn-one d-block text-center">Get Services <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>

                <!-- Web Development -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="pricing__item popular-plan">
                        <div class="item-shape">
                            <img src="{{asset('assets/front/images/shape/pricing-item-shape.png')}}" alt="shape">
                        </div>
                        <div class="pricing-head">
                            <div>
                                <h4 class="text-white mb-10">Web Development</h4>
                                <h2>AED 300<span>/starting</span></h2>
                            </div>
                            <div class="pricing-icon" data-background="{{asset('assets/front/images/shape/pricing-icon-bg.png')}}">
                                <i class="fas fa-code text-white"></i>
                            </div>
                        </div>
                        <ul>
                            <li>Responsive Business Websites</li>
                            <li>E-commerce Development</li>
                            <li>Custom WordPress & PHP</li>
                            <li>Hosting & Domain Setup</li>
                            <li>SEO-Friendly Web Design</li>
                        </ul>
                        <a href="{{route('contact')}}" class="btn-one d-block text-center">Get Services <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>

                <!-- App Development -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="pricing__item">
                        <div class="item-shape">
                            <img src="{{asset('assets/front/images/shape/pricing-item-shape.png')}}" alt="shape">
                        </div>
                        <div class="pricing-head">
                            <div>
                                <h4 class="text-white mb-10">App Development</h4>
                                <h2>AED 300<span>/starting</span></h2>
                            </div>
                            <div class="pricing-icon" data-background="{{asset('assets/front/images/shape/pricing-icon-bg.png')}}">
                                <i class="fas fa-mobile-alt text-white"></i>
                            </div>
                        </div>
                        <ul>
                            <li>iOS & Android Development</li>
                            <li>Cross-Platform Apps (Flutter)</li>
                            <li>E-commerce & Business Apps</li>
                            <li>Custom App UI/UX Design</li>
                            <li>Maintenance & Support</li>
                        </ul>
                        <a href="{{route('contact')}}" class="btn-one d-block text-center">Get Services <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Pricing area end here -->

    <!-- About area start here -->
    <section class="about-area about-three-area sub-bg pt-120">
        <div class="about__shape wow slideInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
            <img src="{{asset('assets/front/images/shape/about-three-line.png')}}" alt="shape">
        </div>
        <div class="about-three__box-up wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
            <img class="sway_Y__animationY" src="{{asset('assets/front/images/shape/about-three-box-up.png')}}" alt="shape">
        </div>
        <div class="about-three__box-down wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img class="sway_Y__animation" src="{{asset('assets/front/images/shape/about-three-box-down.png')}}" alt="shape">
        </div>
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="about-three__left-item">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <img class="me-1" src="{{asset('assets/front/images/icon/section-title.png')}}" alt="icon">
                                ABOUT Gratech
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"> Grow Your Social Accounts</h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Do you claim you are the best? Do you have the best quality product or service that is more affordable than other competitors in the Dubai & Abu Dhabi region? </p>
                        </div>
                        <div class="about-three__info bor-bottom pb-30">
                            <div class="row g-4 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="col-md-6">
                                    <div class="about__right-item">
                                        <div class="icon">
                                            <img src="{{asset('assets/front/images/icon/about-three-icon1.png')}}" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h4 class="mb-1">Business Growth</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about__right-item">
                                        <div class="icon">
                                            <img src="{{asset('assets/front/images/icon/about-three-icon2.png')}}" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h4 class="mb-1">Technology Consultancy</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="faq__image about-three__image image wow fadeInRight" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="about-three-dot">
                            <img class="sway__animationX" src="{{asset('assets/front/images/shape/about-three-dot.png')}}" alt="shape">
                        </div>
                        <div class="about-three-count p-4 d-flex align-items-center gap-3">
                            <img class="icon" src="{{asset('assets/front/images/icon/about-three-icon3.png')}}" alt="icon">
                            <div class="con">
                                <h3><span class="count">6,561</span>+</h3>
                                <span class="secondary-color sm-font">Happy Clients</span>
                            </div>
                        </div>
                        <div class="faq__line sway__animation">
                            <img src="{{asset('assets/front/images/shape/faq-line.png')}}" alt="image">
                        </div>
                        <img src="{{asset('assets/front/images/about/about-three-image.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About area end here -->

    <!-- Counter area start here -->
    <section class="counter-area">
        <div class="container">
            <div class="counter__wrp gradient-bg">
                <div class="counter__shape wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <img src="{{asset('assets/front/images/shape/counnter-bg-shape.png')}}" alt="shape">
                </div>
                <div class="counter__item wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                    <img src="{{('assets/front/images/icon/counter-icon1.png')}}" alt="icon">
                    <div class="content">
                        <h3><span class="count">6,561</span>+</h3>
                        <p class="text-white">Satisfied Clients</p>
                    </div>
                </div>
                <div class="counter__item wow bounceInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <img src="{{('assets/front/images/icon/counter-icon2.png')}}" alt="icon">
                    <div class="content">
                        <h3><span class="count">600</span>+</h3>
                        <p class="text-white">Finished Projects</p>
                    </div>
                </div>
                <div class="counter__item wow bounceInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                    <img src="{{('assets/front/images/icon/counter-icon3.png')}}" alt="icon">
                    <div class="content">
                        <h3><span class="count">250</span>+</h3>
                        <p class="text-white">Skilled Experts</p>
                    </div>
                </div>
                <div class="counter__item wow bounceInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
                    <img src="{{('assets/front/images/icon/counter-icon4.png')}}" alt="icon">
                    <div class="content">
                        <h3><span class="count">590</span>+</h3>
                        <p class="text-white">Media Posts</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter area end here -->

    <!-- Team area start here -->
    <section class="team-area pt-120 pb-120">
        <div class="container">
            <div class="section-header text-center mb-60">
                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.75" y="0.747803" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                            stroke-width="1.5" />
                        <mask id="path-2-inside-1_687_602" fill="white">
                            <path
                                d="M3 5.9978C3 3.78866 4.79086 1.9978 7 1.9978H13C15.2091 1.9978 17 3.78866 17 5.9978C17 8.20694 15.2091 9.9978 13 9.9978H7C4.79086 9.9978 3 8.20694 3 5.9978Z" />
                        </mask>
                        <path
                            d="M3 5.9978C3 2.96024 5.46243 0.497803 8.5 0.497803H11.5C14.5376 0.497803 17 2.96024 17 5.9978C17 4.61709 15.2091 3.4978 13 3.4978H7C4.79086 3.4978 3 4.61709 3 5.9978ZM17 5.9978C17 9.03537 14.5376 11.4978 11.5 11.4978H8.5C5.46243 11.4978 3 9.03537 3 5.9978C3 7.37851 4.79086 8.4978 7 8.4978H13C15.2091 8.4978 17 7.37851 17 5.9978ZM3 9.9978V1.9978V9.9978ZM17 1.9978V9.9978V1.9978Z"
                            fill="#3C72FC" mask="url(#path-2-inside-1_687_602)" />
                    </svg>
                    OUR team
                </h5>
                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Team</h2>
                <p class="text-black">You get access to a whole team of digital media specialists for the price of one employee.</p>
            </div>
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/shakeel.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">MR. SHAKEEL AHMAD</a></h4>
                            <span class="text-white">HR MANAGER</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/nouman.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">MR. NOUMAN</a></h4>
                            <span class="text-white">SR. Developer (Team Lead)</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/ehsaan.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">EHSAN ELLAHI</a></h4>
                            <span class="text-white">Developer</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/ummar.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">MR. UMAR</a></h4>
                            <span class="text-white">Digital Marketing (Team Lead)</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/amina.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">MS. AMINA MALIK</a></h4>
                            <span class="text-white">Graphic Designer</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/ishrat.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">MS. ISHRAT FATIMA</a></h4>
                            <span class="text-white">SEO SPECIALIST</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/minahil.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">MS. MINAHIL</a></h4>
                            <span class="text-white">Social Media Marketing SPECIALIST</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Team area end here -->



    <!-- Faq area start here -->
    <section class="faq-area sub-bg pt-120 pb-120">
        <div class="faq__shape">
            <img class="sway__animationX" src="{{asset('assets/front/images/shape/faq-shape.png')}}" alt="shape">
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5 pe-2 pe-lg-5">
                    <div class="faq__image image wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="faq__line sway__animation">
                            <img src="{{asset('assets/front/images/shape/faq-line.png')}}" alt="image">
                        </div>
                        <img src="{{asset('assets/front/images/faq/faq-image.png')}}" alt="image">
                    </div>
                </div>
                <div class="col-lg-7 mt-60">
                    <div class="section-header mb-40">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
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
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Most Frequently Ask
                            Question?</h2>
                    </div>
                    <div class="faq__item">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        What makes you the best digital marketing agency for small businesses?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>We focus on cost-effective solutions personalized campaigns and growth-driven results that suit startups as well as established brands.
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
                                        Do I still need SEO if I run ads?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Yes Ads stop showing when you stop paying, but SEO builds lasting visibility and trust. Both work even better together.
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
                                        Can I request revisions if I am not satisfied with the design?
                                    </button>
                                </h2>
                                <div id="collapsethree" class="accordion-collapse collapse"
                                    aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Yes absolutely We offer revisions to make sure the final design perfectly matches your brand vision and requirements.
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
                                        How do you measure the success of Social Media Marketing campaigns?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>We track key metrics like reach impressions engagement rate click-through rate (CTR) lead generation, and return on ad spend (ROAS). These insights help us optimize your campaigns for maximum ROI.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq area end here -->

    <!-- Case area start here -->
    <section class="case-two-area secondary-bg pt-120">
        <div class="case-two__bg">
            <img src="{{asset('assets/front/images/bg/case-two-bg.png')}}" alt="image">
        </div>
        <div class="container">
            <div class="d-flex gap-4 flex-wrap align-items-center justify-content-between mb-60">
                <div class="section-header">
                    <h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.75" y="0.747803" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                stroke-width="1.5" />
                            <mask id="path-2-inside-1_1120_297" fill="white">
                                <path
                                    d="M3 5.9978C3 3.78866 4.79086 1.9978 7 1.9978H13C15.2091 1.9978 17 3.78866 17 5.9978C17 8.20694 15.2091 9.9978 13 9.9978H7C4.79086 9.9978 3 8.20694 3 5.9978Z" />
                            </mask>
                            <path
                                d="M3 5.9978C3 2.96024 5.46243 0.497803 8.5 0.497803H11.5C14.5376 0.497803 17 2.96024 17 5.9978C17 4.61709 15.2091 3.4978 13 3.4978H7C4.79086 3.4978 3 4.61709 3 5.9978ZM17 5.9978C17 9.03537 14.5376 11.4978 11.5 11.4978H8.5C5.46243 11.4978 3 9.03537 3 5.9978C3 7.37851 4.79086 8.4978 7 8.4978H13C15.2091 8.4978 17 7.37851 17 5.9978ZM3 9.9978V1.9978V9.9978ZM17 1.9978V9.9978V1.9978Z"
                                fill="#3C72FC" mask="url(#path-2-inside-1_1120_297)" />
                        </svg>
                        FROM OUR WORK
                    </h5>
                    <h2 class="text-white wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        Our Work</h2>
                </div>
                <div class="arry-btn  d-flex gap-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <button class="arry-prev case__arry-prev"><i class="fa-light fa-chevron-left"></i></button>
                    <button class="arry-next case__arry-next active"><i
                            class="fa-light fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <div class="case-two__container">
            <div class="swiper case-two__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="case-two__item">
                            <div class="image case-two__image">
                                <img src="{{asset('assets/front/images/case/web.jpg')}}" alt="image">
                            </div>
                            <div class="case-two__content">
                                <span>Build Your Idea</span>
                                <h4><a href="{{route('websolution')}}" class="text-white">Web Development</a></h4>
                            </div>
                            <a href="{{route('websolution')}}" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-two__item">
                            <div class="image case-two__image">
                                <img src="{{asset('assets/front/images/case/digital.jpg')}}" alt="image">
                            </div>
                            <div class="case-two__content">
                                <span>Busness Growth</span>
                                <h4><a href="{{route('marketingSolution')}}" class="text-white">Digital Marketing</a></h4>
                            </div>
                            <a href="{{route('marketingSolution')}}" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-two__item">
                            <div class="image case-two__image">
                                <img src="{{asset('assets/front/images/case/seo.jpg')}}" alt="image">
                            </div>
                            <div class="case-two__content">
                                <span>Ranking</span>
                                <h4><a href="{{route('seosolution')}}" class="text-white">SEO</a></h4>
                            </div>
                            <a href="{{route('seosolution')}}" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-two__item">
                            <div class="image case-two__image">
                                <img src="{{asset('assets/front/images/case/graphic.jpg')}}" alt="image">
                            </div>
                            <div class="case-two__content">
                                <span>Solution of Idea</span>
                                <h4><a href="{{route('graphicSolution')}}" class="text-white">Graphic Designing</a></h4>
                            </div>
                            <a href="{{route('graphicSolution')}}" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Case area end here -->

    <!-- Testimonial area start here -->
    <section class="testimonial-two-area pb-120">
        <div class="container">
            <div class="section-header text-center mb-40">
                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.75" y="0.75" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                            stroke-width="1.5" />
                        <mask id="path-2-inside-1_869_295" fill="white">
                            <path
                                d="M3 6C3 3.79086 4.79086 2 7 2H13C15.2091 2 17 3.79086 17 6C17 8.20914 15.2091 10 13 10H7C4.79086 10 3 8.20914 3 6Z" />
                        </mask>
                        <path
                            d="M3 6C3 2.96243 5.46243 0.5 8.5 0.5H11.5C14.5376 0.5 17 2.96243 17 6C17 4.61929 15.2091 3.5 13 3.5H7C4.79086 3.5 3 4.61929 3 6ZM17 6C17 9.03757 14.5376 11.5 11.5 11.5H8.5C5.46243 11.5 3 9.03757 3 6C3 7.38071 4.79086 8.5 7 8.5H13C15.2091 8.5 17 7.38071 17 6ZM3 10V2V10ZM17 2V10V2Z"
                            fill="#3C72FC" mask="url(#path-2-inside-1_869_295)" />
                    </svg>
                    About Us
                </h5>
                <h2 class="wow fadeInUp text-white" data-wow-delay="200ms" data-wow-duration="1500ms">What Customer Says About Us</h2>
            </div>
            <div class="swiper testimonial-two__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-two__item">
                            <div class="star mb-10">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star disable"></i>
                            </div>
                            <p class="mb-30">“ Consectetur adipiscing elit. Integer nunc viverra laoreet est the is
                                porta
                                pretium metus
                                aliquam eget maecenas porta
                                is nunc nul viverra Aenean pulvinar maximus leo ”</p>
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{asset('assets/front/images/testimonial/testimonial-two-image1.png')}}" alt="image">
                                <div class="con">
                                    <h4>Alex Rony</h4>
                                    <span>Engineering</span>
                                </div>
                            </div>
                            <svg class="coma" width="50" height="37" viewBox="0 0 50 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z" fill="#3C72FC" />
                            </svg>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-two__item">
                            <div class="star mb-10">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star disable"></i>
                            </div>
                            <p class="mb-30">“ Consectetur adipiscing elit. Integer nunc viverra laoreet est the is
                                porta
                                pretium metus
                                aliquam eget maecenas porta
                                is nunc nul viverra Aenean pulvinar maximus leo ”</p>
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{asset('assets/front/images/testimonial/testimonial-two-image2.png')}}" alt="image">
                                <div class="con">
                                    <h4>Suborna Tarchera</h4>
                                    <span>UI/UX Designer</span>
                                </div>
                            </div>
                            <svg class="coma" width="50" height="37" viewBox="0 0 50 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z" fill="#3C72FC" />
                            </svg>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-two__item">
                            <div class="star mb-10">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star disable"></i>
                            </div>
                            <p class="mb-30">“ Consectetur adipiscing elit. Integer nunc viverra laoreet est the is
                                porta
                                pretium metus
                                aliquam eget maecenas porta
                                is nunc nul viverra Aenean pulvinar maximus leo ”</p>
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{asset('assets/front/images/testimonial/testimonial-two-image3.png')}}" alt="image">
                                <div class="con">
                                    <h4>Kawser Ahmed</h4>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                            <svg class="coma" width="50" height="37" viewBox="0 0 50 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z" fill="#3C72FC" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-40">
                <div class="dot testimonial__dot"></div>
            </div>
        </div>
    </section>
    <!-- Testimonial area end here -->

    <!-- Blog area start here -->
    <section class="blog-two-area pb-120">
        <div class="container">
            <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between mb-60">
                <div class="section-header">
                    <h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.75" y="0.748047" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                stroke-width="1.5" />
                            <mask id="path-2-inside-1_1120_300" fill="white">
                                <path
                                    d="M3 5.99805C3 3.78891 4.79086 1.99805 7 1.99805H13C15.2091 1.99805 17 3.78891 17 5.99805C17 8.20719 15.2091 9.99805 13 9.99805H7C4.79086 9.99805 3 8.20719 3 5.99805Z" />
                            </mask>
                            <path
                                d="M3 5.99805C3 2.96048 5.46243 0.498047 8.5 0.498047H11.5C14.5376 0.498047 17 2.96048 17 5.99805C17 4.61734 15.2091 3.49805 13 3.49805H7C4.79086 3.49805 3 4.61734 3 5.99805ZM17 5.99805C17 9.03561 14.5376 11.498 11.5 11.498H8.5C5.46243 11.498 3 9.03561 3 5.99805C3 7.37876 4.79086 8.49805 7 8.49805H13C15.2091 8.49805 17 7.37876 17 5.99805ZM3 9.99805V1.99805V9.99805ZM17 1.99805V9.99805V1.99805Z"
                                fill="#3C72FC" mask="url(#path-2-inside-1_1120_300)" />
                        </svg>
                        Blog & news
                    </h5>
                    <h2 class="wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">Don't Miss Our
                        Latest Thoughts</h2>
                </div>
                <a href="{{route('blog')}}" class="btn-one wow fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">View All
                    News <i class="fa-regular fa-arrow-right-long"></i></a>
            </div>
            <div class="row g-4">
                  @foreach($blogs as $blog)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="blog__item">
                    <a href="{{route('blogDetail')}}" class="blog__image d-block image">
                        <img src="{{ asset('assets/upload/prod/' . $blog->image) }}" alt="image">
                        <div class="blog-tag">
                            <h3 class="text-white">10</h3>
                            <span class="text-white">Dec</span>
                        </div>
                    </a>
                    <div class="blog__content">
                        <ul class="blog-info pb-20 bor-bottom mb-20">
                            <li>
                                <a href="#0">By Admin</a>
                            </li>
                            <li>
                                <a href="#0">0 Comments</a>
                            </li>
                        </ul>

                        <h3>
                            <a href="{{route('blogDetail')}}" class="primary-hover">
                                {{ $blog->title }}
                            </a>
                        </h3>

                        <p>{!! \Illuminate\Support\Str::limit(strip_tags($blog->description), 150, '...') !!}</p>


                        <a class="mt-25 read-more-btn" href="{{route('blogDetail')}}">
                            Read More <i class="fa-regular fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- Blog area end here -->

    <!-- Quote area start here -->
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
                            Why Choose Us? <br></h2>
                        <p class="text-white">Team of experts having more than 12 years of experience working in Abu Dhabi & Dubai. We are a one of a kind agency who provide complete marketing solutions to their clients under the one umbrella</p>
                    </div>
                    <a href="contact.html" class="btn-one wow fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="1500ms">Get Our Services <i class="fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Quote area end here -->
</main>
@endsection