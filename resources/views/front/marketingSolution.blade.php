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
        <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Digital Marketing</h2>
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
                        Digital Marketing Solutions
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        Empowering Businesses with Proven Digital Marketing Strategies
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        We specialize in delivering <strong>data-driven digital marketing solutions</strong>
                        designed to help businesses grow online, attract qualified leads, and maximize ROI.
                        From <em>SEO optimization</em> and <em>social media marketing</em> to
                        <em>pay-per-click advertising</em> and <em>content creation</em>, our
                        expert team ensures your brand stands out in a competitive digital landscape.
                        Whether you're a startup or an established enterprise, we tailor our services
                        to your unique goals and industry needs.
                    </p>
                </div>

                <div class="about-two__right-item wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <ul>
                        <li><i class="fa-solid fa-check"></i> Search Engine Optimization (SEO)</li>
                        <li><i class="fa-solid fa-check"></i> Social Media Management & Growth</li>
                    </ul>
                    <ul>
                        <li><i class="fa-solid fa-check"></i> Content Marketing & Branding</li>
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
                Our Work Process
            </h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                How We Deliver Proven Marketing Results
            </h2>
            <p class="wow fadeInUp mt-3" data-wow-delay="300ms" data-wow-duration="1500ms">
                Our <strong>data-driven digital marketing process</strong> is designed to help businesses 
                increase visibility, attract qualified leads, and achieve measurable growth. 
                We combine <em>strategic planning, creative execution, and performance optimization</em> 
                to ensure every campaign delivers maximum ROI.
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
                        <h4 class="mt-25 mb-10">Research & Strategy</h4>
                        <p>
                            We start by <strong>analyzing your business, industry, and competitors</strong> 
                            to define clear marketing goals. This helps us create a customized strategy 
                            focused on <em>brand visibility, lead generation, and long-term growth</em>.
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
                        <h4 class="mt-25 mb-10">Execution & Optimization</h4>
                        <p>
                            From <strong>SEO and content creation</strong> to 
                            <strong>PPC campaigns and social media marketing</strong>, 
                            we launch strategies designed to attract and engage your audience. 
                            Every campaign is tracked and optimized in real-time for the best results.
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
                        <h4 class="mt-25 mb-10">Results & Growth</h4>
                        <p>
                            We deliver <strong>transparent reporting and measurable KPIs</strong> so you 
                            can see the impact of every campaign. Our goal is to 
                            <em>increase conversions, boost ROI, and scale your business</em> 
                            with proven marketing strategies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Process area end here -->

