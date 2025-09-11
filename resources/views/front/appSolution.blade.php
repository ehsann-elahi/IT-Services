@extends('layout.app')
@section('content')
<!-- Page banner area -->
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
        <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">App Development Solution</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Case Study
                Details</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- About area start here -->
<section class="about-two-area pt-120">
    <div class="about-two__shape">
        <img src="{{asset('assets/front/images/shape/about-two-shape.png')}}" alt="shape">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="about-two__left-item">
                    <div class="dots">
                        <img class="sway_Y__animation" src="{{asset('assets/front/images/shape/about-two-dot.png')}}" alt="shape">
                    </div>
                    <div class="shape-halper">
                        <img class="sway__animation" src="{{asset('assets/front/images/shape/about-circle-helper.png')}}"
                            alt="shape">
                    </div>
                    <div class="image big-image">
                        <img src="{{asset('assets/front/images/about/about-two-image1.jpg')}}" alt="image">
                    </div>
                    <div class="image sm-image">
                        <img src="{{asset('assets/front/images/about/about-two-image2.png')}}" alt="image">
                    </div>
                    <div class="circle-shape">
                        <img class="animation__rotate" src="{{asset('assets/front/images/shape/about-two-circle.png')}}"
                            alt="shape">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="section-header mb-20">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.75" y="0.75" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                stroke-width="1.5" />
                            <mask id="path-2-inside-1_668_146" fill="white">
                                <path
                                    d="M3 6C3 3.79086 4.79086 2 7 2H13C15.2091 2 17 3.79086 17 6C17 8.20914 15.2091 10 13 10H7C4.79086 10 3 8.20914 3 6Z" />
                            </mask>
                            <path
                                d="M3 6C3 2.96243 5.46243 0.5 8.5 0.5H11.5C14.5376 0.5 17 2.96243 17 6C17 4.61929 15.2091 3.5 13 3.5H7C4.79086 3.5 3 4.61929 3 6ZM17 6C17 9.03757 14.5376 11.5 11.5 11.5H8.5C5.46243 11.5 3 9.03757 3 6C3 7.38071 4.79086 8.5 7 8.5H13C15.2091 8.5 17 7.38071 17 6ZM3 10V2V10ZM17 2V10V2Z"
                                fill="#3C72FC" mask="url(#path-2-inside-1_668_146)" />
                        </svg>
                        App Development Solutions
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        Building Scalable & User-Friendly Mobile Applications
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        We specialize in creating <strong>custom mobile and web applications</strong> designed to deliver
                        seamless user experiences and drive business growth. Our team develops
                        <em>cross-platform apps</em>, <em>iOS & Android native applications</em>, and
                        <em>enterprise-grade software solutions</em> with a focus on performance, scalability,
                        and security. From startups to enterprises, we ensure your app idea turns into a
                        <strong>high-performing digital product</strong> that stands out in the competitive market.
                    </p>
                </div>

                <div class="about-two__right-item wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <ul>
                        <li><i class="fa-solid fa-check"></i> Custom iOS & Android App Development</li>
                        <li><i class="fa-solid fa-check"></i> Cross-Platform & Hybrid App Solutions</li>
                    </ul>
                    <ul>
                        <li><i class="fa-solid fa-check"></i> UI/UX Design for Engaging User Experience</li>
                        <li><i class="fa-solid fa-check"></i> Scalable & Secure Enterprise Applications</li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- About area end here -->

<!-- Process area start here -->
<section class="process-area pt-40 pb-50">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img class="me-1" src="{{asset('assets/front/images/icon/section-title.png')}}" alt="icon">
                Our App Development Process
            </h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Turning Your Ideas into Scalable & High-Performing Applications
            </h2>
            <p class="wow fadeInUp mt-3" data-wow-delay="300ms" data-wow-duration="1500ms">
                Our <strong>end-to-end app development process</strong> is designed to transform concepts into
                <em>powerful digital solutions</em>. From <strong>research and UI/UX design</strong> to
                <strong>development, testing, and launch</strong>, we build applications that are
                <em>scalable, secure, and user-friendly</em>. With our proven experience, we ensure
                every app drives engagement, enhances customer experience, and accelerates business growth.
            </p>
        </div>

        <div class="row g-4">
            <!-- Step 1 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="process__item mb-100">
                    <div class="process-arry bobble__animation">
                        <img src="{{asset('assets/front/images/process/process-arry.png')}}" alt="arry-icon">
                    </div>
                    <div class="process__image">
                        <img src="{{asset('assets/front/images/process/process-image1.png')}}" alt="image">
                        <span class="process-number">1</span>
                    </div>
                    <div class="process__content">
                        <h4 class="mt-25 mb-10">Discovery & Strategy</h4>
                        <p>
                            We begin by <strong>understanding your business goals, target audience, and features</strong>
                            needed for success. Our strategy focuses on creating <em>scalable, user-centric, and
                                innovative solutions</em> tailored to your industry.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="process__item mb-100">
                    <div class="process-arry bobble__animation">
                        <img src="{{asset('assets/front/images/process/process-arry.png')}}" alt="arry-icon">
                    </div>
                    <div class="process__image">
                        <img src="{{asset('assets/front/images/process/process-image2.png')}}" alt="image">
                        <span class="process-number">2</span>
                    </div>
                    <div class="process__content">
                        <h4 class="mt-25 mb-10">Design & Development</h4>
                        <p>
                            Our team designs <strong>intuitive UI/UX interfaces</strong> and develops
                            <strong>cross-platform, iOS, and Android applications</strong> using the latest frameworks.
                            We ensure <em>smooth functionality, robust security, and top performance</em>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="process__item">
                    <div class="process__image">
                        <img src="{{asset('assets/front/images/process/process-image3.png')}}" alt="image">
                        <span class="process-number">3</span>
                    </div>
                    <div class="process__content">
                        <h4 class="mt-25 mb-10">Testing, Launch & Growth</h4>
                        <p>
                            We conduct <strong>rigorous app testing</strong> to ensure flawless performance across devices.
                            After launch, we provide <em>ongoing support, updates, and optimization</em> to help your
                            application scale and achieve <strong>long-term business success</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Process area end here -->


