@extends('layout.app')
@section('title','Meta Digital’s Mission to Empower Businesses in UAE')
@section('description','At Meta Digital, our mission is to help businesses grow with innovative digital marketing, web development, and SEO strategies in UAE.')
@section('og:description','At Meta Digital, our mission is to help businesses grow with innovative digital marketing, web development, and SEO strategies in UAE.')
@section('og:title','Meta Digital’s Mission to Empower Businesses in UAE')
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
    data-background="{{asset('assets/front/images/banner/vision.png')}}">
         
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Vision & Mission</h1>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Vision & Mission</span>
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
                            <a href="{{route('marketingSolution')}}" class="btn-one">View Case Study <i class="fa-regular fa-arrow-right-long"></i></a>
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
                            <a href="{{route('websolution')}}" class="btn-one">View Case Study <i class="fa-regular fa-arrow-right-long"></i></a>
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
                            <a href="{{route('appSolution')}}" class="btn-one">View Case Study <i class="fa-regular fa-arrow-right-long"></i></a>
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
