@extends('layout.app')
@section('content')

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
        <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Pricing</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="index-2.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Pricing</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

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

@endsection