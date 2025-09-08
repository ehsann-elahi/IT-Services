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

    .btn-primary {
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
            <h1 class="mr-2">ADD Team</h1>
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
                    <form method="POST" action="{{ route('teams.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Left Side: Title & Description -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Name"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Expertise</label>
                                    <input class="form-control" type="text" name="expertise" placeholder="Enter You Expertise"
                                        required>
                                </div>

                            </div>

                            <!-- Right Side: Image Upload -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-12" for="current_photo">Current Team Image</label>
                                    <div class="col-md-6">
                                        <img id="teamImage"
                                            src="{{ isset($team) && $team->image ? asset('assets/upload/prod/' . $team->image) : asset('assets/admin/images/noimage.png') }}"
                                            alt="Team Image" width="150px">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4 p-0">
                                        <input type="file" id="uploadTeamFile" class="hidden" name="image"
                                            value="" style="display: none!important;">
                                        <button type="button" id="uploadTeamTrigger" onclick="uploadTeamClick()"
                                            class="form-control"><i class="fa fa-download"></i> Choose Team Image</button>
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
        function readTeamURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#teamImage').attr('src', e.target.result); // Update team image
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function uploadTeamClick() {
            $("#uploadTeamFile").click();
        }

        // Ensure change event is only set once
        $("#uploadTeamFile").change(function(event) {
            const fi = document.getElementById('uploadTeamFile');

            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {
                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));

                    if (file > 2000) {
                        alert("File too Big, please select a file less than 2MB");
                    } else {
                        readTeamURL(this);
                        $("#uploadTeamTrigger").html(fi.files.item(i).name); // Show file name
                    }
                }
            }
        });
    </script>
    @endsection