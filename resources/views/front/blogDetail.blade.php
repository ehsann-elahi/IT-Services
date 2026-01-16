@php
    use Illuminate\Support\Str;

    $cleanDescription = strip_tags($blog->description); // remove HTML
    $cleanDescription = preg_replace('/\s+/', ' ', $cleanDescription); // normalize spaces
    $cleanDescription = trim($cleanDescription);
    $limitedDescription = Str::limit($cleanDescription, 150); // limit to 150 characters
@endphp
@extends('layout.app')
@section('title', $blog->title)
@section('description',$limitedDescription)
@section('og:title', $blog->title)
@section('og:description',$limitedDescription)
@section('canonical', rtrim(url()->current(), '/') . '/')
@section('content')

<section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{asset('assets/front/images/banner/blogdetails.webp')}}">
         
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Blog Details</h1>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="{{route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Blog
                Details</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Blog single area start here -->
<section class="blog-single-area pt-120 pb-120">
    <div class="container">
        <div class="row g-4">
           <div class="col-lg-8 order-2 order-lg-1">
    <div class="blog__item blog-single__left-item shadow-none">
        <div class="image">
            <img src="{{ asset('assets/upload/prod/' . $blog->image) }}" alt="image">
        </div>
        <div class="blog__content p-0">
            <ul class="pb-3 pt-30 bor-bottom d-flex gap-4 flex-wrap align-items-center">
                <li>
                    <a  ><span class="primary-hover transition">By Admin</span></a>
                </li>
                <li>
                    <span>{{ $blog->created_at->format('d, M Y') }}</span>
                </li>
            </ul>

            <h3 class="blog-single__title mt-20">{{ $blog->title }}</h3>
            <p class="mb-20 mt-20">{!! $blog->description !!}</p>
        </div>

        
    </div>
</div>


            <div class="col-lg-4 order-1 order-lg-1">
                <div class="blog-single__right-item">

                    <div class="item sub-bg mb-30">
                        <h5 class="title">Category</h5>
                        <ul class="category service-category">
                            <li><a href="{{route('WebDevelopment')}}">Web Development</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li class="active"><a href="{{route('Digitalmarketing')}}">Digital Marketing</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="{{route('AppDevelopment')}}">App Development</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="{{route('Seo')}}">SEO</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="{{route('Graphicdesigning')}}">Graphic Desigining</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="{{route('Socialmediamarketing')}}">Social Media Marketing</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                            <li><a href="{{route('googleads')}}">Google Ads</a> <i
                                    class="fa-regular fa-arrow-right-long primary-color"></i></li>
                        </ul>
                    </div>

                    
                    
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Blog single area end here -->

@endsection