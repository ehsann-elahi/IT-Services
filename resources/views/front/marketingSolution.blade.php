@extends('layout.app')
@section('title','Best Dubai Digital Marketing Companies')
@section('description','Connect with the best Digital Marketing companies. Compare expert profiles, client success stories & proven results to choose a verified provider that')
@section('og:description','Connect with the best Digital Marketing companies. Compare expert profiles, client success stories & proven results to choose a verified provider that')
@section('og:title','Best Dubai Digital Marketing Companies')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/privacy-policy') -->
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
<!-- Page banner area -->
<section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{asset('assets/front/images/banner/digital.webp')}}">
         
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Digital Marketing Solutions</h1>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Case Study
                Details</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<section class="clients-area pt-120 pb-60">
    <div class="container">
        <div class="section-header text-center mb-40">
            
            <h5 class="wow fadeInUp" data-wow-delay="00ms">Our Digital Marketing Clients</h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms">
                Driving Growth with <span class="text-gradient">MetaDigital Marketing</span>
            </h2>
            <p class="wow fadeInUp mt-3" data-wow-delay="400ms">
                From SEO to paid campaigns, we help UAE businesses boost visibility, generate leads, and grow revenue online.
            </p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="00ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-chart-line"></i></div>
                    <h4 class="case-single__title">LaundryService</h4>
                    <p class="client-quote">Ranked top in UAE searches with SEO + Google Ads — 3x more bookings in 6 months.</p>
                    <a href="https://www.laundryservice.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="200ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-bullhorn"></i></div>
                    <h4 class="case-single__title">CurtainCleaning</h4>
                    <p class="client-quote">Launched targeted ad campaigns and content strategy — doubling customer inquiries.</p>
                    <a href="https://curtaincleaning.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-chart-line"></i></div>

                    <h4 class="case-single__title">CurtainLaundry</h4>
                    <p class="client-quote">Boosted organic rankings with SEO & local marketing — increased visibility in Dubai & Abu Dhabi.</p>
                    <a href="https://curtainlaundry.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="600ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-person-swimming"></i></div>
                    <h4 class="case-single__title">SeaHeroWaterSports</h4>
                    <p class="client-quote">Social media + influencer campaigns boosted tourist bookings by 65% in one season.</p>
                    <a href="https://seaherowatersports.com/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="800ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-trophy"></i></div>
                    <h4 class="case-single__title">CarpetWashing</h4>
                    <p class="client-quote">Optimized for SEO + Google Maps — site now ranks top 3 for “Carpet Cleaning UAE.”</p>
                    <a href="https://carpetwashing.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="1000ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-store"></i></div>
                    <h4 class="case-single__title">AlKhyalCurtain</h4>
                    <p class="client-quote">E-commerce growth through SEO & Facebook Ads — online sales increased by 120%.</p>
                    <a href="https://alkhyalcurtain.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{route('contact')}}" class="btn-one">Grow With Us <i class="fa-regular fa-arrow-right-long"></i></a>
        </div>
    </div>
</section>


<!-- Process area start here -->
<section class="process-area pt-40 pb-50">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img class="me-1" src="{{asset('/assets/front/images/icon/section-title.webp')}}" alt="icon">
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
                        <img src="{{asset('/assets/front/images/process/process-arry.webp')}}" alt="arry-icon">
                    </div>
                    <div class="process__image">
                        <img src="{{asset('/assets/front/images/process/process-image1.webp')}}" alt="image">
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
                        <img src="{{asset('/assets/front/images/process/process-arry.webp')}}" alt="arry-icon">
                    </div>
                    <div class="process__image">
                        <img src="{{asset('/assets/front/images/process/process-image2.webp')}}" alt="image">
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
                        <img src="{{asset('/assets/front/images/process/process-image3.webp')}}" alt="image">
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
<section class="projects-area pt-40 pb-50">
    <div class="container">

    <div class="section-header text-center mb-60">
    <h5>
        <img class="me-1" src="{{asset('/assets/front/images/icon/section-title.webp')}}" alt="icon">
        DIGITAL MARKETING SOLUTIONS
    </h5>
    <h2>Result-Driven Digital Marketing in UAE</h2>
    <p>At MetaDigital Marketing, we provide <strong>360° digital marketing solutions</strong> including <strong>SEO, Google Ads, Social Media Marketing, and Content Strategies</strong>. Our goal is to <strong>increase visibility, drive qualified traffic, and maximize ROI</strong> for businesses across the UAE.</p>
