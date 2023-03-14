
@extends('layouts.main')
@push('page_css')
@endpush
@section('content')
<div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">DETAIL PERMOHONAN</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Love - Banten</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                            <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i data-feather="download" class="align-self-center icon-xs"></i>
                                        </a>
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-dark mb-0 font-weight-semibold">Total Sampel</p>
                                                    <h3 class="m-0">0</h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="users" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col">
                                                    <p class="text-dark mb-0 font-weight-semibold">Status Pending</p>
                                                    <h3 class="m-0">0</h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="clock" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div> 
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col">
                                                    <p class="text-dark mb-0 font-weight-semibold">Total Ditolak</p>
                                                    <h3 class="m-0">0</h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="activity" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div> 
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">  
                                                    <p class="text-dark mb-0 font-weight-semibold">Total Epi</p>                                         
                                                    <h3 class="m-0">0</h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="briefcase" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div> 
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col-->                               
                            </div><!--end row-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        @foreach($data_permohonan as $dt_pm)
                                        <div class="col">                      
                                            <h4 class="card-title">Download Dokumen IPermohonan {{$dt_pm->id}}</h4>                      
                                        </div><!--end col-->
                                        @endforeach
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   Today<i class="las la-angle-down ml-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Yesterday</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                </div>
                                            </div>               
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->                                
                                <div class="card-body">
                                    <ul class="list-group custom-list-group mb-n3">
                                        <div class="tab-pane fade show active" id="files-projects">
                                            <div class="file-box-content">
                                                @foreach($data_dok as $item)
                                                     <div class="file-box">
                                                        @foreach($data_permohonan as $fs)
                                                        <a href="{{env('APP_URL')}}/download/form/{{$fs->id}}" class="download-icon-link">
                                                            <i class="dripicons-download file-download-icon"></i>
                                                        </a>
                                                        @endforeach    
                                                        <div class="text-center">
                                                            <i class="lar la-file-alt text-primary"></i>
                                                            <h6 class="text-truncate">{{$item->nama_dokumen}}</h6>
                                                            <small class="text-muted">06 March 2019 / 5MB</small>
                                                        </div>                                                        
                                                        </div>
                                                    @endforeach 
                                                </div>
                                            </div><!--end tab-pane-->       
                                    </ul>                                
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h2 class="m-0 align-self-center">FILE</h2>
                                        <div class="d-block ml-2 align-self-center">
                                            <h5 class="my-1">Upload File</h5>
                                            <p class="mb-0 text-muted">Silahkan Upload file jika telah melakukan pembayaran dengan bukti pembayaran 
                                            </p>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col--> 
                      
                        <div class="col-lg-6">
                            <div class="card">   
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Dokumen proses</h4>                      
                                        </div><!--end col-->
                                
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->                                              
                                <div class="card-body"> 
                                    <div class="analytic-dash-activity" data-simplebar>
                                        @foreach ($data_progres as $fn)
                                        <div class="activity">
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="las la-user-clock bg-soft-primary"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-13 w-75"><span>{{$fn->workflow->nama_aksi}} </span> 
                                                        </p>
                                                    </div>    
                                                </div>
                                            </div>                                                                                                                                   
                                        </div><!--end activity-->
                                        @endforeach
                                    </div><!--end analytics-dash-activity-->
                                </div>  <!--end card-body-->                                     
                            </div><!--end card--> 
                        </div><!--end col--> 
                       
                    </div><!--end row-->                

                </div><!-- container -->
                @include('components.footer');
            </div>
@endsection
