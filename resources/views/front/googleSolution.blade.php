@extends('layout.app')
@section('title','We specialize in creating customized ad campaigns that bring real results')
@section('description','Connect with the best Digital Marketing companies. Compare expert profiles, client success stories & proven results to choose a verified provider that')
@section('og:description','Connect with the best Digital Marketing companies. Compare expert profiles, client success stories & proven results to choose a verified provider that')
@section('og:title','We specialize in creating customized ad campaigns that bring real results')
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
<section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{asset('assets/front/images/banner/googleads.webp')}}">
         
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Google Ads Solutions</h1>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Google Ads SOLUTIONS</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<section class="clients-area pt-120 pb-100">
    <div class="container">
        <div class="section-header text-center mb-20">
            <h5 class="wow fadeInUp" data-wow-delay="00ms">Our Google Ads Clients</h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms">
                High-ROI Campaigns by <span class="text-gradient">MetaDigital Marketing</span>
            </h2>
            <p class="wow fadeInUp mt-3" data-wow-delay="400ms">
                We create targeted Google Ads campaigns that maximize conversions, reduce cost-per-click, and deliver measurable ROI for UAE businesses.
            </p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="00ms">
                    <div class="icon-circle mb-3"><i class="fa-brands fa-google"></i></div>
                    <h4 class="case-single__title">LaundryService</h4>
                    <p class="client-quote">Google Ads campaign reduced CPA by 40% and generated 3x more monthly bookings.</p>
                    <a href="https://www.laundryservice.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="200ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-bullseye"></i></div>
                    <h4 class="case-single__title">CurtainCleaning</h4>
                    <p class="client-quote">Smart bidding + location targeting doubled leads with 35% lower ad spend.</p>
                    <a href="https://curtaincleaning.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-chart-line"></i></div>
                    <h4 class="case-single__title">CurtainLaundry</h4>
                    <p class="client-quote">Optimized PPC campaigns increased ROI by 65% with better keyword targeting.</p>
                    <a href="https://curtainlaundry.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="600ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-person-swimming"></i></div>
                    <h4 class="case-single__title">SeaHeroWaterSports</h4>
                    <p class="client-quote">Seasonal Google Ads drove 70% more tourist bookings with high conversion ads.</p>
                    <a href="https://seaherowatersports.com/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="800ms">
                    <div class="icon-circle mb-3"><i class="fa-brands fa-google"></i></div>
                    <h4 class="case-single__title">CarpetWashing</h4>
                    <p class="client-quote">Targeted display + search ads ranked in top results, doubling monthly inquiries.</p>
                    <a href="https://carpetwashing.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="1000ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-coins"></i></div>
                    <h4 class="case-single__title">AlKhyalCurtain</h4>
                    <p class="client-quote">E-commerce Google Ads increased sales by 120% with smart shopping campaigns.</p>
                    <a href="https://alkhyalcurtain.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{route('contact')}}" class="btn-one">Run Ads With Us <i class="fa-regular fa-arrow-right-long"></i></a>
        </div>
    </div>
</section>

<!-- Vision & Mission area start here -->
<!-- Google Ads Success & Client Satisfaction start here -->


<!-- SEO Work Process start here -->
<!-- Google Ads Work Process start here -->
<section class="projects-area pt-40 pb-50">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5>
                <img class="me-1" src="{{asset('/assets/front/images/icon/section-title.webp')}}" alt="icon">
                GOOGLE ADS SOLUTIONS
            </h5>
            <h2>High-Converting Google Ads Campaigns</h2>
            <p>At MetaDigital Marketing, we design <strong>data-driven Google Ads campaigns</strong> that deliver <strong>targeted traffic, quality leads, and maximum ROI</strong>. From <strong>keyword research to smart bidding</strong>, we help UAE businesses achieve <strong>measurable growth</strong> with paid advertising.</p>
        </div>


        <!-- Step 1 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/g1.webp')}}" alt="Google Ads Research">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 1: Market Research & Campaign Strategy</h3>
                <p>We begin with <strong>detailed market research, audience targeting, and competitor analysis</strong>.
                    Our experts design a <strong>custom Google Ads strategy</strong> focused on maximizing ROI by reaching the right people at the right time
                    and turning clicks into qualified leads.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> In-depth keyword & competitor research</li>
                    <li><i class="fa-solid fa-check"></i> Audience targeting for UAE market</li>
                    <li><i class="fa-solid fa-check"></i> Tailored PPC strategy for measurable results</li>
                    <li><i class="fa-solid fa-check"></i> Smart budget planning & allocation</li>
                </ul>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/g2.webp')}}" alt="Campaign Setup">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 2: Campaign Setup & Ad Creation</h3>
                <p>We create <strong>high-converting ad copies, visuals, and extensions</strong> designed to attract your ideal customers.
                    Every campaign is <strong>structured and optimized</strong> to drive maximum clicks, conversions, and brand awareness
                    within your target budget.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Engaging ad copy & creative visuals</li>
                    <li><i class="fa-solid fa-check"></i> Precise ad group & campaign structure</li>
                    <li><i class="fa-solid fa-check"></i> Location, device & demographic targeting</li>
                    <li><i class="fa-solid fa-check"></i> Conversion-focused ad extensions</li>
                </ul>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/g3.webp')}}" alt="Campaign Optimization">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 3: Optimization & Smart Bidding</h3>
                <p>Our team continuously monitors your campaigns, making <strong>data-driven optimizations</strong> to improve CTR, quality score,
                    and conversion rates. With <strong>smart bidding strategies</strong>, we maximize performance while keeping costs under control.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Real-time campaign monitoring</li>
                    <li><i class="fa-solid fa-check"></i> Smart bidding for cost efficiency</li>
                    <li><i class="fa-solid fa-check"></i> A/B testing for ad performance</li>
                    <li><i class="fa-solid fa-check"></i> Continuous ROI-focused improvements</li>
                </ul>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/g4.webp')}}" alt="Google Ads Results">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 4: Performance Tracking & Results</h3>
                <p>We provide <strong>transparent reports</strong> on clicks, leads, and conversions so you know exactly how your investment is performing.
                    Our proven approach ensures <strong>consistent growth, better ROI, and 100% client satisfaction</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Detailed ROI & performance reports</li>
                    <li><i class="fa-solid fa-check"></i> Conversion tracking & analytics</li>
                    <li><i class="fa-solid fa-check"></i> Proven record of delivering results</li>
                    <li><i class="fa-solid fa-check"></i> 100% client satisfaction guaranteed</li>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- Google Ads Work Process end here -->

<!-- SEO Work Process end here -->


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