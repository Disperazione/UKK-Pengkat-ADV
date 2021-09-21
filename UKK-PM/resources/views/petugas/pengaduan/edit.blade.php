@extends('layouts.admin')

@section('content')
    <div class="page-header page-header-light">


        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('petugas.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <span class="breadcrumb-item active">Pengaduan</span>
                    <span class="breadcrumb-item active"> Pengaduan Verifikasi</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">


                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Pengaduan Masyarakat (Proses)</h5>
						<div class="header-elements">
							
	                	</div>
					</div>

					<div class="card-body">
					</div>

					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>No</th>
								<th>Nik</th>
								<th>Judul laporan</th>
								<th>waktu pengaduan</th>
								<th>Status</th>
								<th class="text-center">detail</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($pengaduanProses as $prss)
							<tr style="background-color: rgb(149, 171, 192)">
								<td>{{$loop->iteration}}</td>
								<td>{{$prss->nik}}</td>
								<td>{{$prss->judul_laporan}}</td>
								<td>{{$prss->created_at->diffForHumans()}}</td>
								<td><span class="badge bg-info text-light" style="font-size: 12px; " ><b>{{$prss->status}}</b></span></td>
								<td class="text-center">
                                    <a href="{{route('show.pengaduan',$prss->id)}}" class="text-dark"> <i class="icon-eye"> </i></a>
								</td>
							</tr>
							@empty
								
							@endforelse
						</tbody>
					</table>
				</div>

            </div>
        </div>
    </div>
@endsection
