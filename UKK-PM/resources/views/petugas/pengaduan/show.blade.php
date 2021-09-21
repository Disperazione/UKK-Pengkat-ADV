@extends('layouts.admin')

@section('content')
    <div class="page-header page-header-light">


        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('petugas.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <span class="breadcrumb-item active">Pengaduan</span>
                    <span class="breadcrumb-item active"> Pengaduan Detail</span>
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
            <div class="card" style="">
                <img style="max-width: 100%; max-height: 50%; width: 600px;" class="card-img-top img-fluid"
                    src="{{asset('img/'.$showPengaduan->foto)}}" alt="">


                <div class="card-body  text-start">
                    <div class="row">
                        <div class="col-8">
                            <div style="font-weight: bolder;"><i class="fas fa-user"></i> &emsp; {{$showPengaduan->Masyarakat->nama}} </div>
                            <div style="font-weight: bolder;"><i class="fas fa-id-card"></i> &emsp;{{$showPengaduan->Masyarakat->nik}}   </div>
                            <div style="font-weight: bolder;"><i class="fas fa-phone"></i> &emsp;{{$showPengaduan->Masyarakat->telp}}   </div>
                        </div>
                        <div class="col-4">
                            <div style="font-weight: bolder;"><i class="fas fa-calendar-day"></i> &emsp;{{$showPengaduan->tgl_pengaduan}}</div>
                            <div style="font-weight: bolder;"><i class="fas fa-clock"></i> &emsp;{{$showPengaduan->created_at->diffForHumans()}}   </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-8">
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <div class="col-4">
                        </div>
                    </div> --}}
                    <h3 class="font-weight-semibold mt-2 mb-0 text-center">{{$showPengaduan->judul_laporan}}</h3>
                    <div class="card-body text-center" style="width:  550px; ">
                        <p class="">
                          {{$showPengaduan->isi_laporan}}
                    </div>

                    <a href="{{route('data.pengaduan')}}" class="btn btn-dark" style="margin-top: 50px;" ><i
                        class="icon-exit2" style="transform: rotate(180deg); "></i> &nbsp;Kembali</a>
                </div>
                
            </div>
        </div>
    </div>
@endsection
