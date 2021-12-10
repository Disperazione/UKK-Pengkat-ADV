@extends('layouts.auth')
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
        
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.css" />
    <style>
        .newsletter {
            display: none;
        }

        .col-md-9 {
            margin-top: 200px;
            margin-left: 130px;
        }

        .slick-dots {
            display: none;
        }

        #map {
            margin: 10px;
            height: 400px;
            width: 800px;
            border-radius: 10px;
        }

        
    /* Input field */
.select2-selection__rendered { color:red; }
    
    /* Around the search field */
    .select2-search { color: rgb(208, 23, 23); background-color: rgb(255, 255, 255); }
        
    /* Search field */
    .select2-search input { border-color: rgb(47, 52, 104); color: black; background-color: rgb(255, 255, 255); }
    /* Each result */
    .select2-results { color: rgb(208, 23, 23);  }
        
    /* Higlighted (hover) result */
    .select2-results__option--highlighted {  }
        
    /* Selected option */
    .select2-results { color: rgb(208, 23, 23); background-color: rgb(47, 52, 104); }
    </style>
@endsection

@section('content')
    {{-- @yield('mas-css') --}}
    <section class="hero-section  bg-cover "
        data-background="https://images.unsplash.com/photo-1546422904-90eab23c3d7e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80">


        <div class="container justify-content-center bg-gray rounded">
            <div >
                <div class="card-header " style="margin-bottom: -5px;">
                    <h6 class="card-title text-center">
                        Form Pengaduan
                    </h6>
                </div>
                <form action="{{ route('post.pengaduan') }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    
                    <center>
                        <div class="form-group-row  ">
                            <label class="col-form-label items-center m-2  col-lg-12 text-dark">Maps</label>
                            <div id="map" class="leaflet-container  col-lg-12 ">
    
                            </div>
                        </div>
                    </center>
                    <div class="form-group container row ">
                        <label class="col-form-label items-center m-2  col-lg-6 text-dark">Lokasi Kejadian</label>
                        <div class="col-lg-6" >
                            <div class="row">
                                <div class="cold-12 ">
                                    <label class="col-form-label items-center m-2  col-lg-12  text-dark">Provinsi </label>
                                    <select  class="form-control bg-white @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi">
                                        <option value="" selected>--Pilih Provinsi--</option>
                                        @foreach ($provinsi as $item)
                                           <option class="text-dark" value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('provinsi')
                                        <span  class="m-1 text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="cold-12">
                                    <label class="col-form-label items-center m-2  col-lg-12  text-dark">Kabupaten/Kota </label>
                                    <select  class="form-control bg-white @error('kabupaten') is-invalid @enderror " name="kabupaten" id="kabupaten">
                                       
                                    </select>
                                    @error('kabupaten')
                                    <span  class="m-1 text-danger">{{ $message }}</span>
                                @enderror

                                </div>
                                <div class="cold-12">
                                    <label class="col-form-label items-center m-2  col-lg-12  text-dark">Kecamatan </label>
                                    <select  class="form-control bg-white @error('kecamatan') is-invalid @enderror " name="kecamatan" id="kecamatan">
                                       
                                    </select>
                                    @error('kecamatan')
                                    <span  class="m-1 text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="cold-12">
                                    <label class="col-form-label items-center m-2  col-lg-12  text-dark">Kelurahan </label>
                                    <select  class="form-control bg-white @error('kelurahan') is-invalid @enderror " name="kelurahan" id="kelurahan">
                                       
                                    </select>
                                    @error('kelurahan')
                                    <span  class="m-1 text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6" >
                           <div class="row">
                            <div class="col-12">
                                <label class="col-form-label items-center m-2  col-lg-12 text-dark">Alamat / Nama Jalan</label>
                                <textarea rows="3" cols="10"  id="address" name="address" style="height: 90px;" class="form-control @error('address') is-invalid @enderror"
                                placeholder="Masukan laporan"></textarea>
                                @error('address')
                                <span  class="m-1 text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="col-12">
                                <label class="col-form-label items-center m-2  col-lg-12 text-dark">Latitude</label>
                                <input class="form-control @error('latitude') is-invalid @enderror" type="text" name="latitude" id="latitude"  readonly>
                                @error('latitude')
                                <span  class="m-1 text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="col-12">
                                <label class="col-form-label items-center m-2  col-lg-12 text-dark">Longitude</label>
                                <input class="form-control @error('longitude') is-invalid @enderror" type="text" name="longitude" id="longitude"  readonly>
                                @error('longitude')
                                <span  class="m-1 text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                           </div>
                        </div>
                         
                    </div>
                   
                   
                   
                   
    
                   
                   
                    <div class="form-group-row">
                        <br>
                        <div class="col-12 text-center">
                            <img src="#" id="blah" style="heighwe have to defeat itt: 200px; width: 350px;" alt="">
                        </div>
                        <label class="col-form-label col-lg-6 text-dark">Upload Gambar</label>
                        <div class="col-lg-12" >
                            <div class="custom-file">
                                <input type="file" class="@error('foto') is-invalid @enderror custom-file-input" id="imgInp" name="foto">
                                <label class="custom-file-label" for="customFile">Masukan Gambar </label>
                            </div>
                            @error('foto')
                            <span  class="m-1 text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
             
                    <div class="form-group-row">
                        <label class="col-form-label  col-lg-12 text-dark">Judul Laporan</label>
                        <div class="col-lg-12">
                            <input type="text" style="height: 40px;" class="form-control @error('judul_laporan') is-invalid @enderror" name="judul_laporan" id="judul_laporan">
                        </div>
                        @error('judul_laporan')
                        <span  class="m-1 text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-group-row">
                        <label class="col-form-label  col-lg-12 text-dark">Isi Laporan</label>
                        <div class="col-lg-12">
                            <textarea rows="3" cols="10" name="isi_laporan" style="height: 90px;" class="form-control @error('isi_laporan') is-invalid @enderror"
                                placeholder="Masukan laporan"></textarea>
                        </div>
                        @error('isi_laporan')
                        <span  class="m-1 text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <br>
                    <div class="form-group-row">
                        <div class="col-lg-12">
                            <button class="btn " style="background-color: rgb(71, 95, 175);"><b>Kirim
                                    Pengaduan</b> <i class="icon-quill4"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-proses-tab" data-toggle="pill" href="#pills-proses" role="tab"
                        aria-controls="pills-proses" aria-selected="true">Proses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tanggapi-tab" data-toggle="pill" href="#pills-tanggapi" role="tab"
                        aria-controls="pills-tanggapi" aria-selected="false">Tanggapi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tolak-tab" data-toggle="pill" href="#pills-tolak" role="tab"
                        aria-controls="pills-tolak" aria-selected="false">Tolak</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-proses" role="tabpanel" aria-labelledby="pills-proses-tab">
                    @forelse ($pengaduan as $pengadu)
                        <div class="accordion-item " style="border-radius: 15px;">
                            <h2 class="accordion-header" id="flush-heading{{ $loop->iteration }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse{{ $loop->iteration }}" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <div class="col-5 text-dark">
                                        {{ $pengadu->judul_laporan }}

                                    </div>
                                    <div class="col-5 ">
                                        <span
                                            class="badge bg-primary">{{ $pengadu->status === 'proses' ? 'proses' : '' }}</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="flush-collapse{{ $loop->iteration }}" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading{{ $loop->iteration }}"
                                data-bs-parent="#accordionFlushExample">
                                <div class="card mb-3" style="max-width: 100%; border: none;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('img/' . $pengadu->foto) }}"
                                                style="width: 200px; height: 120px;" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text" style=" width: 400px;
                                                          height: 110px;
                                                          overflow: auto;
                                                          color: black;">
                                                    {{ $pengadu->isi_laporan }}
                                                </p>
                                                <label for=""><span class="text-dark">Baru di
                                                        pengadui :</span></label>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p class="card-text"><small
                                                                class="text-muted">{{ $pengadu->updated_at->diffForHumans() }}</small>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center mt-4 mb-4">
                            <h4 class="text-dark">Anda belum melakukan pengaduan</h4>
                        </div>

                    @endforelse
                    {{ $pengaduan->links() }}

                </div>
                <div class="tab-pane fade" id="pills-tanggapi" role="tabpanel" aria-labelledby="pills-tanggapi-tab">


                    @forelse ($tanggapan as $tanggap)
                        <div class="accordion-item " style="border-radius: 15px;">
                            <h2 class="accordion-header" id="flush-heading{{ $loop->iteration }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse{{ $loop->iteration }}" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <div class="col-5 text-dark">
                                        {{ $tanggap->judul_laporan }}

                                    </div>
                                    <div class="col-5 ">
                                        <span
                                            class="badge bg-success">{{ $tanggap->status === 'selesai' ? 'di tanggapi' : '' }}</span>

                                    </div>
                                </button>
                            </h2>
                            <div id="flush-collapse{{ $loop->iteration }}" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading{{ $loop->iteration }}"
                                data-bs-parent="#accordionFlushExample">
                                <div class="card mb-3" style="max-width: 100%; border: none;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('img/' . $tanggap->foto) }}"
                                                style="width: 200px; height: 120px;" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text" style=" width: 400px;
                                              height: 110px;
                                              overflow: auto;
                                              color: black;">
                                                    {{ $tanggap->isi_laporan }}
                                                </p>
                                                <label for=""><span class="text-dark">Baru di
                                                        tanggapi :</span></label>
                                                <div class="row">
                                                    <div class="col-5">
                                                        <p class="card-text"><small
                                                                class="text-muted">{{ $tanggap->updated_at->diffForHumans() }}</small>
                                                        </p>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="{{ route('tanggapan', $tanggap->id) }}"
                                                            class="btn btn-success">Lihat
                                                            tanggapan <i class="icon-eye text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center mt-4 mb-4">
                            <h4 class="text-dark">Belum ada yang di Tanggapi</h4>
                        </div>

                    @endforelse
                    {{ $tanggapan->links() }}
                </div>
                <div class="tab-pane fade" id="pills-tolak" role="tabpanel" aria-labelledby="pills-tolak-tab">
                    {{-- tolak --}}
                    @forelse ($tolak as $tol)
                        <div class="accordion-item " style="border-radius: 15px;">
                            <h2 class="accordion-header" id="flush-heading{{ $loop->iteration }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse{{ $loop->iteration }}" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <div class="col-5 text-dark">
                                        {{ $tol->judul_laporan }}

                                    </div>
                                    <div class="col-5 ">
                                        <span class="badge bg-danger">{{ $tol->status == '0' ? 'di tolak' : '' }}</span>

                                    </div>
                                </button>
                            </h2>
                            <div id="flush-collapse{{ $loop->iteration }}" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading{{ $loop->iteration }}"
                                data-bs-parent="#accordionFlushExample">
                                <div class="card mb-3" style="max-width: 100%; border: none;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('img/' . $tol->foto) }}"
                                                style="width: 200px; height: 120px;" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text" style=" width: 600px;
                                            height: 110px;
                                            overflow: auto;
                                            color: black;">
                                                    {{ $tol->isi_laporan }}
                                                </p>
                                                <label for=""><span class="text-dark"> di Tolak
                                                        :</span></label>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p class="card-text"><small
                                                                class="text-muted">{{ $tol->updated_at->diffForHumans() }}</small>
                                                        </p>
                                                    </div>
                                                    <div class="col-4">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center mt-4 mb-4">
                            <h4 class="text-dark">Belum ada yang di Tolak</h4>
                        </div>

                    @endforelse
                    {{ $tolak->links() }}
                </div>
            </div>
        </div>
    </section>


@endsection



@push('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    
    {{-- //maps leaflet --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/bundle.min.js"></script>
    {{--  --}}


    <script>
        var map = L.map('map').setView([{{ config('leaflet.map_center_latitude') }},
            {{ config('leaflet.map_center_longitude') }}
        ], {{ config('leaflet.zoom_level') }});

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        const provider = new window.GeoSearch.OpenStreetMapProvider();
        const search = new GeoSearch.GeoSearchControl({
            provider: provider,
            style: 'bar',
            updateMap: true,
            autoClose: true,
        }); 
        // var marker = L.marker([-6.384070, 106.871480]).addTo(map);
        var theMarker;

        map.on('click', function(e) {
            let latitude = e.latlng.lat.toString().substring(0, 15);
            let longitude = e.latlng.lng.toString().substring(0, 15);

            if (theMarker != undefined) {
                map.removeLayer(theMarker);
            };
        $('#latitude').val(latitude)            
        $('#longitude').val(longitude)        

            var popupContent = "Your location : " + latitude + ", " + longitude + ".";
            popupContent += '<br><a href="www.google.com?latitude=' + latitude + '&longitude=' + longitude +
                '">Add new outlet here</a>';

            theMarker = L.marker([latitude, longitude]).addTo(map);
            theMarker.bindPopup(popupContent)
                .openPopup();
        });


;





        $('select[name="provinsi"]').on('change', function() {
            var provinsiID = $(this).val();
            if(provinsiID) {
                $.ajax({
                    url: 'http://www.emsifa.com/api-wilayah-indonesia/api/regencies/'+provinsiID+'.json',
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        
                        $('select[name="kabupaten"]').empty();
                        $.each(data, function(key, value) {
                            // console.log(value);
                            $('select[name="kabupaten"]').append('<option class="text-dark" value="'+ value.id +'">'+ value.name +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="kabupaten"]').empty();
            }
        });

        $('select[name="kabupaten"]').on('change', function() {
            var kabupatenID = $(this).val();
            if(kabupatenID) {
                $.ajax({
                    url: 'http://www.emsifa.com/api-wilayah-indonesia/api/districts/'+kabupatenID+'.json',
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        
                        $('select[name="kecamatan"]').empty();
                        $.each(data, function(key, value) {
                            // console.log(value);
                            $('select[name="kecamatan"]').append('<option class="text-dark" value="'+ value.id +'">'+ value.name +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="kecamatan"]').empty();
            }
        });

        $('select[name="kecamatan"]').on('change', function() {
            var kecamatanID = $(this).val();
            if(kecamatanID) {
                $.ajax({
                    url: 'http://www.emsifa.com/api-wilayah-indonesia/api/villages/'+kecamatanID+'.json',
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="kelurahan"]').empty();
                        $.each(data, function(key, value) {
                            // console.log(value);
                            $('select[name="kelurahan"]').append('<option class="text-dark" value="'+ value.id +'">'+ value.name +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="kelurahan"]').empty();
            }
        });
        




















    </script>






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
