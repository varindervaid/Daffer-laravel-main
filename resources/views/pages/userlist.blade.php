@extends('layouts.master')
@section('styles')
@endsection
@section('content')

<!-- Page Header -->
<div class="page-header d-none">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">UserList</h2>
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
            <li class="breadcrumb-item active" aria-current="page">UserList</li>
        </ol>
    </div>
    <div class="d-flex ">
        <div class="justify-content-center ">
            <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                <i class="fe fe-download me-2"></i> Import
            </button>
            <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                <i class="fe fe-filter me-2"></i> Filter
            </button>
            <button type="button" class="btn btn-primary my-2 btn-icon-text">
                <i class="fe fe-download-cloud me-2"></i> Download Report
            </button>
        </div>
    </div>
</div>
<ul class="nav nav-tabs mt-5 gap-2" role="tablist">
    @if(permission_helper('1','view_opt'))
    <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#user-management">User Management</a>
    </li>
    @endif
    @if(permission_helper('3','view_opt'))
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#group-management">Group Management</a>
    </li>
    @endif
    @if(permission_helper('2','view_opt'))
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#role-management">Role Management</a>
    </li>
    @endif
</ul>
<!-- Tab panes -->
{{view('pages.message')}}
<div class="tab-content">
    <div id="user-management" class="tab-pane fade show active">
        @include('pages.admin.user.index')
    </div>
    <div id="group-management" class="tab-pane fade mt-5">
        @include('pages.admin.group.index')
    </div>
    <div id="role-management" class="tab-pane fade mt-5">
        @include('pages.admin.role.index')
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {

        var groupShowUrl = "{{ url('edit_group') }}/";
        $('#add-user').on('click', function() {
            $('.add_user').val('');
            $('#addUserModal').modal('show');
        })
    })
</script>
<script src="{{asset('assets/js/check-all-mail.js')}}"></script>
@endsection
