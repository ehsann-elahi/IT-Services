<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title') | {{ config('app.name','MetaDigital Marketing') }}</title>

<meta name="description" content="@yield('description','Leading SEO & Digital Marketing Agency Dubai & Abu Dhabi')">
<meta property="og:title" content="@yield('og:title','Leading SEO & Digital Marketing Agency Dubai & Abu Dhabi')">
<meta property="og:description" content="@yield('og:description','Leading SEO & Digital Marketing Agency Dubai & Abu Dhabi')">
<meta property="og:type" content="website">
<meta property="og:url" content="@yield('canonical','https://metadigitalmarketing.ae/')">
<meta property="og:site_name" content="MetaDigital Marketing">
<meta property="og:image" content="https://metadigitalmarketing.ae/assets/img/homeImages/launcher.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<link rel="canonical" href="@yield('canonical','https://metadigitalmarketing.ae/')" />

<meta name="google-site-verification" content="pPQHy1S6zumy8SsHzj9Dp4ALuCCWbTZpCsWdySPa7Hc"/>

<!-- JSON-LD Schemas -->
<script type="application/ld+json">
{ ... }
</script>
<!-- (keep your existing JSON-LD blocks) -->

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('/assets/front/images/favicon.webp') }}">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('/assets/front/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/front/css/meanmenu.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/front/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/front/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/front/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/front/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/front/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/front/css/style.css') }}">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

@yield('styles')
@stack('header')
