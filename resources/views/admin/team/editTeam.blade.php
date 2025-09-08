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
                <form method="POST" action="{{ route('teams.update', $team->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Left Side: Name & Expertise -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name"
                                       value="{{ old('name', $team->name) }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Expertise</label>
                                <input class="form-control" type="text" name="expertise"
                                       value="{{ old('expertise', $team->expertise) }}" required>
                            </div>
                        </div>

                        <!-- Right Side: Image Upload -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Current Team Image</label>
                                <div>
                                    <img id="teamImage"
                                         src="{{ asset('assets/upload/prod/' . $team->image) }}"
                                         alt="Team Image" width="150px">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="file" id="uploadTeamFile" name="image" class="form-control">
                                <small class="text-muted">Upload a new image to replace the existing one.</small>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-rounded mt-3">
                        Update Team
                    </button>
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
                $('#teamImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#uploadTeamFile").change(function(event) {
        const fi = document.getElementById('uploadTeamFile');
        if (fi.files.length > 0) {
            const fsize = fi.files[0].size;
            const file = Math.round((fsize / 1024));

            if (file > 2000) {
                alert("File too Big, please select a file less than 2MB");
                $(this).val(""); // reset file input
            } else {
                readTeamURL(this);
            }
        }
    });
</script>

    @endsection
