@extends('layout.app')
@section('title','Free Laundry Management Software UAE – Meta Digital Marketing')
@section('description','Run your laundry or delivery business smarter with Meta Digital’s free laundry management software in UAE. 24/7 support – Chat on WhatsApp to start now.')
@section('og:description','Run your laundry or delivery business smarter with Meta Digital’s free laundry management software in UAE. 24/7 support – Chat on WhatsApp to start now.')
@section('og:title','Free Laundry Management Software UAE – Meta Digital Marketing')
@section('og:slug', '/digital-solutions/free-laundry-management-software-uae')
@section('canonical', rtrim(url()->current(), '/') . '/')
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
    data-background="{{asset('assets/front/images/banner/freeLaundryManagementSystem.webp')}}">

    <div class="container">
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i> Digital Solutions</span><span><i class="fa-regular fa-angles-right mx-2"></i> Laundry Management System</span>
        </div>
        <div class="laundry-software-main text-center my-5">
            <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Free Laundry Management System for UAE Businesses</h1>
        <p class="wow fadeInUp text-white" data-wow-delay="00ms" data-wow-duration="1500ms">Tired of juggling orders, drivers, and invoices?
Meta Digital Marketing offers a completely free Laundry Management System that helps UAE laundry owners and delivery businesses handle everything from pickup to payment—without limits, fees, or technical hassle.</p>
            <a href="https://lms.metadigitalmarketing.ae/" class="btn-one mt-5">Free Sign-up Now <i class="fa-regular fa-arrow-right-long"></i></a>
        </div>

    </div>
</section>
 <!-- SEO: Laundry management software, dry cleaning POS, pickup & delivery laundry system\ -->



<!-- About area start here -->
<section class="about-area about-three-area sub-bg pt-120">
    <div class="about__shape wow slideInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
        <img src="{{asset('/assets/front/images/shape/laundry-management-system-dashboard.webp')}}" alt="Laundry service categories and pricing setup for washing, ironing, and dry cleaning.">
    </div>
    <div class="about-three__box-up wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
        <img class="sway_Y__animationY" src="{{asset('/assets/front/images/shape/laundry-pos-billing-software-interface.webp')}}" alt="Vendor and supplier management system for tracking laundry supplies and expenses.">
    </div>
    <div class="about-three__box-down wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
        <img class="sway_Y__animation" src="{{asset('/assets/front/images/shape/laundry-pickup-delivery-tracking-system.webp')}}" alt="Laundry software sales report showing cash and credit transactions.">
    </div>
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5 order-2 order-lg-1">
                <div class="about-three__left-item">
                    <div class="section-header mb-40">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <img class="me-1" src="{{asset('/assets/front/images/icon/section-title.webp')}}" alt="icon">
                            ABOUT LMS
                        </h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">What is a Laundry Management System </h2>
                        <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">A laundry management system automates daily operations for laundries and pickup/delivery businesses. Meta Digital Marketing’s solution lets UAE owners manage orders, drivers, pricing, VAT, HR, and profits from one dashboard—100 % free with unlimited access, no subscriptions, and full reporting tools for B2B and B2C clients.</p>
                    </div>
                    <div class="about-three__info bor-bottom pb-30">
                        <div class="row g-4 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="{{asset('/assets/front/images/icon/about-three-icon1.png')}}" alt="Performance analytics and business insights for laundry and dry-cleaning businesses.">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">Professional Supports</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="{{asset('/assets/front/images/icon/about-three-icon2.png')}}" alt="Laundry CRM system displaying customer profiles, history, and preferences.">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">Cloud-Base Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="{{asset('/assets/front/images/icon/about-three-icon1.png')}}" alt="Automated laundry business process system managing orders, delivery, billing, and reporting.">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">VAT Analysis</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="{{asset('/assets/front/images/icon/about-three-icon2.png')}}" alt="Laundry POS system dashboard showing global business overview and performance metrics">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">Profit Tracking</h4>
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
                   
                    <div class="about-three-count p-4 d-flex align-items-center gap-3">
                        <img class="icon" src="{{asset('/assets/front/images/icon/about-three-icon3.png')}}" alt="Dry cleaning business management system with tools for billing, tracking, and customer data">
                        <div class="con">
                            <h3><span class="count">100</span>+</h3>
                            <span class="secondary-color sm-font">Happy Clients</span>
                        </div>
                    </div>
                    <div class="faq__line sway__animation">
                        <img src="{{asset('/assets/front/images/shape/faq-line.webp')}}" alt="image">
                    </div>
                    <img src="{{asset('/assets/front/images/about/All-in-One-laundry-POS.webp')}}" alt="Laundry business inventory management solution for detergent, chemicals, and supplies">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About area end here -->

