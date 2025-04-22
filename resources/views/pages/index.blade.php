@extends('layouts.master')


@section('content')

<!-- Page Header -->
<div class="page-header ">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Dashboard</h2>
        <ol class="breadcrumb d-none">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
</div>
<!-- End Page Header -->

<!--Row-->
<div class="row row-sm ">
    <div class="col-sm-12 col-lg-12 col-xl-8">

        <!--Row-->
        <div class="row row-sm  mt-lg-0">
            <div class="col-sm-12 col-lg-12 col-xl-12">
                <div class="card bg-primary custom-card card-box">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-xl-8 col-sm-6 col-12 img-bg ">
                                <h4 class="d-flex  mb-3">
                                    <span class="font-weight-bold text-white ">{{$user->name}},<br>Welcome Back</span>
                                </h4>
                                <p class="tx-white-7 mb-1">{{$date}}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- col end -->

</div>

<div class="row">
    @if(count(getRecentVisit()) > 0)
    <label><b>Recently Viewed Folders/Files</b></label>
    @endif

    @foreach(getRecentVisit() as $recentVisit)
    @php
        $visitDate = \Carbon\Carbon::parse($recentVisit->updated_at)->format('l jS, F Y');
    @endphp
    <div class="col-md-6">
        <div class="card custom-card card-box rounded-30 mb-3">

            <div class="card-body p-4">

                @if($recentVisit->folder_id!='')
                    @if(checkAssignGroupMatchOrNot($recentVisit->folder_id))
                        <a href="{{route('data.management.folder',[urlencode(base64_encode($recentVisit->folder_id))])}}">
                    @else
                        <a href="#">
                    @endif
                        <div class="row align-items-center">
                            <div class="col-md-10 col-sm-6 col-12 img-bg ">
                                <h4 class="d-flex mb-0">
                                    <span class="font-weight-bold ">{{getFolder($recentVisit->folder_id)->name}}</span>
                                </h4>
                                <p class=" mb-1">{{$visitDate}}</p>
                            </div>
                            <div class="col-md-2 text-end">
                                <i class="fa fa-angle-right fs-50 "></i>
                            </div>
                        </div>
                    </a>
                @else

                @if(checkAssignGroupMatchOrNot(getFile($recentVisit->file_id)->folder_id))
                    <a href="{{route('file.data',[urlencode(base64_encode($recentVisit->file_id))])}}">
                @else
                    <a href="#">
                @endif
                    <div class="row align-items-center">
                        <div class="col-md-10 col-sm-6 col-12 img-bg ">
                            <h4 class="d-flex mb-0">
                                <span class="font-weight-bold ">{{getFile($recentVisit->file_id)->file_name}}</span>
                            </h4>
                            <p class=" mb-1">{{$visitDate}}</p>
                        </div>
                        <div class="col-md-2 text-end">
                            <i class="fa fa-angle-right fs-50 "></i>
                        </div>
                    </div>
                </a>
                @endif
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-md-6 d-none">
        <div class="card custom-card card-box rounded-30 mb-3">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-md-10 col-sm-6 col-12 img-bg ">
                        <h4 class="d-flex mb-0">
                            <span class="font-weight-bold ">Atco Engineering Pvt Ltd</span>
                        </h4>
                        <p class=" mb-1">{{$date}}</p>
                    </div>
                    <div class="col-md-2 text-end">
                        <i class="fa fa-angle-right fs-50 "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-none">
        <div class="card custom-card card-box rounded-30 mb-3">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-md-10 col-sm-6 col-12 img-bg ">
                        <h4 class="d-flex mb-0">
                            <span class="font-weight-bold ">Lendlease Management Ltd</span>
                        </h4>
                        <p class=" mb-1">{{$date}}</p>
                    </div>
                    <div class="col-md-2 text-end">
                        <i class="fa fa-angle-right fs-50 "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-none">
        <div class="card custom-card card-box rounded-30 mb-3">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-md-10 col-sm-6 col-12 img-bg ">
                        <h4 class="d-flex mb-0">
                            <span class="font-weight-bold ">Stockland Property Ltd </span>
                        </h4>
                        <p class=" mb-1">{{$date}}</p>
                    </div>
                    <div class="col-md-2 text-end">
                        <i class="fa fa-angle-right fs-50 "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-none">
        <div class="card custom-card card-box rounded-30 mb-3">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-md-10 col-sm-6 col-12 img-bg ">
                        <h4 class="d-flex mb-0">
                            <span class="font-weight-bold ">baxter Hammer Pvt Ltd</span>
                        </h4>
                        <p class=" mb-1">{{$date}}</p>
                    </div>
                    <div class="col-md-2 text-end">
                        <i class="fa fa-angle-right fs-50 "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- col end -->
</div>
<!-- Row end -->
@endsection

@section('scripts')

<!-- INTERNAL CHART BUNDLE JS -->
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

<!-- PEITY JS -->
<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

<!-- INTERNAL MORRIS JS -->
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/plugins/morris.js/morris.min.js')}}"></script>

<!-- CIRCLE PROGRESS JS -->
<script src="{{asset('assets/plugins/circle-progress/circle-progress.min.js')}}"></script>

<!-- INTERNAL DASHBOARD JS -->
<script src="{{asset('assets/js/index.js')}}"></script>



@endsection
