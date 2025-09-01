@push('admin_footer')
@if (session('message'))
<script>
    setTimeout(function() {
        let msg = document.getElementById('msg');
        msg.style.display = 'none';
    }, 9000);
</script>
@endif
@endpush
@extends('layouts.admin_app')
@section('content')
@include('layouts.admin_sidebar')
<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Dashboard</h1>

        </div>
        <div id="msg">
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <!-- ICON BG-->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <a href="">
                        <div class="card-body text-center">
                            <i class="i-Split-Horizontal-2-Window"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Total Product</p>
                                <p class="text-primary text-24 line-height-1 mb-2">1234</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <a href="123">
                        <div class="card-body text-center">
                            <i class="i-Checkout-Basket"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Total Order</p>
                                <p class="text-primary text-24 line-height-1 mb-2">1234</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection