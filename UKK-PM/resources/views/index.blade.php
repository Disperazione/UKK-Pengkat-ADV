@extends('layouts.auth')
@section('style')
<style>
.slick-dots{
    display: none;
}
</style>

@endsection
@section('content')
    <!-- hero slider -->
    <section class="hero-section overlay bg-cover" data-background="https://images.unsplash.com/photo-1546422904-90eab23c3d7e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80">
        <div class="container">
            <div class="hero-slider" style="margin-top: -100px;">
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-9">
                            <h2 class="text-white" data-animation-out="fadeOutRight" data-delay-out="100"
                                data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">
                                Udah demo tapi gak di Tanggepin <span style="color: yellow">?</span>
                            </h2>
                            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="100"
                                data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">
                                <h3 style="color: white;">Beberapa aparat melakukan Nepotisme <span style="color: yellow">?</span></h3>
                                <h3 style="color: white;">Merasakan indikasi seperti Kolusi <span style="color: yellow">?</span></h3>
                                <h3 style="color: white;">Melihat Korupsi <span style="color: yellow">?</span></h3>
                                <h3 style="color: white;">dan berbagai masalah lainya,</h3>
                            </p>
                            <br>
                            <h1 style="color: white;"><b style="font-family: 'Acme', sans-serif; color:yellow">ngadU</b>!</h1>
                            <div style="margin-top: 80px;">
                                <a href="{{ route('proses.pengaduan') }}" class="btn btn-primary btn-sm mr-3">Mari Ngadu!</a>
                                <a href="{{ route('form.register') }}" class="btn btn-primary btn-sm">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about us -->
    <section class="section" >
        <div class="container">
            <!-- hero buka -->
                <section id="about">
                    <div class="container">
                        <div class="row text-center" style="margin-top: 0%;">
                            <h1>3  Manfaat</h1>
                            <p>Manfaat yang kamu dapatkan melakukan pengaduan </p>
                        </div>
                        <div class="row d-flex justify-content-evenly" style="margin-top: 5%; margin-bottom: 15%;">
                            <div class="col-3 text-center">
                                <img src="#" alt="" style="width: 70px;">
                                <h3>Menstabilkan Permasalahan</h3>
                                <p> Setiap daerah akan semakin stabil jika masyarakat mengadui masalah di daerah tersebut</p>
                            </div>
                            <div class="col-3 text-center">
                                <img src="#" alt="" style="width: 70px;">
                                <h3>Positif dalam berpendapat</h3>
                                <p>Berpositif dalam menindak masalah, tidak dengan demo yang malah bertambah masalah</p>
                            </div>
                            <div class="col-3 text-center">
                                <img src="#" alt="" style="width: 70px;">
                                <h3>Di dukung pemerintah</h3>
                                <p>Web APP ini akan langsung di liat oleh jajaran pemerintahan dan dikung oleh pemerintahan </p>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- hero tutup -->

            <div class="row align-items-center">
                <div class="col-md-5 order-2 order-md-1">
                    <h2 class="section-title text-center">Jumlah Laporan Sekarang</h2>
                    <h2 class="section-title text-center" id="total" >{{$jumlah_pengaduan}}</h2>
                </div>
            {{-- {{dd($artikel)}} --}}
                <div class="col-md-7 order-1 order-md-2 mb-4 mb-md-0" style="margin-top: 50px; padding-left: 90px; height: 400px;">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                 
                        <div class="carousel-indicators">
                            @for ($i = 0; $i < count($artikel); $i++)
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to={{$i}} class="{{$i == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{$i}}"></button>
                            @endfor
                         {{-- <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button> --}}
                         {{-- <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
                        </div>
                        <div class="carousel-inner">
                            {{-- <div class="carousel-item active" data-bs-interval="3000">
                                <img style="height: 300px;" src="https://images.unsplash.com/photo-1560177112-fbfd5fde9566?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img style="height: 300px;" src="https://images.unsplash.com/photo-1529243856184-fd5465488984?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=892&q=80" class="d-block w-100" alt="...">
                            </div> --}}
                            @for ($i = 0; $i < count($artikel); $i++)
                            <div class="carousel-item {{$i == 0 ? 'active' : '' }}"  data-bs-interval="3000">
                                <a href="{{$artikel[$i]['url']}}">
                                    <img style="height: 300px;" src="{{$artikel[$i]['urlToImage']}}" class="d-block w-100" alt="...">
                                </a>
                                </div>
                            @endfor
                        </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                            </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