</div>


        <!-- Project 2 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/seadigital.webp')}}" alt="CRM Development">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Digital Marketing Solutions for Sea Hero Water Sports</h3>
                <p>We delivered a complete <strong>digital marketing strategy</strong> for <strong><a href="https://seaherowatersports.com/">seaherowatersports.com</a></strong>, helping them establish
                    a powerful online presence in the UAE tourism and adventure industry. Through a combination of
                    <strong>SEO, social media marketing, content creation, and paid advertising</strong>, we ensured maximum visibility,
                    increased bookings, and stronger customer engagement.
                    Our tailored approach helped the client achieve <strong>consistent growth in leads and sales</strong>, and they are
                    highly satisfied with the results of our campaign.
                </p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Comprehensive SEO Strategy to Rank Higher in UAE Search Results</li>
                    <li><i class="fa-solid fa-check"></i> Engaging Social Media Campaigns to Attract Tourists & Adventure Seekers</li>
                    <li><i class="fa-solid fa-check"></i> Paid Advertising (Google Ads & Meta Ads) for Maximum ROI</li>
                    <li><i class="fa-solid fa-check"></i> Strong Lead Generation & Conversion Optimization for More Bookings</li>
                </ul>
            </div>

        </div>

        <!-- Project 3 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/ecomdigital.webp')}}" alt="Mobile App">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Digital Marketing Solutions for Al Khyal Curtains</h3>
                <p>We crafted and executed a complete <strong>digital marketing strategy</strong> for <strong><a href="https://alkhyalcurtain.ae/">alkhyalcurtain.ae</a></strong>,
                    boosting their online visibility and driving consistent sales growth. Through a mix of <strong>SEO, targeted social media campaigns,
                        Google Ads, and conversion-focused content marketing</strong>, we helped transform their e-commerce platform into a
                    revenue-generating powerhouse. The client is extremely satisfied with the results, experiencing <strong>increased traffic, higher engagement,
                        and stronger sales performance</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Comprehensive SEO Campaign to Rank for High-Intent Keywords</li>
                    <li><i class="fa-solid fa-check"></i> Targeted Social Media Ads to Attract Home Décor Shoppers</li>
                    <li><i class="fa-solid fa-check"></i> Google Ads Campaigns with High ROI for Curtain & Blinds Sales</li>
                    <li><i class="fa-solid fa-check"></i> Conversion-Optimized Landing Pages & Content Strategy</li>
                    <li><i class="fa-solid fa-check"></i> Increased Online Sales, Customer Engagement & Brand Awareness</li>
                </ul>
            </div>


        </div>

        <!-- Project 4 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/curtaindigital.webp')}}" alt="Curtain Cleaning Digital Marketing">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Digital Marketing Solutions for Curtain Cleaning UAE</h3>
                <p>We implemented a tailored <strong>digital marketing strategy</strong> for <strong><a href="https://curtaincleaning.ae/">curtaincleaning.ae</a></strong>,
                    helping them build a strong online presence and attract more UAE customers seeking <strong>professional curtain cleaning services</strong>.
                    Our approach included <strong>SEO optimization, Google Ads campaigns, social media promotions, and content marketing</strong>, which
                    significantly boosted their visibility, leads, and bookings.
                    The client is highly satisfied with the results, enjoying <strong>increased traffic, stronger brand trust, and consistent lead generation</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Advanced SEO Strategy for High Local Search Rankings</li>
                    <li><i class="fa-solid fa-check"></i> Targeted Google Ads Driving Service Inquiries & Bookings</li>
                    <li><i class="fa-solid fa-check"></i> Social Media Marketing to Reach UAE Homeowners</li>
                    <li><i class="fa-solid fa-check"></i> Conversion-Focused Content for Service Promotions</li>
                    <li><i class="fa-solid fa-check"></i> Increased Customer Leads, Bookings & Overall Growth</li>
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
                <img src="{{asset('/assets/front/images/shape/quote-shape.webp')}}" alt="shape">
            </div>
            <div class="quote__shape bobble__animation">
                <img src="{{asset('/assets/front/images/shape/quote-shape2.webp')}}" alt="shape">
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