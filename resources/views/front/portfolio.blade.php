@extends('layout.app')
@section('title','Our case studies speak of ideas & strategies to highly successful')
@section('description','See how MetaDigital delivers real results. Our work showcases expertise in SEO social media marketing Google Ads web development and branding across UAE and beyond.')
@section('og:description','See how MetaDigital delivers real results. Our work showcases expertise in SEO social media marketing Google Ads web development and branding across UAE and beyond.')
@section('og:title','Our case studies speak of ideas & strategies to highly successful')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/privacy-policy') -->
@section('canonical', url()->current())
@section('content')
 <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
            data-background="{{asset('assets/front/images/banner/service.webp')}}">

            <div class="container">
                <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Our Work</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Our Work</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Case area start here -->
       <section class="case-area pt-120 pb-120">
    <div class="container">
        <div class="row g-4">
            <!-- Web Development -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="case-two__item">
                    <div class="image case-two__image">
                        <img src="{{asset('assets/front/images/case/web.webp')}}" alt="Web Development">
                    </div>
                    <div class="case-two__content">
                        <span>Solution</span>
                        <h4><a href="{{route('WebDevelopment')}}" class="text-white">Web Development</a></h4>
                    </div>
                    <a href="{{route('WebDevelopment')}}" class="case-two__btn">
                        <i class="fa-regular fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="case-two__item">
                    <div class="image case-two__image">
                        <img src="{{asset('assets/front/images/case/digital.webp')}}" alt="Digital Marketing">
                    </div>
                    <div class="case-two__content">
                        <span>Marketing</span>
                        <h4><a href="{{route('Digitalmarketing')}}" class="text-white">Digital Marketing</a></h4>
                    </div>
                    <a href="{{route('Digitalmarketing')}}" class="case-two__btn">
                        <i class="fa-regular fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- App Development -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="case-two__item">
                    <div class="image case-two__image">
                        <img src="{{asset('assets/front/images/case/app.webp')}}" alt="App Development">
                    </div>
                    <div class="case-two__content">
                        <span>Solution</span>
                        <h4><a href="{{route('AppDevelopment')}}" class="text-white">App Development</a></h4>
                    </div>
                    <a href="{{route('AppDevelopment')}}" class="case-two__btn">
                        <i class="fa-regular fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Graphic Designing -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="case-two__item">
                    <div class="image case-two__image">
                        <img src="{{asset('assets/front/images/case/graphic.webp')}}" alt="Graphic Designing">
                    </div>
                    <div class="case-two__content">
                        <span>Creative</span>
                        <h4><a href="{{route('Graphicdesigning')}}" class="text-white">Graphic Designing</a></h4>
                    </div>
                    <a href="{{route('Graphicdesigning')}}" class="case-two__btn">
                        <i class="fa-regular fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- SEO -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="case-two__item">
                    <div class="image case-two__image">
                        <img src="{{asset('assets/front/images/case/seo.webp')}}" alt="SEO">
                    </div>
                    <div class="case-two__content">
                        <span>Marketing</span>
                        <h4><a href="{{route('Seo')}}" class="text-white">SEO</a></h4>
                    </div>
                    <a href="{{route('Seo')}}" class="case-two__btn">
                        <i class="fa-regular fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Social Media Marketing -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="case-two__item">
                    <div class="image case-two__image">
                        <img src="{{asset('assets/front/images/case/social.webp')}}" alt="Social Media Marketing">
                    </div>
                    <div class="case-two__content">
                        <span>Marketing</span>
                        <h4><a href="{{route('Socialmediamarketing')}}" class="text-white">Social Media Marketing</a></h4>
                    </div>
                    <a href="{{route('Socialmediamarketing')}}" class="case-two__btn">
                        <i class="fa-regular fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            
            <!-- Google Ads -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="case-two__item">
                    <div class="image case-two__image">
                        <img src="{{asset('assets/front/images/case/google.jpg')}}" alt="Google Ads">
                    </div>
                    <div class="case-two__content">
                        <span>Advertising</span>
                        <h4><a href="{{route('googleads')}}" class="text-white">Google Ads</a></h4>
                    </div>
                    <a href="{{route('googleads')}}" class="case-two__btn">
                        <i class="fa-regular fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Case area end here -->

@endsection