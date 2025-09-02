 <!-- Header area start here -->
    <header class="header-area header-two-area">
        <div class="container header__container">
            <div class="header__main">
                <a href="index-2.html" class="logo">
                    <img src="{{asset('assets/front/images/logo/logo.svg')}}" alt="logo">
                </a>
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li class="has-megamenu">
                                <a href="{{route('index')}}">Home</a>
                                
                            </li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li>
                                <a href="{{route('service')}}">Services</a>
                                 <ul class="sub-menu">
                                    <li>
                                        <a href="case.html">Web Development</a>
                                    </li>
                                    <li>
                                        <a href="case-2.html">Digital Marketing</a>
                                    </li>
                                    <li>
                                        <a href="case-details.html">App Development</a>
                                    </li>
                                    <li>
                                        <a href="team.html">Graphic Desigining</a>
                                    </li>
                                    <li>
                                        <a href="team-details.html">SEO</a>
                                    </li>
                                    <li>
                                        <a href="pricing.html">Social Media Marketing</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="case.html">Case Study 01</a>
                                    </li>
                                    <li>
                                        <a href="case-2.html">Case Study 02</a>
                                    </li>
                                    <li>
                                        <a href="case-details.html">Case Study Details</a>
                                    </li>
                                    <li>
                                        <a href="team.html">Our Team</a>
                                    </li>
                                    <li>
                                        <a href="team-details.html">Team Details</a>
                                    </li>
                                    <li>
                                        <a href="pricing.html">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="faq.html">FAQ's</a>
                                    </li>
                                    <li>
                                        <a href="error.html">404 Error</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Blog</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog.html">Blog Grid</a>
                                    </li>
                                    <li>
                                        <a href="blog-standard.html">Blog Standard</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="ml-20 d-none d-lg-block"><a class="search-trigger" href="#0">
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.0375 14.9381L12.0784 11.0334C13.0625 9.86621 13.6554 8.36744 13.6554 6.73438C13.6554 3.02103 10.5925 0 6.82774 0C3.0629 0 0 3.02103 0 6.73438C0 10.4475 3.0629 13.4683 6.82774 13.4683C8.4834 13.4683 10.0031 12.8836 11.1865 11.913L15.1456 15.8178C15.2687 15.9393 15.4301 16 15.5915 16C15.7529 16 15.9143 15.9393 16.0375 15.8178C16.2839 15.5748 16.2839 15.181 16.0375 14.9381ZM1.26142 6.73438C1.26142 3.70705 3.75845 1.24414 6.82774 1.24414C9.89695 1.24414 12.3939 3.70705 12.3939 6.73438C12.3939 9.76146 9.89695 12.2241 6.82774 12.2241C3.75845 12.2241 1.26142 9.76146 1.26142 6.73438Z"
                                            fill="white" />
                                    </svg>
                                </a></li>
                        </ul>
                    </nav>
                </div>
                <div class="d-none d-xl-flex gap-4">
                    <a href="contact.html" class="btn-one">Get A Quote <i
                            class="fa-regular fa-arrow-right-long"></i></a>
                    <div class="about-three__left-item d-flex flex-wrap gap-2 align-items-center">
                        <div class="about-call-icon">
                            <span>
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_918_1337)">
                                        <path
                                            d="M5.41667 4.33337H9.75L11.9167 9.75004L9.20833 11.375C10.3685 13.7275 12.2725 15.6315 14.625 16.7917L16.25 14.0834L21.6667 16.25V20.5834C21.6667 21.158 21.4384 21.7091 21.0321 22.1154C20.6257 22.5218 20.0746 22.75 19.5 22.75C15.2742 22.4932 11.2885 20.6987 8.2949 17.7051C5.3013 14.7115 3.5068 10.7258 3.25 6.50004C3.25 5.9254 3.47827 5.3743 3.8846 4.96798C4.29093 4.56165 4.84203 4.33337 5.41667 4.33337Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16.25 7.58337C16.8246 7.58337 17.3757 7.81165 17.7821 8.21798C18.1884 8.6243 18.4167 9.1754 18.4167 9.75004"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16.25 3.25C17.9739 3.25 19.6272 3.93482 20.8462 5.15381C22.0652 6.37279 22.75 8.02609 22.75 9.75"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="26" height="26" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </div>
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