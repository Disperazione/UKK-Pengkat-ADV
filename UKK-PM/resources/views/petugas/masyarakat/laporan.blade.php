@extends('layouts.admin')

@section('content')
<div class="page-header page-header-light">


    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{ route('petugas.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                    Home</a>
                <span class="breadcrumb-item active">Laporan</span>
                <span class="breadcrumb-item active">Laporan Masyarakat</span>
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
                <a href="{{route('pdf.masyarakat')}}" class="btn btn-danger">Export PDF</a>

                <div class="card-header header-elements-inline">
                    <h4 class="card-title">Data Masyarakat</h4>

                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Telp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($masyarakat as $mass)
                            <tr>
                            <td><b>{{ $loop->iteration }}</b></td>
                            <td><b>{{ $mass->nik }}</b></td>
                            <td><b>{{ $mass->nama }}</b></td>
                            <td><b>{{ $mass->telp }}</b></td>
                           
                            </tr>


                        @endforeach

                    </tbody>
                </table>
                {{-- {{ $masyarakat->links() }} --}}
            </div>
</div>
@endsection
