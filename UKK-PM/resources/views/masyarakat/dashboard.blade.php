@extends('layouts.auth')
@section('style')
    <style>
        footer{
            display: none;
        }
        .col-md-9{
            margin-top: 200px;
            margin-left: 130px;
        }
        .slick-dots{
            display: none;
        }
    </style>
@endsection
@section('content')
@yield('mas-css')
<section class="hero-section overlay bg-cover" data-background="https://images.unsplash.com/photo-1546422904-90eab23c3d7e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80">
    <div class="container">
        <div class="hero-slider" style="margin-top: -300px;">
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-9">
                        <div class="container con-1">
                            <div class="container ms-5">
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <div id="myDIV" style="background-color: white; border-radius: 20px;">
                                            <div class="container">
                                                <div class="container content">
                                                    <div class="row">
                                                        <div class="accordion accordion-flush" id="accordionFlushExample">

                                                            <nav class="d-flex justify-content-center">
                                                                <div class="nav nav-tabs " id="nav-tab" role="tablist">
                                                                    <a href="{{route('proses.pengaduan')}}" class="nav-link {{$tab == 'proses' ? 'active' : ''}}" id="nav-proses-tab"
                                                                        aria-controls="nav-proses" aria-selected="true">Proses</a>
                                                                    <a href="{{route('tanggapi.pengaduan')}}" class="nav-link {{$tab == 'tanggapi' ? 'active' : ''}}" id="nav-tanggapi-tab"
                                                                        aria-controls="nav-tanggapi" aria-selected="false">Di tanggapi</a>
                                                                    <a href="{{route('tolak.pengaduan')}}" class="nav-link {{$tab == 'tolak' ? 'active' : ''}}" id="nav-tolak-tab"
                                                                        aria-controls="nav-tolak" aria-selected="false">Di Tolak</a>
                                                                </div>
                                                            </nav>

                                                            <div class="tab-content" id="nav-tabContent">
                                                                @yield('content_laporan')
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="container con-2">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        {{-- <div class="card-header">
                                        <span style="color: black">Pengaduan anda  </span>

                                        <span style="color: black; " class="d-flx justify-content-end" >Pengaduan anda  </span>

                                    </div> --}}






                                        <div>
                                            <div class="card-header bg-gray" style="margin-bottom: -5px;">
                                                <h6 class="card-title text-center pt-2">
                                                    Form Pengaduan
                                                </h6>
                                            </div>
                                            @if (session('pesan'))
                                                <div id="alertt">
                                                    <div class="alert alert-success d-flex align-items-center "
                                                        style="background-color: rgb(50, 255, 32);" role="alert">
                                                        <i class="icon-checkmark4" style="color: white;"></i> &nbsp;
                                                        <div class="text-dark" style="color: black;">
                                                            <b>
                                                                {{ session('pesan') }}

                                                            </b>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <form action="{{ route('post.pengaduan') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group-row">
                                                    <br>
                                                    <div class="col-12 text-center">
                                                        <img src="#" id="blah" style="heighwe have to defeat itt: 200px; width: 350px;" alt="">
                                                    </div>

                                                    <label class="col-form-label col-lg-12 text-dark">Upload Gambar</label>
                                                    <div class="col-lg-12" style="margin-bottom: -25px;">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input @error('foto') is-invalid @enderror"
                                                                id="imgInp" name="foto">
                                                            <label class="custom-file-label" for="customFile">Masukan Gambar </label>
                                                        </div>
                                                        @error('foto')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <br>
                                                <br>

                                                <div class="form-group-row">
                                                    <label class="col-form-label  col-lg-12 text-dark">Judul Laporan</label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control @error('judul_laporan') is-invalid @enderror"
                                                            name="judul_laporan">

                                                        @error('judul_laporan')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group-row">
                                                    <label class="col-form-label  col-lg-12 text-dark">Isi Laporan</label>
                                                    <div class="col-lg-12">
                                                        <textarea rows="3" cols="10" name="isi_laporan" style="height: 90px;"
                                                            class="form-control @error('isi_laporan') is-invalid @enderror "
                                                            placeholder="Masukan laporan"></textarea>

                                                        @error('isi_laporan')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                        <input type="hidden" name="id_masyarakat" value="{{ $user->id }}" id="">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group-row">
                                                    <div class="col-lg-12 mb-3">
                                                        <button class="btn btn-submit" style="background-color: #ffbc3b;"><b>Kirim
                                                                Pengaduan</b>
                                                            <i class="icon-quill4"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection



@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{-- <script>
        $(document).ready(function() {

            $(".btn-submit").click(function(e) {

                e.preventDefault();

                // var data = $(this).serialize();
                var foto = $("input[name=foto]").val();
                var judul_laporan = $("input[name=judul_laporan]").val();
                var id_masyarakat = $("input[name=id_masyarakat]").val();
                console.log(foto,judul_laporan,id_masyarakat);
                var url = "{{ route('post.pengaduan') }}";
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    url: url,
                    type: 'POST',
                    dataType: 'json',
                    data:{
                        foto:foto,
                        judul_laporan:judul_laporan,
                        isi_laporan:isi_laporan,
                        id_masyarakat:id_masyarakat,
                    },
                    success: function(response) {
                        console.log
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: 'good!',
                            });
                        }

                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
            });


        });


    </script> --}}
@endpush
