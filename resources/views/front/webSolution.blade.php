@extends('layout.app')
@section('title','Secure Shopping at the Best Place to Buy Window Curtains')
@section('description','We understand the importance of trust when shopping online. That is why we ensure safe transactions and strict privacy standards. Whether you are browsing luxury window curtains Dubai residents love or looking for the best place to buy window curtains')
@section('og:description','We understand the importance of trust when shopping online. That is why we ensure safe transactions and strict privacy standards. Whether you are browsing luxury window curtains Dubai residents love or looking for the best place to buy window curtains')
@section('og:title','Secure Shopping at the Best Place to Buy Window Curtains')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/privacy-policy') -->
@section('canonical', url()->current())
@section('content')
@section('styles')
<style>
    .client-card {
        background: #fff;
        border-radius: 12px;
        padding: 2rem 1.5rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
        height: 100%;
    }

    .client-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    /* Icon Circle */
    .icon-circle {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #fff;
        background: linear-gradient(90deg, #06b6d4, #3b82f6);
        margin: 0 auto;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    /* Quote Text */
    .client-quote {
        font-size: 0.95rem;
        line-height: 1.6;
        color: #555;
        font-style: italic;
        margin: 0.75rem 0 1rem;
    }

    /* Link Style */
    .client-link {
        font-weight: 600;
        color: var(--primary-color, #06b6d4);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .client-link:hover {
        color: #3b82f6;
    }
</style>
@endsection
<!-- Page banner area start here -->
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
        <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Web Application Development Solution</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="index-2.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Case Study
                Details</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Case area start here -->

<!-- Satisfied Clients Section start here -->
<section class="clients-area pt-120 pb-80 bg-light">
    <div class="container">
        <div class="section-header text-center mb-40">
            <h5 class="wow fadeInUp" data-wow-delay="00ms">Our Valued UAE Clients</h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms">
                Success Stories With <span class="text-gradient">MetaDigital Marketing</span>
            </h2>
            <p class="wow fadeInUp mt-3" data-wow-delay="400ms">
                We deliver responsive Laravel applications, dashboards, chatbots, and payment solutions — powering real UAE businesses every day.
            </p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="00ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-soap"></i></div>
                    <h4 class="case-single__title">LaundryService</h4>
                    <p class="client-quote">Laravel app with modern dashboard & payment integration — simplified laundry booking in UAE.</p>
                    <a href="https://www.laundryservice.ae/" target="_blank" class="client-link">View Project →</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="200ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-broom"></i></div>
                    <h4 class="case-single__title">CurtainCleaning</h4>
                    <p class="client-quote">SEO-optimized services platform with booking system — helping UAE homes & hotels book easily.</p>
                    <a href="https://curtaincleaning.ae/" target="_blank" class="client-link">View Project →</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-water"></i></div>
                    <h4 class="case-single__title">CurtainLaundry</h4>
                    <p class="client-quote">Responsive Laravel booking platform with admin dashboard — boosting customer convenience.</p>
                    <a href="https://curtainlaundry.ae/" target="_blank" class="client-link">View Project →</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="600ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-water-ladder"></i></div>
                    <h4 class="case-single__title">SeaHeroWaterSports</h4>
                    <p class="client-quote">Adventure booking website with online reservations & SEO content — attracting global tourists.</p>
                    <a href="https://seaherowatersports.com/" target="_blank" class="client-link">View Project →</a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="800ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-broom"></i></div>
                    <h4 class="case-single__title">CarpetWashing</h4>
                    <p class="client-quote">SEO-ready service site with Laravel admin panel — optimized for speed and higher rankings.</p>
                    <a href="https://carpetwashing.ae/" target="_blank" class="client-link">View Project →</a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="1000ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-store"></i></div>
                    <h4 class="case-single__title">AlKhyalCurtain</h4>
                    <p class="client-quote">E-commerce platform with secure checkout & engaging design — boosting online curtain sales.</p>
                    <a href="https://alkhyalcurtain.ae/" target="_blank" class="client-link">View Project →</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{route('contact')}}" class="btn-one">Let’s Build Your Project <i class="fa-regular fa-arrow-right-long"></i></a>
        </div>
    </div>
</section>

<!-- Satisfied Clients Section end here -->



<!-- Projects Showcase start here -->
<section class="projects-area pt-120 pb-120">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5>
                    <img class="me-1" src="{{asset('assets/front/images/icon/section-title.png')}}" alt="icon">
                WEB APPLICATION SOLUTIONS
            </h5>
            <h2>Custom Web Applications for UAE Businesses</h2>
            <p>At MetaDigital Marketing, we deliver <strong>fully dynamic, user-friendly, and scalable Laravel web applications</strong> with <strong>secure admin dashboards</strong> and <strong>integrated payment gateways</strong>. Our solutions empower UAE businesses with automation, efficiency, and growth-focused technology.</p>
        </div>

        <!-- Project 1 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/laundry.png')}}" alt="Web App Laravel">
                </div>
            </div>
            <div class="col-md-6 ">
                <h3 class="case-single__title ">Laundry Service Web Application</h3>
                <p>We successfully delivered a <strong>responsive web application</strong> for
                    <strong><a href="https://www.laundryservice.ae/">laundryservice.ae</a> in UAE</strong>. The client required a solution with a
                    <strong>modern dashboard</strong>, <strong>user-friendly navigation</strong>, and an
                    <strong>attractive website design</strong>. Our Laravel 12-based development ensured
                    high performance, scalability, and a seamless user experience tailored to their business needs.
                </p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Responsive Web Application in Laravel 12</li>
                    <li><i class="fa-solid fa-check"></i> Custom Dashboard with Easy Management</li>
                    <li><i class="fa-solid fa-check"></i> User-Friendly & Attractive Website Design</li>
                </ul>
            </div>

        </div>

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