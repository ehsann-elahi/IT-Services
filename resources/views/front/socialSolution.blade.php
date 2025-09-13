@extends('layout.app')
@section('title','Social Media Marketing Solutions in Dubai & UAE')
@section('description','We build strong online communities with creative content, targeted campaigns, and powerful social media strategies. From increasing followers to driving sales, our social media marketing solutions deliver measurable results for businesses in Dubai & UAE.')
@section('og:description','We build strong online communities with creative content, targeted campaigns, and powerful social media strategies. From increasing followers to driving sales, our social media marketing solutions deliver measurable results for businesses in Dubai & UAE.')
@section('og:title','Social Media Marketing Solutions in Dubai & UAE')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/social-media-marketing') -->
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
        <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Social Media Marketing</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>SOCIAL MEDIA MARKETING</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<section class="clients-area pt-120 pb-120 bg-light">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5 class="wow fadeInUp" data-wow-delay="00ms">Our Social Media Marketing Clients</h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms">
                Engaging Audiences with <span class="text-gradient">MetaDigital Marketing</span>
            </h2>
            <p class="wow fadeInUp mt-3" data-wow-delay="400ms">
                We build creative campaigns across Facebook, Instagram, and TikTok to grow brands, drive engagement, and boost sales.
            </p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="00ms">
                    <div class="icon-circle mb-3"><i class="fa-brands fa-facebook-f"></i></div>
                    <h4 class="case-single__title">LaundryService</h4>
                    <p class="client-quote">Facebook ad campaigns tripled bookings with creative carousel ads and retargeting.</p>
                    <a href="https://www.laundryservice.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="200ms">
                    <div class="icon-circle mb-3"><i class="fa-brands fa-instagram"></i></div>
                    <h4 class="case-single__title">CurtainCleaning</h4>
                    <p class="client-quote">Instagram reels and stories boosted brand visibility and doubled engagement rate.</p>
                    <a href="https://curtaincleaning.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon-circle mb-3"><i class="fa-brands fa-tiktok"></i></div>
                    <h4 class="case-single__title">CurtainLaundry</h4>
                    <p class="client-quote">TikTok video campaigns went viral — generating 2x customer inquiries in weeks.</p>
                    <a href="https://curtainlaundry.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="600ms">
                    <div class="icon-circle mb-3"><i class="fa-brands fa-youtube"></i></div>
                    <h4 class="case-single__title">SeaHeroWaterSports</h4>
                    <p class="client-quote">YouTube ads & influencer collabs boosted tourist bookings by 65% in one season.</p>
                    <a href="https://seaherowatersports.com/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="800ms">
                    <div class="icon-circle mb-3"><i class="fa-brands fa-linkedin-in"></i></div>
                    <h4 class="case-single__title">CarpetWashing</h4>
                    <p class="client-quote">LinkedIn campaigns built B2B connections and increased commercial cleaning leads.</p>
                    <a href="https://carpetwashing.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="client-card text-center wow fadeInUp" data-wow-delay="1000ms">
                    <div class="icon-circle mb-3"><i class="fa-solid fa-trophy"></i></div>
                    <h4 class="case-single__title">AlKhyalCurtain</h4>
                    <p class="client-quote">Twitter ad strategy drove conversations & 90% more engagement during promotions.</p>
                    <a href="https://alkhyalcurtain.ae/" target="_blank" class="client-link">View Campaign →</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{route('contact')}}" class="btn-one">Boost Engagement <i class="fa-regular fa-arrow-right-long"></i></a>
        </div>
    </div>
</section>


<!-- Social Media Marketing Work Process start here -->
<section class="projects-area pt-40 pb-50">
    <div class="container">

        <div class="section-header text-center mb-60">
            <h5>
                <img class="me-1" src="{{asset('assets/front/images/icon/section-title.png')}}" alt="icon">
                SOCIAL MEDIA MARKETING
            </h5>
            <h2>Engaging Social Media Marketing Solutions</h2>
            <p>At MetaDigital Marketing, we craft <strong>creative content, targeted campaigns, and audience-focused strategies</strong> that grow brand awareness, build loyal communities, and drive <strong>real business results</strong> across popular social media platforms.</p>
        </div>

        <!-- Step 1 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/smm-research.png')}}" alt="SMM Research">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 1: Research & Strategy Development</h3>
                <p>We start by analyzing your <strong>brand, target audience, and competitors</strong> to design a <strong>custom social media strategy</strong>. This ensures your campaigns are highly engaging, impactful, and aligned with your goals.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Audience & competitor research</li>
                    <li><i class="fa-solid fa-check"></i> Tailored strategies for each platform</li>
                    <li><i class="fa-solid fa-check"></i> Clear KPIs & campaign objectives</li>
                    <li><i class="fa-solid fa-check"></i> Consistent brand voice & identity</li>
                </ul>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/smm-content.png')}}" alt="SMM Content">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 2: Content Creation & Campaign Launch</h3>
                <p>We craft <strong>eye-catching visuals, videos, and ad creatives</strong> that capture attention and drive engagement. Our campaigns are optimized for <strong>brand awareness, lead generation, and sales growth</strong>.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> High-quality graphics & videos</li>
                    <li><i class="fa-solid fa-check"></i> Creative ad campaigns for conversions</li>
                    <li><i class="fa-solid fa-check"></i> Platform-optimized content</li>
                    <li><i class="fa-solid fa-check"></i> Engaging storytelling & branding</li>
                </ul>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="row align-items-center mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/smm-management.png')}}" alt="Community Management">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 3: Community Management & Engagement</h3>
                <p>We actively <strong>manage your social profiles</strong>, respond to followers, and engage with your audience to build <strong>strong customer relationships</strong> and brand trust.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Daily monitoring & engagement</li>
                    <li><i class="fa-solid fa-check"></i> Prompt responses to comments & messages</li>
                    <li><i class="fa-solid fa-check"></i> Building loyal brand communities</li>
                    <li><i class="fa-solid fa-check"></i> Strategies for organic growth</li>
                </ul>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('assets/front/images/case/smm-results.png')}}" alt="SMM Results">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="case-single__title">Step 4: Analytics, Reporting & Growth</h3>
                <p>We track <strong>campaign performance, engagement, and conversions</strong> to ensure measurable results. With <strong>data-driven insights and transparent reports</strong>, we continuously optimize for long-term success.</p>
                <ul class="case-challenge mt-3">
                    <li><i class="fa-solid fa-check"></i> Monthly performance reports</li>
                    <li><i class="fa-solid fa-check"></i> Tracking engagement & conversions</li>
                    <li><i class="fa-solid fa-check"></i> Continuous campaign optimization</li>
                    <li><i class="fa-solid fa-check"></i> Proven client satisfaction</li>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- Social Media Marketing Work Process end here -->


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