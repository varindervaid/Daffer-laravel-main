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
<div class="page-header ">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Activity Log</h2>
        <ol class="breadcrumb d-none">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
            <li class="breadcrumb-item active" aria-current="page">Activity Log List</li>
        </ol>
    </div>
</div>
<style>
    .dataTables_filter{
        display:none !important;
    }
</style>

<div class=" mt-5">
    @if(Auth::user()->role_id=='1')
        <form id="log_delete_form">
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="from-date">From Date</label>
                    <input type="text" placeholder="DD-MM-YY" readonly class="form-control datepicker1" id="from-date" name="from-date">
                    <span class="text-danger error" id="from_date_error"></span>
                </div>
                <div class="form-group col-md-3">
                    <label for="to-date">To Date</label>
                    <input type="text" placeholder="DD-MM-YY"readonly class="form-control datepicker1" id="to-date" name="to-date">
                    <span class="text-danger error" id="to_date_error"></span>
                </div>
                <div class="form-group col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </form>
    @endif
    <form id="">
        <div class="row">
            <div class="form-group col-md-3">
                <input type="text" value="{{request('search')}}"  class="form-control"  name="search" placeholder="Search by user or action or desc">
                <span class="text-danger error" id="from_date_error"></span>
            </div>
            <div class="form-group col-md-3 col-sm-12 d-flex gap-2 align-items-center mt-sm-3 mt-md-0">
                <button type="submit" class="btn btn-primary">Filter</button>
                <a href="http://127.0.0.1:8000/activity-log" class="btn btn-outline-danger">Clear Filter</a>
            </div>
        </div>
    </form>
</div>




<div class="card mt-5 mb-4">
    <div class="card-header p-3">
        <div style="float:right">
            <form action="{{ route('log.export') }}" method="POST" id="log-export-form">
                @csrf
                <input type="hidden" name="search" value="{{request('search')}}" id="activity-log-sarch">
                <button type="submit" class="btn btn-primary" id="log-export-button">Export</button>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="  py-2 log-table ">
            <table class="table table-striped mb-0 text-nowrap text-md-nowrap log_activity_table">
                <thead>
                    <tr class="border-bottom">
                        <th>User</th>
                        <th>Action</th>
                        <th>Description</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($logs as $log)
                    <tr class="border-bottom">
                        <td>{{ $log->user->name ?? 'System' }}</td>
                        <td>{{ $log->action }}</td>
                        <td>{{ $log->description }}</td>
                        <td>{{ $log->created_at->format('d-m-Y H:i') }}</td>
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
<script>
    $(document).on('submit', '#log_delete_form', function(e) {
        e.preventDefault(); // prevent form submission

        var from_date = $('#from-date').val();
        var to_date = $('#to-date').val();
        var url = "{{ route('delete.log') }}";

        // Check if From Date and To Date are filled (required validation)
        if (!from_date || !to_date) {
            Swal.fire({
                title: 'Error!',
                text: 'Both From Date and To Date are required.',
                icon: 'error',
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ok'
            });
            return;
        }

        if (to_date < from_date) {
            Swal.fire({
                title: 'Error!',
                text: 'To Date must be equal to or after From Date.',
                icon: 'error',
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ok'
            });
            return;
        }

        // If validation passes, ask for confirmation before deleting
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete the log activity from " + from_date + ' to ' + to_date,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#6259ca',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    data: {
                        from_date: from_date,
                        to_date: to_date,
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Success!',
                                text: 'Log activity deleted successfully',
                                icon: 'success',
                                confirmButtonColor: '#6259ca',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload(); // Refresh the page to reflect changes
                                }
                            });
                        } else {
                            $('#from-date').val('');
                            $('#to-date').val('');
                            Swal.fire({
                                title: 'Error!',
                                text: response.message,
                                icon: 'error',
                                confirmButtonColor: '#d33',
                                confirmButtonText: 'Ok'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred: ' + error,
                            icon: 'error',
                            confirmButtonColor: '#d33',
                            confirmButtonText: 'Ok'
                        });
                    }
                });
            }
        });
    });


    // log export button code start
    $('.log-table').on('keyup', 'input[type="search"]', function() {
        // Get the current value of the search input
        var searchValue = $(this).val();
        console.log(searchValue);

        // Update the hidden input field in the form
        $('#log-sarch').val(searchValue);
    });
    // log export button code end
</script>

@endsection
