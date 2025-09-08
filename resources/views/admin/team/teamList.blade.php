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
    @media print {
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
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
            <h1 class="mr-2">Blogs</h1>

            <div id="msg">
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                @if (session('message1'))
                <div class="alert alert-danger">
                    {{ session('message1') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card o-hidden mb-4">
                        <div class="card-header d-flex align-items-center border-0">
                            <h3 class="w-50 float-left card-title m-0">Team Members</h3>
                            <div class="dropdown dropleft text-right w-50 float-right">
                                <a href="{{ route('teams.create') }}">
                                    <button class="btn bg-gray-100">
                                        <i class="nav-icon i-Add"></i> Add New Member
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-hover table-bordered" id="zero_configuration_table1"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SR#</th>
                                            <th>Name</th>
                                            <th>Expertise</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teams as $team)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $team->name }}</td>
                                            <td>{{ $team->expertise }}</td>
                                            <td>
                                                @if ($team->image)
                                                <img src="{{ asset('assets/upload/prod/' . $team->image) }}"
                                                    alt="{{ $team->name }}" width="100">

                                                @else
                                                <span>No Image</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="text-success mr-2"
                                                    href="{{ route('teams.edit', $team->id) }}">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Edit"></i>
                                                </a>
                                                <a class="text-danger mr-2" href="#">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"
                                                        data-toggle="modal"
                                                        data-target=".deleteTeam{{ $team->id }}"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Delete"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- Delete Modal -->
                                        <div class="modal fade deleteTeam{{ $team->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <form method="POST" action="{{ route('teams.destroy', $team->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content p-3">
                                                        <div class="card-title">Confirm</div>
                                                        <div>
                                                            <h4>Delete Team Member</h4>
                                                            <p>Are you sure you want to delete <b>{{ $team->name }}</b>?</p>
                                                            <button class="btn btn-danger"
                                                                type="submit">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection