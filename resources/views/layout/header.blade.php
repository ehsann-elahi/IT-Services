 <!-- Header area start here -->
 <header class="header-area header-two-area">
     <div class="container header__container">
         <div class="header__main">
             <a href="index-2.html" class="logo">
                 <img src="{{asset('assets/front/images/logo/metalogo.png')}}" alt="logo">
             </a>
             <div class="main-menu">
                 <nav>
                     <ul>
                         <li class="has-megamenu">
                             <a href="{{route('index')}}">Home</a>

                         </li>

                         <li>
                             <a href="{{route('service')}}">Services</a>
                             <ul class="sub-menu">
                                 <li>
                                     <a href="{{route('WebDevelopment')}}">Web Development</a>
                                 </li>
                                 <li>
                                     <a href="{{route('Digitalmarketing')}}">Digital Marketing</a>
                                 </li>
                                 <li>
                                     <a href="{{route('AppDevelopment')}}">App Development</a>
                                 </li>
                                 <li>
                                     <a href="{{route('Graphicdesigning')}}">Graphic Desigining</a>
                                 </li>
                                 <li>
                                     <a href="{{route('Seo')}}">SEO</a>
                                 </li>
                                 <li>
                                     <a href="{{route('Socialmediamarketing')}}">Social Media Marketing</a>
                                 </li>
                                 <li>
                                     <a href="{{route('googleads')}}">Google Ads</a>
                                 </li>

                             </ul>
                         </li>
                         <li>
                             <a href="{{route('missionvision')}}">Vision & Mission</a>

                         </li>
                         <li>
                             <a href="{{route('ourwork')}}">Our Work</a>
                             <ul class="sub-menu">
                                 <li>
                                     <a href="{{route('websolution')}}">Web Development Solutions</a>
                                 </li>
                                 <li>
                                     <a href="{{route('marketingSolution')}}">Digital Marketing Solutions</a>
                                 </li>
                                 <li>
                                     <a href="{{route('appSolution')}}">App Development Solutions</a>
                                 </li>
                                 <li>
                                     <a href="{{route('graphicSolution')}}">Graphic Desigining Solutions</a>
                                 </li>
                                 <li>
                                     <a href="{{route('seosolution')}}">SEO Solutions</a>
                                 </li>
                                 <li>
                                     <a href="{{route('Socialmediamarketing')}}">Social Media Marketing Solutions</a>
                                 </li>
                             </ul>
                         </li>
                         <li>
                             <a href="{{route('blog')}}">Blog</a>

                         </li>
                         <li><a href="{{route('contact.store')}}">Contact</a></li>

                     </ul>
                 </nav>
             </div>
             <div class="d-none d-xl-flex gap-4">
                 <a href="{{route('contact.store')}}" class="btn-one">Get Our Services <i
                         class="fa-regular fa-arrow-right-long"></i></a>
                 <div class="about-three__left-item d-flex flex-wrap gap-2 align-items-center">

                     <div class="info">
                         <span class="sm-font fw-600 text-white">Call Us Now</span>
                         <h5 class="text-white">+208-555-0112</h5>
                     </div>
                 </div>
             </div>
             <div class="bars d-block d-lg-none">
                 <i id="openButton" class="fa-solid fa-bars"></i>
             </div>
         </div>
     </div>
 </header>
 <!-- Header area end here -->