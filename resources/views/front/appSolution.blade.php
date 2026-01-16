@extends('layout.app')
@section('title','We build apps designed around your goals and audience')
@section('description','We are a team of professionals, who are passionate to transform the business into digital. Website development can be your first step to showing your brand/skills/services on digital platforms in Dubai & Abu Dhabi.')
@section('og:description','We are a team of professionals, who are passionate to transform the business into digital. Website development can be your first step to showing your brand/skills/services on digital platforms in Dubai & Abu Dhabi.')
@section('og:title','We build apps designed around your goals and audience')
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
<section class="banner__inner-page bg-image pt-180 pb-100 bg-image"
    data-background="{{asset('assets/front/images/banner/app.webp')}}">
         
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">App Development Solution</h1>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Case Study
                Details</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->


<section class="clients-area pt-120 pb-120">
  <div class="container">
    <div class="section-header text-center mb-30">
      <h5 class="wow fadeInUp" data-wow-delay="00ms">Our App Development Clients</h5>
      <h2 class="wow fadeInUp" data-wow-delay="200ms">
        Smart Applications by <span class="text-gradient">MetaDigital Marketing</span>
      </h2>
      <p class="wow fadeInUp mt-3" data-wow-delay="400ms">
        From mobile apps to enterprise dashboards, we develop responsive, user-friendly, and secure applications that empower UAE businesses.  
        Here are two of our flagship apps live on the <strong>Google Play Store</strong> — along with many more solutions we’ve delivered.
      </p>
    </div>

    <div class="row g-4">
      <!-- Featured App 1 -->
      <div class="col-md-6">
        <div class="client-card text-center wow fadeInUp" data-wow-delay="00ms">
          <div class="icon-circle mb-3"><i class="fa-solid fa-mobile-screen-button"></i></div>
          <h4 class="case-single__title">Laundry Service App</h4>
          <p class="client-quote">Cross-platform laundry booking app with online payments, order tracking, and push notifications.</p>
          <a href="https://play.google.com/store/apps/details?id=com.metadigital.laundry_service" target="_blank" class="client-link">View on Play Store →</a>
        </div>
      </div>

      <!-- Featured App 2 -->
      <div class="col-md-6">
        <div class="client-card text-center wow fadeInUp" data-wow-delay="200ms">
          <div class="icon-circle mb-3"><i class="fa-solid fa-code"></i></div>
          <h4 class="case-single__title">Curtain Cleaning App</h4>
          <p class="client-quote">Custom booking app with CRM integration, secure payments, and real-time status updates.</p>
          <a href="https://play.google.com/store/apps/details?id=com.metadigital.curtain_cleaning" target="_blank" class="client-link">View on Play Store →</a>
        </div>
      </div>
    </div>

    <!-- More Clients -->
    <div class="row g-4 mt-4">
      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="client-card text-center wow fadeInUp" data-wow-delay="400ms">
          <div class="icon-circle mb-3"><i class="fa-solid fa-gears"></i></div>
          <h4 class="case-single__title">CurtainLaundry.ae</h4>
          <p class="client-quote">Progressive web app with admin dashboard — making bookings seamless across devices.</p>
          <a href="https://curtainlaundry.ae/" target="_blank" class="client-link">View Project →</a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-4">
        <div class="client-card text-center wow fadeInUp" data-wow-delay="600ms">
          <div class="icon-circle mb-3"><i class="fa-solid fa-water"></i></div>
          <h4 class="case-single__title">SeaHeroWaterSports</h4>
          <p class="client-quote">Adventure booking mobile app with instant reservations and chatbot support.</p>
          <a href="https://seaherowatersports.com/" target="_blank" class="client-link">View Project →</a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-4">
        <div class="client-card text-center wow fadeInUp" data-wow-delay="800ms">
          <div class="icon-circle mb-3"><i class="fa-solid fa-shield-halved"></i></div>
          <h4 class="case-single__title">CarpetWashing.ae</h4>
          <p class="client-quote">Secure Laravel mobile app with payment integration and role-based access control.</p>
          <a href="https://carpetwashing.ae/" target="_blank" class="client-link">View Project →</a>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="{{route('contact')}}" class="btn-one">Build Your App <i class="fa-regular fa-arrow-right-long"></i></a>
    </div>
  </div>
</section>


<!-- Process area start here -->
<section class="process-area pt-40 pb-50">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img class="me-1" src="{{asset('/assets/front/images/icon/section-title.webp')}}" alt="icon">
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
                        <img src="{{asset('/assets/front/images/process/process-arry.webp')}}" alt="arry-icon">
                    </div>
                    <div class="process__image">
                        <img src="{{asset('/assets/front/images/process/process-image1.webp')}}" alt="image">
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
                        <img src="{{asset('/assets/front/images/process/process-arry.webp')}}" alt="arry-icon">
                    </div>
                    <div class="process__image">
                        <img src="{{asset('/assets/front/images/process/process-image2.webp')}}" alt="image">
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
                        <img src="{{asset('/assets/front/images/process/process-image3.webp')}}" alt="image">
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

    <div class="section-header text-center mb-60">
    <h5>
        <img class="me-1" src="{{asset('/assets/front/images/icon/section-title.webp')}}" alt="icon">
        APP DEVELOPMENT SOLUTIONS
    </h5>
    <h2>Innovative Mobile Apps for UAE Businesses</h2>
    <p>At MetaDigital Marketing, we design and develop <strong>custom mobile applications</strong> that are <strong>intuitive, scalable, and user-friendly</strong>. Our iOS and Android solutions empower UAE businesses with <strong>seamless functionality, engaging designs, and secure payment integrations</strong>.</p>
</div>

        <!-- Project 1 -->
        <div class="row align-items-center flex-row-reverse mb-100">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{asset('/assets/front/images/case/app3.webp')}}" alt="Curtain Cleaning Digital Marketing">
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
                    <img src="{{asset('/assets/front/images/case/app2.webp')}}" alt="Mobile App">
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
                    <img src="{{asset('/assets/front/images/case/app1.webp')}}" alt="CRM Development">
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