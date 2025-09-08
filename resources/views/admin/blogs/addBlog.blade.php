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

@section('styles')
    <style>
        #uploadTrigger3 {
            height: auto;
        }
        .btn-primary{
            width: unset;
            float: inline-end;
        }
    </style>
@endsection
@section('content')
    @include('layouts.admin_sidebar')
    <!-- =============== Left side End ================-->
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <!-- ============ Body content start ============= -->
        <div class="main-content">
            <div class="breadcrumb">
                <h1 class="mr-2">ADD Blog</h1>
                <div id="msg">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Left Side: Title & Description -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Title</label>
                                        <input class="form-control" type="text" name="title" placeholder="Enter Title"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Description</label>
                                        <textarea class="form-control" id="content" name="description"></textarea>
                                    </div>
                                </div>

                                <!-- Right Side: Image Upload -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-12" for="current_photo">Current
                                            Icon</label>
                                        <div class="col-md-6">
                                            <img id="blogImage"
                                                src="{{ isset($blog) && $blog->image ? asset('storage/' . $blog->image) : asset('assets/admin/images/noimage.png') }}"
                                                alt="blog Image" width="150px">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 p-0">
                                            <input type="file" id="uploadFile3" class="hidden" name="image"
                                                value="" style="display: none!important;">
                                            <button type="button" id="uploadTrigger3" onclick="uploadclick3()"
                                                class="form-control"><i class="fa fa-download"></i> Choose
                                                Image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-rounded mt-3">Create</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endsection
    @section('scripts')
        <script>
            function readURL3(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#blogImage').attr('src', e.target.result); // Update correct image
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            function uploadclick3() {
                $("#uploadFile3").click();
            }

            // Ensure change event is only set once
            $("#uploadFile3").change(function(event) {
                const fi = document.getElementById('uploadFile3');

                if (fi.files.length > 0) {
                    for (const i = 0; i <= fi.files.length - 1; i++) {
                        const fsize = fi.files.item(i).size;
                        const file = Math.round((fsize / 1024));

                        if (file > 2000) {
                            alert("File too Big, please select a file less than 2MB");
                        } else {
                            readURL3(this);
                            $("#uploadTrigger3").html(fi.files.item(i).name); // Show file name
                        }
                    }
                }
            });

            CKEDITOR.replace('content', {
                fullPage: true,
                format_tags: 'p;h1;h2;h3;h4;h5;h6',
            });
        </script>
    @endsection
