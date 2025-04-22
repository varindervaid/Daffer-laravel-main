@extends('layouts.master')
@section('content')
@if (session('success'))
<div class="alert alert-success mt-3">
    {{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger m-3">
    {{ session('error') }}
</div>
@endif
<!-- Page Header -->
<style>
    .select2-selection__clear {
        display: none !important;
    }



    .dataTables_filter{
        display: none !important;
    }

    .select2-container .select2-selection--single {
        height: 36px;
        /* Adjust this value as per your design */
        line-height: 40px;
        /* Align text vertically */
    }
</style>
<div class="page-header ">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Data Export</h2>
        <ol class="breadcrumb d-none">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
            <li class="breadcrumb-item active" aria-current="page">Activity Log List</li>
        </ol>
    </div>
</div>

<form action="" method="GET">
    <div class="row  align-items-end mt-5">
        <!-- Text Input for Search -->
        <div class="form-group col-md-3 col-sm-6">

            <input type="text" class="form-control" id="searchTerm" name="search" value="{{request('search')}}" placeholder="Search By File Name">
        </div>
        <!-- Group Dropdown for Admin Role -->
        @if(Auth::user()->role_id == '1')
        <div class="form-group col-md-2 col-sm-6">

            <select class="form-control select2"  name="created_by">
                <option value="" disabled selected>Select Created By</option>
                @foreach(getAllUser() as $user)
                <option value="{{urlencode(base64_encode($user->id))}}" {{base64_decode(urldecode(request('created_by'))) == $user->id ? 'selected' : ''}}>{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        @endif
        <!-- Status Dropdown -->
        <div class="form-group col-md-2 col-sm-6">
            <input type="text" placeholder="DD-MM-YY" value="{{request('created_at')}}" readonly="" class="form-control datepicker1"  name="created_at">
        </div>
        <!-- Filter and Clear Buttons -->
        <div class="form-group col-md-3 col-sm-12 d-flex gap-2 align-items-center mt-sm-3 mt-md-0">
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="{{url('data-export')}}" class="btn btn-outline-danger">Clear Filter</a>
        </div>
    </div>
</form>


<div class="card mt-5 mb-4">
    <div class="card-body">
        <div class="  py-2 log-table ">
            <table class="table table-striped mb-0 text-nowrap text-md-nowrap log_activity_table">
                <thead>
                    <tr class="border-bottom">
                        <th>File Name</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr class="border-bottom">
                        <td>
                            <a trarget="_blank" data-type="file" href="{{route('file.data',[urlencode(base64_encode($data->id))])}}" class="text-black recent_viewed"><i class="far fa-file me-2"></i> {{ $data->file_name ?? 'No file name' }}</a>
                        </td>
                        <td>{{ getUserName($data->created_by) }}</td>
                        <td>{{ date('d-m-Y',strtotime($data->created_at)) }}</td>
                        <td><a href="{{route('export.file.data',[urlencode(base64_encode($data->id))])}}" class="btn btn-primary">Export</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<!-- INTERNAL CHECK-ALL-MAIL JS -->


@endsection
