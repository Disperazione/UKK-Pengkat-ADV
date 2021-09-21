@extends('layouts.admin')

@section('content')
    <div class="page-header page-header-light">


        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('petugas.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <span class="breadcrumb-item active">Pengaduan</span>
                    <span class="breadcrumb-item active"> Pengaduan tanggapan</span>
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

                <div class="card" style="width: 100%;">
                    <img src="{{ asset('img/' . $showPengaduan->foto) }}" style="height: 360px;" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <label for=""><b>Judul Pengaduan :</b></label>
                            </div>
                            <div class="col-10">
                                <h5 class="card-title">{{ $showPengaduan->judul_laporan }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for=""><b>Isi Pengaduan :</b></label>
                            </div>
                            <div class="col-10">
                                <textarea style="border: none; width: 500px; height: 200px;"
                                    disabled>{{ $showPengaduan->isi_laporan }}</textarea>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="card text-center">
                    <form action="{{ route('kirim.tanggapan') }}" method="post">
                        @csrf
                        <h5 class="card-header">Tanggapi</h5>
                        <div class="card-body ">
                            <textarea id="textarea" maxlength="350"
                                class="form-control  @error('tanggapan') is-invalid @enderror" name="tanggapan"
                                placeholder="Isi tanggapan"
                                style="width: 100%  ; height: 200px; font-size: 15px;"></textarea>
                            <div class="row" style="height: 20px;">
                                <div class="col-9 text-end">
                                    @error('tanggapan')
                                        <span class="ml-5 text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-3">
                                    <span class="ml-5 text-danger" id="count"> </span>

                                </div>
                            </div>

                            <input type="hidden" hidden name="id_pengaduan" value="{{ $showPengaduan->id }}">
                            <input type="hidden" hidden name="id_petugas" value="{{ $petugas->id }}">

                        </div>
                        <br>
                        <div class="container mx-5">
                            <div class="mx-5">
                                <div class="row text-center mx-5 ">
                                    <div class="col-1 mx-5">
                                        <a href="{{ route('data.pengaduan') }}" class="btn btn-dark">Kembali</a>
                                    </div>
                                    <div class="col-4 mx-5">
                                        <button href="" class="btn btn-warning"> Kirim Tanggapan &nbsp; <i
                                                class="icon-pencil "></i> </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection


<script>


</script>
