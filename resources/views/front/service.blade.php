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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Digital Marketing Services</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>IT Services</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Service area start here -->
        <section class="service-inner-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/service-image1.jpg')}}" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="{{asset('assets/front/images/icon/service-two-icon1.png')}}" alt="icon">
                                </div>
                                <div class="shape"><img src="{{asset('assets/front/images/shape/service-two-item-shape.png')}}"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">Web Development</a></h4>
                                <p> We are a team of professionals, who are passionate to transform the business into digital. Website development can be your first step to showing your brand/skills/services on digital platforms in Dubai & Abu Dhabi. </p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/service-image2.jpg')}}" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="{{asset('assets/front/images/icon/service-two-icon2.png')}}" alt="icon">
                                </div>
                                <div class="shape"><img src="{{asset('assets/front/images/shape/service-two-item-shape.png')}}"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">Social Media Marketing</a></h4>
                                <p>Does your marketing strategy show you saturation in sales? or you are disappointed due to the failure of the marketing strategy & couldn't show up on the online platform? No worries! </p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/service-image3.jpg')}}" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="{{asset('assets/front/images/icon/service-two-icon3.png')}}" alt="icon">
                                </div>
                                <div class="shape"><img src="{{asset('assets/front/images/shape/service-two-item-shape.png')}}"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">Google my business</a></h4>
                                <p> Are you running a shop, store, or office in Dubai or Abu Dhabi where customers have to visit? Do you want to increase your local customer circle and look for cheaper marketing solutions? We are experts in registering your business on Google Maps</p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/service-image4.jpg')}}" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="{{asset('assets/front/images/icon/service-two-icon4.png')}}" alt="icon">
                                </div>
                                <div class="shape"><img src="{{asset('assets/front/images/shape/service-two-item-shape.png')}}"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">SEO Services</a></h4>
                                <p>Our SEO service is most appreciated service by our clients as we help a number of businesses to come out from loss to profit in the shortest time span.</p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/service-image5.jpg')}}" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="{{asset('assets/front/images/icon/service-two-icon5.png')}}" alt="icon">
                                </div>
                                <div class="shape"><img src="{{asset('assets/front/images/shape/service-two-item-shape.png')}}"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">Graphic Designer</a></h4>
                                <p>Does you marketing strategy show you saturation in sales? or you are disappointed due to the failure of the marketing strategy & couldn't show up on the online platform? No worries! </p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="{{asset('assets/front/images/service/service-image6.jpg')}}" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="{{asset('assets/front/images/icon/service-two-icon6.png')}}" alt="icon">
                                </div>
                                <div class="shape"><img src="{{asset('assets/front/images/shape/service-two-item-shape.png')}}"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">Google Ads</a></h4>
                                <p>Our Google ads service provides budget-friendly, cheaper, quick customer attention & transparent solutions to start-ups and businesses who are planning to launch a new product or service in Abu Dhabi & Dubai </p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->
@endsection