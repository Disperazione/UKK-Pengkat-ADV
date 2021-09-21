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
				@if ($message=Session::get('pesan'))
				<div id="alertt">
					<div class="alert alert-success d-flex align-items-center" role="alert">
						<i class="icon-checkmark-circle text-dark"></i>
						<div class="text-dark">
						 {{$message}}
						</div>
					  </div>
				</div>
			@endif
				
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Pengaduan Masyarakat (Verifikasi)</h5>
						<div class="header-elements">
							
	                	</div>
					</div>

					<div class="card-body">
					</div>

					<table class="table datatable-basic" id="datatable">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Pengadu</th>
								<th>Judul laporan</th>
								<th>Waktu pengaduan</th>
								<th>Status</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							{{-- @foreach ($pengaduanProses as $prss)
							<tr  style="background-color: rgb(149, 171, 192);">
								<td>{{$loop->iteration}}</td>
								<td>{{$prss->Masyarakat->nama}}</td>
								<td>{{$prss->judul_laporan}}</td>
								<td>{{$prss->created_at->diffForHumans()}}</td>
								<td><span class="badge bg-info text-light" style="font-size: 12px; " ><b>{{$prss->status}}</b></span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="{{route('getEntri',$prss->id)}}" class="dropdown-item"><i class="icon-pencil7 text-primary"></i>Tanggapi</a>
												<a href="{{route('tolak.entri',$prss->id)}}" class="dropdown-item"><i class="icon-close2 text-danger"></i>Tolak</a>
												<a href="{{route('show.pengaduan',$prss->id)}}" class="dropdown-item"><i class="icon-eye"></i>Detail</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							
					
						
							@endforeach --}}
						</tbody>
					</table>
				</div>

            </div>
        </div>
    </div>
@endsection



@push('script')
    <script>
        $(document).ready(function() {
            var table = $('#datatable').DataTable({
                // dom: 't<"bottom"<"row"<"col-6"i><"col-6 mb-4"p>>>',
                destroy: true,
                searching: true,
                serverside: true,
                processing: true,
                serverSide: true,
                "responsive": true,
                "autoWidth": false,
                ajax: {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('data.pengaduan.ajax') }}",
                    type: "post",
                    data: function(data) {
                        data = '';
                        return data
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'id_masyarakat',
                        name: 'id_masyarakat.nama'
                    },
                    {
                        data: 'judul_laporan',
                        name: 'judul_laporan'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ],
            });
        });

    </script>
@endpush


