@extends('layout.app')
@section('title','Meet Our Team Meta Digital Experts Behind Your Success')
@section('description','You get access to a whole team of digital media specialists for the price of one employee.')
@section('og:description','You get access to a whole team of digital media specialists for the price of one employee.')
@section('og:title','Meet Our Team Meta Digital Experts Behind Your Success')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/privacy-policy') -->
@section('canonical', url()->current())
@section('content')
<section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{asset('assets/front/images/banner/ourteam.png')}}">
         
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Our Team</h1>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <p class="text-white">Meet the Experts Behind Your Digital Growth. Behind every successful campaign is a talented team.</p>
            <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Our Team</span>
        </div>
    </div>
</section>
 <!-- Team area start here -->
    <section class="team-area pt-120 pb-120">
        <div class="container">
            <div class="section-header text-center mb-60">
                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.75" y="0.747803" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                            stroke-width="1.5" />
                        <mask id="path-2-inside-1_687_602" fill="white">
                            <path
                                d="M3 5.9978C3 3.78866 4.79086 1.9978 7 1.9978H13C15.2091 1.9978 17 3.78866 17 5.9978C17 8.20694 15.2091 9.9978 13 9.9978H7C4.79086 9.9978 3 8.20694 3 5.9978Z" />
                        </mask>
                        <path
                            d="M3 5.9978C3 2.96024 5.46243 0.497803 8.5 0.497803H11.5C14.5376 0.497803 17 2.96024 17 5.9978C17 4.61709 15.2091 3.4978 13 3.4978H7C4.79086 3.4978 3 4.61709 3 5.9978ZM17 5.9978C17 9.03537 14.5376 11.4978 11.5 11.4978H8.5C5.46243 11.4978 3 9.03537 3 5.9978C3 7.37851 4.79086 8.4978 7 8.4978H13C15.2091 8.4978 17 7.37851 17 5.9978ZM3 9.9978V1.9978V9.9978ZM17 1.9978V9.9978V1.9978Z"
                            fill="#3C72FC" mask="url(#path-2-inside-1_687_602)" />
                    </svg>
                    OUR team
                </h5>
                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Leadership Team</h2>
                <p class="text-black">You get access to a whole team of digital media specialists for the price of one employee.</p>
            </div>
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/shakeel.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">MR. SHAKEEL AHMAD</a></h4>
                            <span class="text-white">HR MANAGER</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/nouman.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">MR. NOUMAN</a></h4>
                            <span class="text-white">SR. Developer (Team Lead)</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
                 <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/ehsaan.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">EHSAN ELLAHI</a></h4>
                            <span class="text-white">Developer</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/ummar.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">MR. UMAR</a></h4>
                            <span class="text-white">Digital Marketing (Team Lead)</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/amina.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">MS. AMINA MALIK</a></h4>
                            <span class="text-white">Graphic Designer</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/ishrat.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">MS. ISHRAT FATIMA</a></h4>
                            <span class="text-white">SEO SPECIALIST</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="team__item">
                        <div class="image">
                            <img src="{{asset('assets/front/images/team/minahil.png')}}" alt="image">
                        </div>
                        <div class="team__content">
                            <h4><a class="text-white" href="team-details-2.html">MS. MINAHIL</a></h4>
                            <span class="text-white">Social Media Marketing SPECIALIST</span>
                        </div>
                        <div class="team__share">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team area end here -->

@endsection