@extends('layout.app')
@section('title','Services Designed to Boost Visibility & Conversions')
@section('description','Discover MetaDigital’s proven results. Explore our portfolio of successful digital marketing campaigns, web design projects, and creative solutions that helped businesses grow online.')
@section('og:description','Discover MetaDigital’s proven results. Explore our portfolio of successful digital marketing campaigns, web design projects, and creative solutions that helped businesses grow online.')
@section('og:title','Services Designed to Boost Visibility & Conversions')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/privacy-policy') -->
@section('canonical', rtrim(url()->current(), '/') . '/')
@section('content')
<!-- Page banner area start here -->
<section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{asset('assets/front/images/banner/service.webp')}}">
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Digital Marketing Services in Dubai</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <p class="text-white">MetaDigital Marketing is a global digital marketing agency based in Dubai & Abu Dhabi that furnish out and out marketing solutions to the clients in UAE</p>
                <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>IT Services</span>
            </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Service area start here -->
<section class="service-inner-area pt-120 pb-120">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img class="me-1" src="{{asset('/assets/front/images/icon/section-title.webp')}}" alt="icon">
                OUR SERVICES
            </h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Comprehensive Digital Solutions for Your Business
            </h2>
            <p class="wow fadeInUp mt-3" data-wow-delay="300ms" data-wow-duration="1500ms">
                At <strong>MetaDigital Marketing</strong>, we provide a full range of professional services to help
                businesses grow and succeed in the digital world. From <strong>SEO</strong> and <strong>Social Media Marketing</strong>
                to <strong>Web & App Development</strong>, <strong>Branding</strong>, and <strong>Google Ads</strong>, our tailored solutions
                are designed to deliver measurable results and long-term success.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-two__item">
                    <div class="image">
                        <img src="{{asset('/assets/front/images/service/googlead.webp')}}" alt="AI RAG Custom Data Chatbot UAE">
                    </div>
                    <div class="service-two__content">
                        <div class="icon">
                            <img src="{{asset('/assets/front/images/icon/service-two-icon6.webp')}}" alt="AI chatbot icon">
                        </div>
                        <div class="shape">
                            <img src="{{asset('/assets/front/images/shape/service-two-item-shape.webp')}}" alt="decorative shape">
                        </div>
                        <h4>
                            <a href="{{route('index.chatbot')}}" class="primary-hover">AI RAG Custom Data Chatbot</a>
                        </h4>
                        <p>
                            Power your business with a <strong>Retrieval-Augmented Generation (RAG) Chatbot</strong>
                            trained on your own data. Meta Digital Marketing builds intelligent chatbots that can
                            <strong>read, learn, and respond</strong> from your company documents, FAQs, or databases —
                            delivering instant, accurate answers to customers and staff.
                            Boost efficiency, support, and engagement with AI that truly understands your business.
                        </p>
                        <a class="read-more-btn" href="{{route('index.chatbot')}}">
                            Read More <i class="fa-regular fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-two__item">
                    <div class="image">
                        <img src="{{asset('/assets/front/images/service/service-image1.webp')}}" alt="image">
                    </div>
                    <div class="service-two__content">
                        <div class="icon">
                            <img src="{{asset('/assets/front/images/icon/service-two-icon1.png')}}" alt="icon">
                        </div>
                        <div class="shape"><img src="{{asset('/assets/front/images/shape/service-two-item-shape.webp')}}"
                                alt="shape"></div>
                        <h4><a href="{{route('WebDevelopment')}}" class="primary-hover">Web Development</a></h4>
                        <p> We are a professional team who are passionate to transform the business into digital. Web development can be first step to showing your brand/services on digital platforms in Dubai & Abu Dhabi. </p>
                        <a class="read-more-btn" href="{{route('WebDevelopment')}}">Read More <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-two__item">
                    <div class="image">
                        <img src="{{asset('/assets/front/images/service/service-image6.webp')}}" alt="image">
                    </div>
                    <div class="service-two__content">
                        <div class="icon">
                            <img src="{{asset('/assets/front/images/icon/service-two-icon6.webp')}}" alt="icon">
                        </div>
                        <div class="shape"><img src="{{asset('/assets/front/images/shape/service-two-item-shape.webp')}}"
                                alt="shape"></div>
                        <h4><a href="{{route('Digitalmarketing')}}" class="primary-hover">Digital Marketing</a></h4>
                        <p>Does your marketing strategy showyou saturation in sales? or you are disappointed due to the failure of the marketing strategy & couldn't show up on the online platform? No worries!</p>
                        <a class="read-more-btn" href="{{route('Digitalmarketing')}}">Read More <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-two__item">
                    <div class="image">
                        <img src="{{asset('/assets/front/images/service/service-image2.webp')}}" alt="image">
                    </div>
                    <div class="service-two__content">
                        <div class="icon">
                            <img src="{{asset('/assets/front/images/icon/service-two-icon2.png')}}" alt="icon">
                        </div>
                        <div class="shape"><img src="{{asset('/assets/front/images/shape/service-two-item-shape.webp')}}"
                                alt="shape"></div>
                        <h4><a href="{{route('Socialmediamarketing')}}" class="primary-hover">Social Media Marketing</a></h4>
                        <p>Does your marketing strategy showyou saturation in sales? or you are disappointed due to the failure of the marketing strategy & couldn't show up on the online platform? No worries!</p>
                        <a class="read-more-btn" href="{{route('Socialmediamarketing')}}">Read More <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-two__item">
                    <div class="image">
                        <img src="{{asset('/assets/front/images/service/service-image3.webp')}}" alt="image">
                    </div>
                    <div class="service-two__content">
                        <div class="icon">
                            <img src="{{asset('/assets/front/images/icon/service-two-icon3.png')}}" alt="icon">
                        </div>
                        <div class="shape"><img src="{{asset('/assets/front/images/shape/service-two-item-shape.webp')}}"
                                alt="shape"></div>
                        <h4><a href="{{route('googleads')}}" class="primary-hover">Google Ads</a></h4>
                        <p>Our Google ads service provides budget friendly cheaper quick customer attention solutions to start-ups and businesses who are planning to launch a new product or service </p>
                        <a class="read-more-btn" href="{{route('googleads')}}">Read More <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-two__item">
                    <div class="image">
                        <img src="{{asset('/assets/front/images/service/service-image4.webp')}}" alt="image">
                    </div>
                    <div class="service-two__content">
                        <div class="icon">
                            <img src="{{asset('/assets/front/images/icon/service-two-icon4.webp')}}" alt="icon">
                        </div>
                        <div class="shape"><img src="{{asset('/assets/front/images/shape/service-two-item-shape.webp')}}"
                                alt="shape"></div>
                        <h4><a href="{{route('Seo')}}" class="primary-hover">Search Engine Optimization</a></h4>
                        <p>Our SEO service is most appreciated service by our clients as we help a number of businesses to come out from loss to profit in the shortest time span that is now become part of our family</p>
                        <a class="read-more-btn" href="{{route('Seo')}}">Read More <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-two__item">
                    <div class="image">
                        <img src="{{asset('/assets/front/images/service/service-image5.webp')}}" alt="image">
                    </div>
                    <div class="service-two__content">
                        <div class="icon">
                            <img src="{{asset('/assets/front/images/icon/service-two-icon5.webp')}}" alt="icon">
                        </div>
                        <div class="shape"><img src="{{asset('/assets/front/images/shape/service-two-item-shape.webp')}}"
                                alt="shape"></div>
                        <h4><a href="{{route('Graphicdesigning')}}" class="primary-hover">Graphic Designing</a></h4>
                        <p>Does you marketing strategy show you saturation in sales? or you are disappointed due to the failure of the marketing strategy & couldn't show up on the online platform? No worries! </p>
                        <a class="read-more-btn" href="{{route('Graphicdesigning')}}">Read More <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-two__item">
                    <div class="image">
                        <img src="{{asset('/assets/front/images/service/app1.webp')}}" alt="image">
                    </div>
                    <div class="service-two__content">
                        <div class="icon">
                            <img src="{{asset('/assets/front/images/icon/service-two-icon6.webp')}}" alt="icon">
                        </div>
                        <div class="shape"><img src="{{asset('/assets/front/images/shape/service-two-item-shape.webp')}}"
                                alt="shape"></div>
                        <h4><a href="{{route('AppDevelopment')}}" class="primary-hover">App Development</a></h4>
                        <p>At MetaDigital Marketing we design and develop mobile apps that do more than just look good they solve real problems. Our expert team creates user friendly iOS and Android applications</p>
                        <a class="read-more-btn" href="{{route('AppDevelopment')}}">Read More <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service area end here -->

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