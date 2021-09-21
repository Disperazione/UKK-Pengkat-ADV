@extends('layouts.admin')

@section('content')
    <div class="page-header page-header-light">


        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('petugas.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <span class="breadcrumb-item active">Laporan</span>
                    <span class="breadcrumb-item active">Laporan Pengaduan</span>
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
    <div class="row justify-content-center">



        <div class="table-responsive col-10">
            <a href="{{ route('pdf.pengaduan') }}" class="btn btn-danger">Export PDF</a>
            <div class="card-header header-elements-inline">
                <h4 class="card-title">Data Pengaduan</h4>

            </div>

            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Dari</th>
                        <th>Judul pengaduan</th>
                        <th>Tanggal dibuat</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengaduan as $pengadu)
                        <tr class="text-dark text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pengadu->Masyarakat->nama }}</td>
                            <td>{{ $pengadu->judul_laporan }}</td>
                            <td>{{ $pengadu->tgl_pengaduan }}</td>
                            @if ($pengadu->status === 'selesai')
                                <td><span class="badge badge-success">di tanggapi</span></td>
                            @elseif($pengadu->status === '0')
                                <td><span class="badge badge-danger">di tolak</span></td>
                            @endif
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- {{ $masyarakat->links() }} --}}
        </div>
    </div>

@endsection
