@extends('layout')
@section('content')
 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
@include('sidebar')
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            @include('topbar')

                <!-- Topbar -->
                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pending reports</h1>
                        <a href="{{ route('crime.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Report Crime</a>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Sexual assault</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$sexual_assault}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Murder</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$murder}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Robbery / theft</div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$robbery}}</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Others</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$other}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                    @foreach($pending_reports as $report)
                        <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <div href="#" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">{{$report->type}}</h6>
                                    <p class="m-0 text-info">Place: {{$report->location->name}}</p>
                                    <p class="m-0 ">Reported time: {{$report->created_at}}</p>
                                </div>
                                
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        {{$report->description}}
                                    </div>
                                </div>
                                <div href="#" class="d-block card-header py-3" data-toggle="collapse"
                                     aria-expanded="true" aria-controls="collapseCardExample">
                                     <h6 class="float-left">
                                        <form action="{{route('crime.approve', $report)}}" class="dropdown-item" method="post">
                                            @csrf    
                                                <button type="submit"  class="btn btn-success">
                                                    <i>Approve</i>
                                                </button>
                                        </form>
                                        </h6>
                                        <h6 class="float-right">
                                            <form action="{{route('crime.reject', $report)}}" class="dropdown-item" method="post">
                                            @csrf
                                                <button type="submit"  class="btn btn-danger btn">
                                                    <i>Reject</i>
                                                </button>
                                            </form>
                                        </h6>
                                </div>
                                
                            </div>                          
                        </div>
                        @endforeach
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    @include('footer')
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>



@endsection
