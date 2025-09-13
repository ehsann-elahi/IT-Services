@extends('layout.app')
@section('title','We are extremely proud of our results-driven')
@section('description','We are extremely proud of our results-driven, client-concentrated work, and the wide range of businesses, non-profits, and government associations we have produced it for.')
@section('og:description','We are extremely proud of our results-driven, client-concentrated work, and the wide range of businesses, non-profits, and government associations we havve produced it for.')
@section('og:title','We are extremely proud of our results-driven')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/privacy-policy') -->
@section('canonical', url()->current())
@section('content')

<!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
            data-background="assets/images/banner/banner-inner-page.jpg">
            <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img src="assets/images/banner/inner-banner-shape2.png" alt="shape">
            </div>
            <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="assets/images/banner/inner-banner-shape1.png" alt="shape">
            </div>
            <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="sway__animationX" src="assets/images/banner/inner-banner-shape3.png" alt="shape">
            </div>
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Team Details</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Team
                        Details</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Team single area start here -->
        <section class="team-single pt-120 pb-120">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-single__image">
                            <img src="assets/images/team/team-image1.jpg" alt="image">
                            <div class="team-info">
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#0" class="active"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#0"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="team-single__content">
                            <div class="title pb-20 mb-20 bor-bottom">
                                <h3>Kawser Ahmed</h3>
                                <span class="primary-color mt-1">Web Designer</span>
                            </div>
                            <div class="team-single__info">
                                <h4 class="pb-2">About Me</h4>
                                <p class="mb-20">This good man possesses qualities that inspire us all. He is selfless,
                                    always putting
                                    the needs of others before his
                                    own. Whether it's helping a neighbor in distress, volunteering at local charities,
                                    or simply lending a listening ear to
                                    those who need it, he consistently demonstrates the true meaning of altruism.
                                </p>
                                <p>This good man is a source of unwavering support and
                                    encouragement to those around
                                    him. He is a pillar of strength in
                                    times of adversity and a wellspring of joy in times of celebration.
                                </p>
                                <div class="skills mt-40">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="experience-progress-wrapper">
                                                <div class="experience-progress pb-4">
                                                    <div
                                                        class="experience-title-wrapper d-flex align-items-center justify-content-between">
                                                        <h5 class="experience-title pb-2">IT Management</h5>
                                                        <span class="exp" style="left:90%">90%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow slideInLeft"
                                                            data-wow-duration=".8s" role="progressbar"
                                                            style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="experience-progress pb-4">
                                                    <div
                                                        class="experience-title-wrapper d-flex justify-content-between align-items-center">
                                                        <h5 class="experience-title pb-2">Network Security</h5>
                                                        <span style="left:85%">85%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow slideInLeft"
                                                            data-wow-duration=".9s" role="progressbar"
                                                            style="width: 85%;" aria-valuenow="95" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="experience-progress-wrapper">
                                                <div class="experience-progress pb-4">
                                                    <div
                                                        class="experience-title-wrapper d-flex align-items-center justify-content-between">
                                                        <h5 class="experience-title pb-2">Web Development</h5>
                                                        <span class="exp" style="left:95%">95%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow slideInLeft"
                                                            data-wow-duration=".8s" role="progressbar"
                                                            style="width: 95%;" aria-valuenow="95" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="experience-progress pb-4">
                                                    <div
                                                        class="experience-title-wrapper d-flex justify-content-between align-items-center">
                                                        <h5 class="experience-title pb-2">Platform Integration</h5>
                                                        <span style="left:98%">98%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow slideInLeft"
                                                            data-wow-duration=".9s" role="progressbar"
                                                            style="width: 98%;" aria-valuenow="98" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-single-history mt-60">
                <div class="container">
                    <div class="title pb-30 mb-30 bor-bottom">
                        <h3>Education Background</h3>
                    </div>
                    <h4><span class="primary-color text-capitalize mb-3">Bachelor's degree</span>, 2010</h4>
                    <p>Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat,
                        ornare
                        eget tristique
                        vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus
                        sem
                        id massa semper
                        ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet,
                        leo
                        auctor volutpat
                        ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>
                    <h4><span class="primary-color text-capitalize mb-3 mt-5">Master's degree in design</span>, 2015
                    </h4>
                    <p>Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat,
                        ornare
                        eget tristique
                        vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus
                        sem
                        id massa semper
                        ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet,
                        leo
                        auctor volutpat
                        ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>
                </div>
            </div>
        </section>
        <!-- Team single area end here -->

@endsection