<!-- Projects Showcase start here -->
<section class="projects-area  pt-120">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5>
                <img class="me-1" src="{{asset('/assets/front/images/icon/section-title.webp')}}" alt="Multi-branch laundry management software with centralized control panel">
                Smarter tools, faster workflows, and total control
            </h5>
            <h2>everything your laundry business needs in one place.</h2>
            <p>Our LMS isn’t just another dashboard — it’s your complete business command center. From managing prices to tracking expenses, scheduling drivers, and generating reports, it gives you everything you need to run smoothly and scale confidently.</p>
        </div>
        
<!-- Section: Vendor Registration Tutorial 
 Helps laundries manage suppliers, expenses, chemical purchases, and operational costs  -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/cD1JG4a0F0g?si=x-eMEiWdIMv-8Z5Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">How to Register a Vendor</h3>
                <p> Store vendor details, track expenses, and manage supply purchases to maintain better control over operational costs and inventory planning.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Store detailed supplier profiles in one system</li>
                    <li><i class="fa-solid fa-check"></i> Track purchases, expenses, and operational costs</li>
                    <li><i class="fa-solid fa-check"></i> Helps manage budgets and reduce overspending</li>
                    <li><i class="fa-solid fa-check"></i> Improves inventory planning and vendor negotiation</li>
                    <li><i class="fa-solid fa-check"></i> Essential for multi-branch or high-volume laundry businesses</li>
                </ul>
            </div>
        </div>
   <!-- Section: Add Categories & Services 
 Creates customizable service menus for washing, dry cleaning, ironing, and premium treatments  -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/99q3DAIVstU?si=iYfEmfODggypMl_6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">How to Add Categories & Services</h3>
                <p>Create custom laundry service categories and pricing with ease, helping laundries and dry cleaners manage offerings, rates, and service types more effectively.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Add unlimited services & price levels</li>
                    <li><i class="fa-solid fa-check"></i> Ideal for laundries offering washing, dry-cleaning, ironing, and premium services</li>
                    <li><i class="fa-solid fa-check"></i>Keeps service menus clean and organized</li>
                    <li><i class="fa-solid fa-check"></i> Enables dynamic pricing based on fabric or service type</li>
                    <li><i class="fa-solid fa-check"></i> Helps maintain consistent billing across all branches</li>
                </ul>
            </div>
        </div>
      
        
<!-- Section: Driver Management & Pickup Assignment 
 Supports global pickup and delivery laundries with driver assignment features  -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/PQjzBUBglOE?si=DBokWWZEfEJCLbWs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">How to Add Driver & Assign Pickup.</h3>
                <p>Easily add drivers and assign pickups to streamline delivery operations, reduce delays, and offer faster service to customers across your service areas.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Assign pickups to drivers in one click</li>
                    <li><i class="fa-solid fa-check"></i> Track driver activity & order movement</li>
                    <li><i class="fa-solid fa-check"></i> Improves delivery speed and customer experience</li>
                    <li><i class="fa-solid fa-check"></i> Eliminates scheduling confusion</li>
                    <li><i class="fa-solid fa-check"></i> Perfect for laundries offering pickup/delivery service</li>
                </ul>
            </div>
        </div>

        <!-- Section: Add Customer & Create New Order 
 SEO: Customer onboarding for laundry businesses, fast order creation, dry cleaning workflow  -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5FdC6nQq37w?si=3CGJBuEjZAncfpFl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">How to Add Customer & Create New Order</h3>
                <p> Quickly register customers and create new laundry orders with a fast, organized workflow designed for walk-ins, dry cleaners, and pickup & delivery laundry services worldwide.</h3>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Fast customer registration with minimal input.</li>
                    <li><i class="fa-solid fa-check"></i> Supports customer history & saved preferences.</li>
                    <li><i class="fa-solid fa-check"></i> Quick order creation boosts service efficiency.</li>
                    <li><i class="fa-solid fa-check"></i> Helps reduce waiting time at busy outlets.</li>
                    <li><i class="fa-solid fa-check"></i> Ideal for both small shops and high-volume laundries.</li>
                </ul>
            </div>
        </div>

        
      <!-- Section: Billing & Reporting Tutorial 
