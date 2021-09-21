@extends('layouts.admin')
@push('link')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush
@section('content')
	<!-- Main charts -->
    <div class="page-header page-header-light">
       

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Dashboard</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

           
        </div>
    </div>
    <br>
    <div class="content">
        <div class="row">
            <div class="col-xl-12">
    
                <!-- Traffic sources -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Dashboard Pengaduan Masyarakat Tahun {{Carbon\Carbon::now()->format('Y')}}</h6>
                        <div class="header-elements">
                            <div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                              
                            </div>
                        </div>
                    </div>
    
                    <div class="card-body py-0">
                        <div class="row">
                            
                            <div class="col-sm-4">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
                                        <i class="icon-megaphone"> </i>
                                        {{-- <i class="fas fa-bullhorn"></i> --}}
                                    </a>
                                    <div>
                                        <div class="font-weight-semibold">Total Pengaduan {{Carbon\Carbon::now()->format('Y')}}</div>
                                        <span class="text-muted countt">{{$pengaduan}} </span>
                                    </div>
                                </div>
                                <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                            </div>
    
                            <div class="col-sm-4">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <a href="#" class="btn bg-transparent border-black-400 text-black-400 rounded-round border-2 btn-icon mr-3">
                                        <i class="icon-user-tie"></i>
                                    </a>
                                    <div>
                                        <div class="font-weight-semibold">Petugas</div>
                                        <span class="text-muted">{{$petugas}} Orang</span>
                                    </div>
                                </div>
                                <div class="w-75 mx-auto mb-3 " style="stroke: black;" id="new-sessions"></div>
                            </div>
    
                            <div class="col-sm-4">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
                                        <i class="icon-people"></i>
                                    </a>
                                    <div>
                                        <div class="font-weight-semibold">Masyarakat</div>
                                        <span class="text-muted"><span class="badge  border-success mr-2"></span> {{$masyarakat}} orang</span>
                                    </div>
                                </div>
                                <div class="w-75 mx-auto mb-3" id="total-online"></div>
                            </div>
                            <div class="col-lg-4">

								<!-- Today's revenue -->
								<div class="card bg-blue-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">Proses</h3>
											<div class="list-icons ml-auto">
						                		<a class="list-icons-item" data-action="reload"></a>
						                	</div>
					                	</div>
					                	
					                	<div>
											Bulan Mei
											<div class="font-size-sm opacity-75">{{$proses_now}}</div>
										</div>
									</div>

								</div>
								<!-- /today's revenue -->

							</div>
                            <div class="col-lg-4">

								<!-- Today's revenue -->
								<div class="card bg-success-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">Tanggapi</h3>
											<div class="list-icons ml-auto">
						                		<a class="list-icons-item" data-action="reload"></a>
						                	</div>
					                	</div>
					                	
					                	<div>
											Bulan Mei
											<div class="font-size-sm opacity-75">{{$tanggapi_now}}</div>
										</div>
									</div>

								</div>
								<!-- /today's revenue -->

							</div>
                            <div class="col-lg-4">

								<!-- Today's revenue -->
								<div class="card bg-danger-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">Tolak</h3>
											<div class="list-icons ml-auto">
						                		<a class="list-icons-item" data-action="reload"></a>
						                	</div>
					                	</div>
					                	
					                	<div>
											Bulan Mei
											<div class="font-size-sm opacity-75">{{$tolak_now}}</div>
										</div>
									</div>

								</div>
								<!-- /today's revenue -->

							</div>  
                            
                        </div>
                    </div>
                    
                    {{-- BUlanan laporan --}}
                    <div id="pengaduan_pertahun">

                    </div>
                    {{-- BUlanan laporan --}}

                </div>
    
            </div>
    
        
        </div>
        <!-- /main charts -->
    
    
        <!-- Dashboard content -->
        {{-- <div class="row">
            <div class="col-xl-8">
    
                <!-- Marketing campaigns -->
                <div class="card">
                    <div class="card-header header-elements-sm-inline">
                        <h6 class="card-title">Marketing campaigns</h6>
                        <div class="header-elements">
                            <span class="badge bg-success badge-pill">28 active</span>
                            <div class="list-icons ml-3">
                                <div class="list-icons-item dropdown">
                                    <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                        <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                        <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
                        <div class="d-flex align-items-center mb-3 mb-sm-0">
                            <div id="campaigns-donut"></div>
                            <div class="ml-3">
                                <h5 class="font-weight-semibold mb-0">38,289 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+16.2%)</span></h5>
                                <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">May 12, 12:30 am</span>
                            </div>
                        </div>
    
                        <div class="d-flex align-items-center mb-3 mb-sm-0">
                            <div class="ml-3">
                                <h5 class="font-weight-semibold mb-0">2,458 <span class="text-danger font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i> (-4.9%)</span></h5>
                                <span class="badge badge-mark border-danger mr-1"></span> <span class="text-muted">Jun 4, 4:00 am</span>
                            </div>
                        </div>
    
                        <div>
                            <a href="#" class="btn bg-indigo-300"><i class="icon-statistics mr-2"></i> View report</a>
                        </div>
                    </div>
    
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th>Campaign</th>
                                    <th>Client</th>
                                    <th>Changes</th>
                                    <th>Budget</th>
                                    <th>Status</th>
                                    <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active table-border-double">
                                    <td colspan="5">Today</td>
                                    <td class="text-right">
                                        <span class="progress-meter" id="today-progress" data-progress="30"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="{{asset('global_assets')}}/images/brands/facebook.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Facebook</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-blue mr-1"></span>
                                                    02:00 - 03:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Mintlime</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.43%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$5,489</h6></td>
                                    <td><span class="badge bg-blue">Active</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="{{asset('global_assets')}}/images/brands/youtube.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Youtube videos</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-danger mr-1"></span>
                                                    13:00 - 14:00you
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">CDsoft</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 3.12%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$2,592</h6></td>
                                    <td><span class="badge bg-danger">Closed</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="{{asset('global_assets')}}/images/brands/spotify.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Spotify ads</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-grey-400 mr-1"></span>
                                                    10:00 - 11:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Diligence</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> - 8.02%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$1,268</h6></td>
                                    <td><span class="badge bg-grey-400">On hold</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="{{asset('global_assets')}}/images/brands/twitter.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Twitter ads</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-grey-400 mr-1"></span>
                                                    04:00 - 05:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Deluxe</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.78%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$7,467</h6></td>
                                    <td><span class="badge bg-grey-400">On hold</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr class="table-active table-border-double">
                                    <td colspan="5">Yesterday</td>
                                    <td class="text-right">
                                        <span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="{{asset('global_assets')}}/images/brands/bing.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Bing campaign</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-success mr-1"></span>
                                                    15:00 - 16:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Metrics</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> - 5.78%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$970</h6></td>
                                    <td><span class="badge bg-success-400">Pending</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="{{asset('global_assets')}}/images/brands/amazon.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Amazon ads</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-danger mr-1"></span>
                                                    18:00 - 19:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Blueish</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 6.79%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$1,540</h6></td>
                                    <td><span class="badge bg-blue">Active</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="{{asset('global_assets')}}/images/brands/dribbble.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Dribbble ads</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-blue mr-1"></span>
                                                    20:00 - 21:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Teamable</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> 9.83%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$8,350</h6></td>
                                    <td><span class="badge bg-danger">Closed</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /marketing campaigns -->
    
    
                <!-- Quick stats boxes -->
                <div class="row">
                    <div class="col-lg-4">
    
                        <!-- Members online -->
                        <div class="card bg-teal-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">3,450</h3>
                                    <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
                                </div>
                                
                                <div>
                                    Members online
                                    <div class="font-size-sm opacity-75">489 avg</div>
                                </div>
                            </div>
    
                            <div class="container-fluid">
                                <div id="members-online"></div>
                            </div>
                        </div>
                        <!-- /members online -->
    
                    </div>
    
                    <div class="col-lg-4">
    
                        <!-- Current server load -->
                        <div class="card bg-pink-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">49.4%</h3>
                                    <div class="list-icons ml-auto">
                                        <div class="list-icons-item dropdown">
                                            <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                                <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                                <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                                <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div>
                                    Current server load
                                    <div class="font-size-sm opacity-75">34.6% avg</div>
                                </div>
                            </div>
    
                            <div id="server-load"></div>
                        </div>
                        <!-- /current server load -->
    
                    </div>
    
                    <div class="col-lg-4">
    
                        <!-- Today's revenue -->
                        <div class="card bg-blue-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">$18,390</h3>
                                    <div class="list-icons ml-auto">
                                        <a class="list-icons-item" data-action="reload"></a>
                                    </div>
                                </div>
                                
                                <div>
                                    Today's revenue
                                    <div class="font-size-sm opacity-75">$37,578 avg</div>
                                </div>
                            </div>
    
                            <div id="today-revenue"></div>
                        </div>
                        <!-- /today's revenue -->
    
                    </div>
                </div>
                <!-- /quick stats boxes -->
    
    
                <!-- Support tickets -->
                <div class="card">
                    <div class="card-header header-elements-sm-inline">
                        <h6 class="card-title">Support tickets</h6>
                        <div class="header-elements">
                            <a class="text-default daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle">
                                <i class="icon-calendar3 mr-2"></i>
                                <span></span>
                            </a>
                        </div>
                    </div>
    
                    <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <div id="tickets-status"></div>
                            <div class="ml-3">
                                <h5 class="font-weight-semibold mb-0">14,327 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+2.9%)</span></h5>
                                <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Jun 16, 10:00 am</span>
                            </div>
                        </div>
    
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                                <i class="icon-alarm-add"></i>
                            </a>
                            <div class="ml-3">
                                <h5 class="font-weight-semibold mb-0">1,132</h5>
                                <span class="text-muted">total tickets</span>
                            </div>
                        </div>
    
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                                <i class="icon-spinner11"></i>
                            </a>
                            <div class="ml-3">
                                <h5 class="font-weight-semibold mb-0">06:25:00</h5>
                                <span class="text-muted">response time</span>
                            </div>
                        </div>
    
                        <div>
                            <a href="#" class="btn bg-teal-400"><i class="icon-statistics mr-2"></i> Report</a>
                        </div>
                    </div>
                </div>
                <!-- /support tickets -->
    
    
                <!-- Latest posts -->
                
                <!-- /latest posts -->
    
            </div>
    
    
        </div> --}}

    </div>
    <!-- /dashboard content -->

@endsection







@push('script')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
    $('.countt').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

</script>
<script>
   Highcharts.chart('pengaduan_pertahun', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Data Pengaduan'
    },
    subtitle: {
        text: 'Source: www.ngadU!.com'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Bulanan'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:1f} jumlah</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    colors: ['#3385ff', '#50B432', '#cc0000', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
    series: [{
        name: 'Proses',
        data: {!!json_encode($proses)!!}

    }, {
        name: 'Tanggapi',
        data: {!!json_encode($selesai)!!}

    }, {
        name: 'Tolak',
        data: {!!json_encode($tolak)!!}

    }
    ]
});
    
</script>
@endpush