<!-- Projects Showcase start here -->
<section class="projects-area pt-40 pb-50">
    <div class="container">

        <!-- Project 1 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/app3.png')}}" alt="Curtain Cleaning Digital Marketing">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">App Development Solutions</h3>
                <p>We provide end-to-end <strong>custom app development solutions</strong> designed to help businesses
                    turn their ideas into <strong>modern, user-friendly, and scalable applications</strong>.
                    Our expert team leverages the latest technologies and frameworks to build
                    <strong>cross-platform apps, native iOS & Android applications, and enterprise-grade solutions</strong>
                    that deliver seamless performance and exceptional user experiences.
                    With a focus on <em>innovation, security, and scalability</em>, we ensure every app helps
                    our clients achieve <strong>growth, engagement, and long-term success</strong>.
                </p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Custom iOS & Android App Development</li>
                    <li><i class="fa-solid fa-check"></i> Cross-Platform & Hybrid Mobile App Solutions</li>
                    <li><i class="fa-solid fa-check"></i> Intuitive UI/UX Design for Better User Engagement</li>
                    <li><i class="fa-solid fa-check"></i> Scalable, Secure, and High-Performance Applications</li>
                    <li><i class="fa-solid fa-check"></i> Continuous Support, Updates & Optimization</li>
                </ul>
            </div>

        </div>

        <!-- Project 2 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/app2.png')}}" alt="Mobile App">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Curtain Cleaning Mobile App Development in UAE</h3>
                <p>We successfully designed and developed the <strong><a href="https://play.google.com/store/apps/details?id=com.metadigital.curtain_cleaning" target="_blank">Curtain Cleaning App</a></strong>,
                    a modern and user-friendly solution tailored for UAE customers seeking <strong>professional curtain cleaning services</strong>.
                    Our app features <strong>easy booking, real-time service tracking, secure payments, and customer management tools</strong>, making the entire process
                    seamless and efficient. With a strong focus on <em>UI/UX design, performance, and scalability</em>, we ensured the app delivers a smooth experience
                    that enhances customer trust and loyalty.
                    The client is <strong>fully satisfied</strong>, achieving <strong>higher downloads, repeat customers, and increased brand visibility</strong> across the UAE.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Custom Mobile App Development for Curtain Cleaning Services</li>
                    <li><i class="fa-solid fa-check"></i> User-Friendly UI/UX with Seamless Navigation</li>
                    <li><i class="fa-solid fa-check"></i> Easy Online Booking & Real-Time Service Tracking</li>
                    <li><i class="fa-solid fa-check"></i> Secure Payment Integration & Customer Management</li>
                    <li><i class="fa-solid fa-check"></i> Increased Downloads, Engagement & Customer Retention</li>
                </ul>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/app1.png')}}" alt="CRM Development">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Laundry Service Mobile App Development in UAE</h3>
                <p>We developed the <strong><a href="https://play.google.com/store/apps/details?id=com.metadigital.laundry_service" target="_blank">Laundry Service App</a></strong>,
                    a modern and convenient solution for UAE customers looking for <strong>on-demand laundry and dry-cleaning services</strong>.
                    The app offers <strong>easy scheduling, doorstep pickup & delivery, secure payment integration, and real-time order tracking</strong>,
                    making the entire laundry process hassle-free. With an intuitive <em>UI/UX design</em> and <em>scalable backend architecture</em>,
                    the app ensures smooth performance and user satisfaction.
                    Our client is <strong>extremely satisfied</strong>, reporting <strong>higher customer engagement, increased downloads, and steady business growth</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Custom On-Demand Laundry App Development</li>
                    <li><i class="fa-solid fa-check"></i> User-Friendly UI/UX for Easy Navigation & Scheduling</li>
                    <li><i class="fa-solid fa-check"></i> Doorstep Pickup & Delivery with Real-Time Order Tracking</li>
                    <li><i class="fa-solid fa-check"></i> Secure Online Payment Integration</li>
                    <li><i class="fa-solid fa-check"></i> Increased Downloads, Customer Retention & Business Growth</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Projects Showcase end here -->

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