Explains invoice automation, payment tracking, and real-time laundry business reporting  -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/c6M6Kiy6W0g?si=FMTYoOV2P9BDSy49" title="MetaDigital Laundry Management Sytem for laundries" frameborder=0"  allowfullscreen></iframe>
            </div>
            <div class="col-md-6 ">
                <h3 class="case-single__title ">Complete Billing & Reporting System for Laundries</h3>
                <p>Manage your laundry finances with automated billing, accurate invoices, and real-time reporting—eliminating spreadsheets and manual work for smoother, faster business operations.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Simplifies billing with automated invoice creation</li>
                    <li><i class="fa-solid fa-check"></i> Real-time revenue & expense tracking</li>
                    <li><i class="fa-solid fa-check"></i> Reduces human error and manual record-keeping</li>
                    <li><i class="fa-solid fa-check"></i> Supports VAT, discounts & custom pricing</li>
                    <li><i class="fa-solid fa-check"></i> Provides accurate financial reports for better decision-making</li>
                </ul>
            </div>
        </div>
               
       <!-- Section: Sales Report (Cash & Credit) 
 SEO: Sales analytics for laundries, cash flow monitoring, revenue tracking  -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/URtPcwVmZsc?si=aW00xHT2GxID-ees" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Sales Report by Cash & Credit</h3>
                <p>View accurate sales reports for cash, credit, and online payments to monitor revenue trends and make informed business decisions.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Real-time sales overview</li>
                    <li><i class="fa-solid fa-check"></i> Helps identify best-performing services</li>
                    <li><i class="fa-solid fa-check"></i>Separates cash vs. credit revenue</li>
                    <li><i class="fa-solid fa-check"></i> Supports financial planning & audits</li>
                    <li><i class="fa-solid fa-check"></i> Essential for businesses with mixed payment modes</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Projects Showcase end here -->


    <!-- Service area start here -->
    <section class="service-two-area secondary-bg pt-120 pb-120">
        <div class="service-two__shape-left sway_Y__animationY">
            <img src="{{asset('/assets/front/images/shape/service-two-shape-left.webp')}}" alt="Laundry management system dashboard showing orders, billing, and business reports.">
        </div>
        <div class="service-two__shape-right sway_Y__animation">
            <img src="{{asset('/assets/front/images/shape/service-two-shape-right.png')}}" alt="Laundry POS billing software interface for generating fast and accurate invoices.">
        </div>
        <div class="container">
            <div class="d-flex gap-4 flex-wrap align-items-center justify-content-between mb-60">
                <div class="section-header text-center mb-40">
                <h5 class="wow fadeInUp" data-wow-delay="00ms">Solve Everyday Laundry Business Challenges</h5>
                <h2 class="text-white wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">Common Problems It Solves</h2>
                <p class="wow fadeInUp mt-3 text-light" data-wow-delay="400ms">
                    Most laundry and pickup-delivery businesses struggle with manual tracking, billing, and operations chaos. Our all-in-one platform automates these processes—so you save time, reduce errors, and grow your business effortlessly.
                </p>
            </div>

            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="client-card text-center wow fadeInUp" data-wow-delay="00ms">
                        <div class="icon-circle mb-3"><i class="fa-solid fa-soap"></i></div>
                        <h5 class="case-single__title_small">Reliable Pickup & Delivery Tracking</h5>
                        <p class="client-quote">Never lose an order again. Real-time tracking ensures every pickup and drop-off is recorded, keeping your customers updated and your operations flawless.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="client-card text-center wow fadeInUp" data-wow-delay="200ms">
                        <div class="icon-circle mb-3"><i class="fa-solid fa-broom"></i></div>
                        <h5 class="case-single__title_small">Instant & Accurate Automated Billing</h5>
                        <p class="client-quote">Automate billing in one click. Generate accurate invoices instantly with built-in B2B/B2C pricing, reducing human mistakes and financial leakage.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="client-card text-center wow fadeInUp" data-wow-delay="400ms">
                        <div class="icon-circle mb-3"><i class="fa-solid fa-water"></i></div>
                        <h5 class="case-single__title_small">Real-Time Staff & Profit Visibility</h5>
                        <p class="client-quote">See performance and profits live. Monitor employee productivity, calculate margins, and make data-driven business decisions anytime.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-4">
                    <div class="client-card text-center wow fadeInUp" data-wow-delay="600ms">
                        <div class="icon-circle mb-3"><i class="fa-solid fa-water-ladder"></i></div>
                        <h5 class="case-single__title_small">Hassle-Free VAT & Monthly Reporting</h5>
                        <p class="client-quote">Simplify UAE VAT compliance. The system automatically creates monthly and annual VAT reports—no accountant or extra tools required.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-4">
                    <div class="client-card text-center wow fadeInUp" data-wow-delay="800ms">
                        <div class="icon-circle mb-3"><i class="fa-solid fa-broom"></i></div>
                        <h5 class="case-single__title_small">Unlimited Customer Management System</h5>
                        <p class="client-quote">Build lasting customer relationships. Manage unlimited B2B and B2C clients, track orders, and store preferences for personalized service.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-4">
                    <div class="client-card text-center wow fadeInUp" data-wow-delay="1000ms">
                        <div class="icon-circle mb-3"><i class="fa-solid fa-store"></i></div>
                        <h5 class="case-single__title_small">Powerful Free Laundry Software Solution</h5>
                        <p class="client-quote">Stop overpaying for limited tools. Enjoy all premium laundry management features completely free—no subscriptions, no hidden fees, ever.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="https://lms.metadigitalmarketing.ae/" class="btn-one">Let’s have a Live Demo <i class="fa-regular fa-arrow-right-long"></i></a>
            </div>
            </div>
        </div>
    </section>
    <!-- Service area end here -->

