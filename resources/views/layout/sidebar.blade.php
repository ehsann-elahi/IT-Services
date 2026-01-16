<!-- Sidebar area start here -->
<div id="targetElement" class="sidebar-area sidebar__hide">
    <div class="sidebar__overlay"></div>
    <a href="{{route('index')}}" class="logo mb-40">
        <img src="{{asset('/assets/front/images/logo/logo.svg')}}" alt="logo">
    </a>
    <div class="sidebar__search mb-30">
        <input type="text" placeholder="Search...">
        <i class="fa-regular fa-magnifying-glass"></i>
    </div>
    <div class="mobile-menu overflow-hidden"></div>
    <ul class="info pt-40">

        <li class="py-2"><i class="fa-solid primary-color fa-phone-volume"></i> <a
                href="tel:+208-6666-0112">+971 52 541 2617</a>
        </li>
        <li><i class="fa-solid primary-color fa-paper-plane"></i>contact@metadigitalmarketing.ae</li>
    </ul>
    <div class="social-icon mt-20">
        <a href="https://www.facebook.com/MetaDigitalConsultant/"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/_u/meta_digitalmarketing"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.linkedin.com/company/metadigitalmarketing-ae/posts/?feedView=all"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://www.youtube.com/@Meta-Digital-Marketing"><i class="fa-brands fa-youtube"></i></a>
    </div>
    <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
</div>
<!-- Sidebar area end here -->

<!-- Fullscreen search area start here -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fullscreen search area end here -->