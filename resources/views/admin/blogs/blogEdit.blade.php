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
                <h1 class="mr-2">Edit Blog</h1>
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
                        <form method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <!-- Left Side: Title & Description -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Title</label>
                                        <input class="form-control" type="text" name="title"
                                            value="{{ old('title', $blog->title) }}" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Description</label>
                                        <textarea class="form-control" id="content" name="description">{!! old('description', $blog->description) !!}</textarea>
                                    </div>
                                </div>

                                <!-- Right Side: Image Upload -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Current Image</label>
                                        <div>
                                            <img id="blogImage" src="{{ asset('assets/upload/prod/' . $blog->image) }}"
                                                alt="Blog Image" width="150px">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control">
                                        <small class="text-muted">Upload a new image to replace the existing one.</small>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block btn-rounded mt-3">Update Blog</button>
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
                        $('#blogimg').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            function uploadclick3() {
                $("#uploadFile3").click();
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
            }
            CKEDITOR.replace('content', {
        removePlugins: 'exportpdf', // Optional: Remove unnecessary plugins
        format_tags: 'p;h1;h2;h3;h4;h5;h6'
    });
        </script>
    @endsection