<!-- Common questions and problems about laundry management system -->
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
        People Also Ask / FAQs
    </h5>
    <h2 class="wow fadeInUp text-center" data-wow-delay="200ms" data-wow-duration="1500ms">All About Free Laundry Management Software for UAE Businesses</h2>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms"
            data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    Is the Laundry Management System really free?</button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Yes – Meta Digital offers all features 100 % free, with no trial limits or hidden charges.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="200ms"
            data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    Can it handle both B2B and B2C customers?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Absolutely. You can set separate price lists, manage bulk orders, and track individual clients easily.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="400ms"
            data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingthree">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapsethree"
                    aria-expanded="false" aria-controls="collapsethree">
                    Does it include VAT and profit/loss reporting?
                </button>
            </h2>
            <div id="collapsethree" class="accordion-collapse collapse"
                aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Yes, VAT and financial reports are auto-generated monthly and annually for UAE compliance.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="600ms"
            data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                    aria-expanded="false" aria-controls="collapseFour">
                    Can pickup and delivery businesses outside laundry use this system?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse"
                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Yes, any service with pickup/delivery operations can use it—courier, cleaning, and rental services too.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="600ms"
            data-wow-duration="1500ms">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                    aria-expanded="false" aria-controls="collapseFive">
                    How do I get started?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse"
                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Just <a href="wa.me/+1971525412617">Chat on WhatsApp</a> and our team will set up your free dashboard in minutes.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@verbatim
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
                "@type": "Question",
                "name": "Is the Laundry Management System really free?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes – Meta Digital offers all features 100% free, with no trial limits or hidden charges."
                }
            },
            {
                "@type": "Question",
                "name": "Can it handle both B2B and B2C customers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolutely. You can set separate price lists, manage bulk orders, and track individual clients easily."
                }
            },
            {
                "@type": "Question",
                "name": "Does it include VAT and profit/loss reporting?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, VAT and financial reports are auto-generated monthly and annually for UAE compliance."
                }
            },
            {
                "@type": "Question",
                "name": "Can pickup and delivery businesses outside laundry use this system?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, any service with pickup or delivery operations can use it — courier, cleaning, and rental services too."
                }
            },
            {
                "@type": "Question",
                "name": "How do I get started?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Just Chat on WhatsApp and our team will set up your free dashboard in minutes."
                }
            }
        ]
    }
</script>
@endverbatim

<!-- FAQ area end here -->

<!-- Quote area start here -->
<section class="quote-area pt-20 pb-80">
    <div class="container">
        <div class="quote__wrp gradient-bg">
            <div class="counter__shape wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="{{asset('/assets/front/images/shape/quote-shape.webp')}}" alt="Real-time laundry pickup and delivery tracking system for drivers and customers.pe">
            </div>
            <div class="quote__shape bobble__animation">
                <img src="{{asset('/assets/front/images/shape/quote-shape2.webp')}}" alt="Order management screen for dry cleaning and laundry services with categorized items.">
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
                       Want to Get Pro level Services to <br> grow your business?</h2>
                </div>
                <a href="{{route('contact')}}" class="btn-one wow fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">Get Our Services <i class="fa-regular fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Quote area end here -->



@endsection