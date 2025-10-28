@extends('layout.app')
@section('title','Clutch Resources | Business Trends & Insights')
@section('description','Learn about the latest insights & trends that could impact your business. Read curated articles on popular topics like growth, hiring, industry data & more.')
@section('og:description','Learn about the latest insights & trends that could impact your business. Read curated articles on popular topics like growth, hiring, industry data & more.')
@section('og:title','Clutch Resources | Business Trends & Insights')
<!-- @section('og:url', 'https://alkhyalcurtain.ae/privacy-policy') -->
@section('canonical', url()->current())

@section('content')

<!-- Page banner area start here -->
<section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{ asset('assets/front/images/banner/blog.webp') }}">
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Blog Grid</h1>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="{{ route('index') }}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Blog Grid</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Blog area start here -->
<section class="blog-area pt-120 pb-120">
    <div class="container">
        <div class="row g-4">

         @foreach($blogs as $blog)
      
    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="blog__item">
            <a href="{{ route('blogDetail', $blog->id) }}" class="blog__image d-block image">
                <img src="{{ asset('assets/upload/prod/' . $blog->image) }}" alt="image">
                <div class="blog-tag">
                    <h3 class="text-white">10</h3>
                    <span class="text-white">Dec</span>
                </div>
            </a>
            <div class="blog__content">
                <ul class="blog-info pb-20 bor-bottom mb-20">
                    <li>
                        <a href="#0">By Admin</a>
                    </li>
                    <li>
                        <a href="#0">0 Comments</a>
                    </li>
                </ul>

                <h3>
                    <a href="{{ route('blogDetail', $blog->id) }}" class="primary-hover">
                        {{ $blog->title }}
                    </a>
                </h3>

                <p>{!! \Illuminate\Support\Str::limit(strip_tags($blog->description), 150, '...') !!}</p>

                <a class="mt-25 read-more-btn" href="{{ route('blogDetail', $blog->id) }}">
                    Read More <i class="fa-regular fa-arrow-right-long"></i>
                </a>
            </div>
        </div>
    </div>
@endforeach


        </div>

        <div class="pegi justify-content-center mt-60">
            <a href="#0" class="active">01</a>
            <a href="#0">02</a>
            <a href="#0">03</a>
            <a href="#0"><i class="fa-solid fa-arrow-right-long primary-color transition"></i></a>
        </div>
    </div>
</section>
<!-- Blog area end here -->

@endsection
