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
    .portfolio-item {
    background: #fff;
    border-radius: 12px;
    padding: 55px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    display: flex;
    align-items: center;
    gap: 27px;
    transition: all 0.3s ease-in-out;
}

.portfolio-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.12);
}

.portfolio-img img {
    max-width: 320px;
    border-radius: 10px;
    display: block;
}

.portfolio-content h4 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #222;
}

.portfolio-content p {
    color: #555;
    margin-bottom: 20px;
    line-height: 1.6;
}

/* ✅ Responsive Fix */
@media (max-width: 991px) {
    .portfolio-item {
        flex-direction: column;
        text-align: center;
    }
    .portfolio-img img {
        max-width: 100%;
    }
}

.swiper-pagination {
    margin-top: 20px;
    position: relative;
}

.swiper-pagination-bullet {
    background: #007bff;
    opacity: 0.6;
}

.swiper-pagination-bullet-active {
    background: #0056b3;
    opacity: 1;
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
        <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Vision & Mission</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="index-2.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Vision & Mission</span>
        </div>
    </div>
</section>

<section class="vision-mission-area pt-100 pb-30">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5>
                <img class="me-1" src="{{asset('assets/front/images/icon/section-title.png')}}" alt="icon">
                ABOUT US
            </h5>
            <h2>Our Vision & Mission</h2>
            <p>At MetaDigital Marketing, we empower businesses in Dubai & UAE with technology-driven strategies and creative solutions that drive measurable growth.</p>
        </div>

        <div class="row g-4">
            <!-- Vision -->
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="pricing__item">
                    <div class="pricing-head">
                        <div>
                            <h4 class="text-white mb-10">Our Vision</h4>
                        </div>
                        <div class="pricing-icon" data-background="{{asset('assets/front/images/shape/pricing-icon-bg.png')}}">
                            <i class="fas fa-lightbulb text-white"></i>
                        </div>
                    </div>
                    <ul>
                        <li>Be the top IT & Digital Marketing partner in UAE</li>
                        <li>Empower businesses with innovation & growth</li>
                        <li>Deliver creative solutions with measurable results</li>
                        <li>Inspire brand visibility & long-term success</li>
                    </ul>
                </div>
            </div>

            <!-- Mission -->
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="pricing__item">
                    <div class="pricing-head">
                        <div>
                            <h4 class="text-white mb-10">Our Mission</h4>
                        </div>
                        <div class="pricing-icon" data-background="{{asset('assets/front/images/shape/pricing-icon-bg.png')}}">
                            <i class="fas fa-bullseye text-white"></i>
                        </div>
                    </div>
                    <ul>
                        <li>Deliver innovative & scalable digital solutions</li>
                        <li>Build ROI-focused strategies for clients</li>
                        <li>Provide affordable IT services in Dubai</li>
                        <li>Support businesses with web, app & marketing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-area pt-80 pb-40">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5>
                <img class="me-5" src="{{asset('assets/front/images/icon/section-title.png')}}" alt="icon">
                OUR PORTFOLIO
            </h5>
            <h2>Our Work Speaks for Us</h2>
            <p>We have delivered successful projects in digital marketing, web development, and app solutions across Dubai & UAE.</p>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper portfolio-slider">
            <div class="swiper-wrapper">

                <!-- Project 1 -->
                <div class="swiper-slide">
                    <div class="portfolio-item d-flex align-items-center">
                        <div class="portfolio-img">
                            <img src="{{asset('assets/front/images/projects/marketing.png')}}" alt="project">
                        </div>
                        <div class="portfolio-content">
                            <h4>Digital Marketing Campaign</h4>
                            <p>Boosted client visibility in Dubai with SEO, Google Ads & social media strategy, driving 300% more leads.</p>
                            <a href="#" class="btn-one">View Case Study <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="swiper-slide">
                    <div class="portfolio-item d-flex align-items-center">
                        <div class="portfolio-img">
                            <img src="{{asset('assets/front/images/projects/web.png')}}" alt="project">
                        </div>
                        <div class="portfolio-content">
                            <h4>Corporate Website Development</h4>
                            <p>Developed a responsive and SEO-friendly corporate website that increased client engagement by 250%.</p>
                            <a href="#" class="btn-one">View Case Study <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="swiper-slide">
                    <div class="portfolio-item d-flex align-items-center">
                        <div class="portfolio-img">
                            <img src="{{asset('assets/front/images/projects/app.png')}}" alt="project">
                        </div>
                        <div class="portfolio-content">
                            <h4>Mobile App Solution</h4>
                            <p>Created a user-friendly mobile app for a UAE-based startup, streamlining operations & boosting revenue.</p>
                            <a href="#" class="btn-one">View Case Study <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Slider Controls -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
            <!-- ✅ Dots Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

 <!-- Quote area start here -->
    <section class="quote-area pt-80 pb-80">
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
                        <h2 class="wow fadeInLeft text-white" data-wow-delay="200ms" data-wow-duration="1500ms">We
                            Take Care of
                            Your <br> Technology</h2>
                    </div>
                    <a href="contact.html" class="btn-one wow fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="1500ms">Get Our Services <i class="fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Quote area end here -->

<!-- Pricing area start here -->
<section class="pricing-area pt-120 pb-120">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5>
                <img class="me-1" src="{{asset('assets/front/images/icon/section-title.png')}}" alt="icon">
                PRICE PLANS
            </h5>
            <h2>Affordable IT & Marketing Solutions in Dubai</h2>
            <p>MetaDigital Marketing offers Digital Marketing, Web Development, and App Development and many more services in UAE with packages designed to suit every business need.</p>
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
                    <a href="contact.html" class="btn-one d-block text-center">Get Services <i class="fa-regular fa-arrow-right-long"></i></a>
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
                    <a href="contact.html" class="btn-one d-block text-center">Get Services <i class="fa-regular fa-arrow-right-long"></i></a>
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
                    <a href="contact.html" class="btn-one d-block text-center">Get Services <i class="fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Pricing area end here -->

@section('script')
<!-- Add Swiper.js -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".portfolio-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
</script>


@endsection
@endsection
