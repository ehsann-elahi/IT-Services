<!DOCTYPE html>
<html lang="en">

<head>


    @include('layout.header_scripts')

</head>

<body>

   <!-- Preloader area start -->
    <div class="loading">
        <span class="text-capitalize">L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>
    <div id="preloader">
    </div>
    <!-- Preloader area end -->

     <!-- Mouse cursor area start here -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse cursor area end here -->


    <!-- Header Start -->
    @include('layout.header')

    @include('layout.sidebar')

    <!-- Hero Start -->

    <!-- Team Two Start -->
    @yield('content')

    <!-- Footer Start -->
    @include('layout.footer')

    @include('layout.footer_scripts')

</body>

</html>