<!-- Projects Showcase start here -->
<section class="projects-area pt-40 pb-120">
    <div class="container">

        <!-- Project 2 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/seohero.png')}}" alt="CRM Development">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Water Sports Adventure Website</h3>
                <p>We designed and developed a fully <strong>responsive and engaging website</strong> for <strong>seaherowatersports.com</strong>,
                    delivering an exceptional online presence for UAE clients looking for <strong>premium water sports and adventure experiences</strong>.
                    Built with <strong>Laravel 12</strong>, the platform includes a <strong>dynamic admin dashboard</strong> for easy management of
                    services, bookings, and customer inquiries. The client is highly satisfied, with the website helping attract more tourists and
                    adventure seekers through <strong>SEO-optimized content, smooth navigation, and a mobile-friendly design</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Fully Responsive & Mobile-Friendly Adventure Website</li>
                    <li><i class="fa-solid fa-check"></i> SEO-Optimized Content to Attract Tourists & UAE Clients</li>
                    <li><i class="fa-solid fa-check"></i> Dynamic Admin Dashboard in Laravel 12</li>
                    <li><i class="fa-solid fa-check"></i> Easy Online Booking & Customer Management</li>
                    <li><i class="fa-solid fa-check"></i> Fast, Secure, and Reliable Performance for Maximum Client Satisfaction</li>
                </ul>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/alkhyal.png')}}" alt="Mobile App">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">E-Commerce Web Application for Curtains</h3>
                <p>We built a fully <strong>responsive and feature-rich e-commerce platform</strong> for <strong><a href="https://alkhyalcurtain.ae/">alkhyalcurtain.ae</a></strong>,
                    implementing the <strong>best strategies for online sales</strong> and providing a seamless shopping experience.
                    The solution includes a <strong>dynamic admin dashboard</strong> in <strong>Laravel 12</strong> for efficient
                    product management, inventory tracking, and order processing. The client is fully satisfied with the results,
                    achieving higher engagement and sales.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Fully Responsive & Mobile-Friendly E-Commerce Design</li>
                    <li><i class="fa-solid fa-check"></i> SEO-Optimized Product Pages & Content</li>
                    <li><i class="fa-solid fa-check"></i> Dynamic Admin Dashboard in Laravel 12</li>
                    <li><i class="fa-solid fa-check"></i> Smooth Checkout & Secure Payment Integration</li>
                    <li><i class="fa-solid fa-check"></i> Enhanced Customer Engagement & Satisfaction</li>
                </ul>
            </div>

        </div>

        <!-- Project 4 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/curtainclean.png')}}" alt="CRM Development">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Professional Curtain Cleaning Services Website</h3>
                <p>We developed a fully <strong>responsive and user-friendly services website</strong> for <strong><a href="https://curtaincleaning.ae/">curtaincleaning.ae</a></strong>,
                    showcasing a seamless experience for UAE clients seeking <strong>professional curtain cleaning</strong>.
                    The platform features a <strong>dynamic admin dashboard</strong> built in <strong>Laravel 12</strong> for
                    effortless management of services, bookings, and customer inquiries. Our client is fully satisfied, and the
                    project highlights <strong>efficient service delivery, reliability, and SEO-optimized content</strong> that attracts new customers.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Fully Responsive & Mobile-Friendly Design</li>
                    <li><i class="fa-solid fa-check"></i> SEO-Optimized Content to Rank Higher in UAE Searches</li>
                    <li><i class="fa-solid fa-check"></i> Dynamic Admin Dashboard in Laravel 12</li>
                    <li><i class="fa-solid fa-check"></i> Easy Service Booking & Customer Management</li>
                    <li><i class="fa-solid fa-check"></i> Fast, Secure, and Reliable Performance for Maximum Client Satisfaction</li>
                </ul>
            </div>

        </div>

        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/curtainlaundry.png')}}" alt="Mobile App">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Curtain Laundry & Cleaning Services Website</h3>
                <p>We developed a fully <strong>responsive and user-friendly website</strong> for <strong>curtainlaundry.ae</strong>,
                    designed to showcase <strong>professional curtain laundry and cleaning services</strong> across the UAE.
                    The platform, built with <strong>Laravel 12</strong>, includes a <strong>dynamic admin dashboard</strong>
                    for smooth management of services, bookings, and customer inquiries. Our client is fully satisfied,
                    as the website delivers <strong>SEO-optimized content, seamless navigation, and mobile-friendly design</strong>
                    that attracts more customers and increases online visibility.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Fully Responsive & Mobile-Friendly Design</li>
                    <li><i class="fa-solid fa-check"></i> SEO-Optimized Content to Rank Higher in UAE Searches</li>
                    <li><i class="fa-solid fa-check"></i> Dynamic Admin Dashboard in Laravel 12</li>
                    <li><i class="fa-solid fa-check"></i> Easy Service Booking & Customer Management</li>
                    <li><i class="fa-solid fa-check"></i> Fast, Secure, and Reliable Performance for Maximum Client Satisfaction</li>
                </ul>
            </div>
        </div>

        <div class="row align-items-center flex-row-reverse mb-20">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/carpet.png')}}" alt="Ecommerce Development">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Carpet Cleaning Services Website</h3>
                <p>We developed a fully <strong>responsive and user-friendly services website</strong> for <strong><a href="https://carpetwashing.ae/">carpetwashing.ae</a></strong>,
                    optimized for <strong>search engines</strong> and designed to provide a seamless experience for UAE clients.
                    The platform includes a <strong>dynamic admin dashboard</strong> built in <strong>Laravel 12</strong> for easy
                    management of services, bookings, and client inquiries.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Fully Responsive & Mobile-Friendly Design</li>
                    <li><i class="fa-solid fa-check"></i> SEO-Optimized Content for Higher Rankings</li>
                    <li><i class="fa-solid fa-check"></i> Dynamic Admin Dashboard in Laravel 12</li>
                    <li><i class="fa-solid fa-check"></i> Easy Service Booking & Client Management</li>
                    <li><i class="fa-solid fa-check"></i> Fast, Secure, and Reliable Performance</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Projects Showcase end here -->

<!-- Marketing Solution Area -->


@endsection