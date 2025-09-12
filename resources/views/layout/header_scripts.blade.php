 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title') | {{ config('app.name','Laravel') }}</title>

<meta name="description" content="@yield('description')">
<meta name="og:description" content="@yield('og:description')">
 <!-- Favicon img -->
 <link rel="shortcut icon" href="{{asset('assets/front/images/favicon.png')}}">
 <!-- Bootstarp min css -->
 <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
 <!-- Mean menu css -->
 <link rel="stylesheet" href="{{asset('assets/front/css/meanmenu.css')}}">
 <!-- All min css -->
 <link rel="stylesheet" href="{{asset('assets/front/css/all.min.css')}}">
 <!-- Swiper bundle min css -->
 <link rel="stylesheet" href="{{asset('assets/front/css/swiper-bundle.min.css')}}">
 <!-- Magnigic popup css -->
 <link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
 <!-- Animate css -->
 <link rel="stylesheet" href="{{asset('assets/front/css/animate.css')}}">
 <!-- Nice select css -->
 <link rel="stylesheet" href="{{asset('assets/front/css/nice-select.css')}}">
 <!-- Style css -->
 <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">

 <link rel="canonical" href="@yield('canonical')" />

 @yield('styles')
 @stack('header')