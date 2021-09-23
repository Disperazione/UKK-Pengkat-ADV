@extends('layouts.auth')

@section('content')
    <!-- header buka -->
    <div class="container header">
        <div class="row">
            <div class="col-6">
                <!-- <p>Ada  </p> -->
                <div>
                    <h2>Udah demo tapi gak di Tanggepin <span style="color: yellow">?</span></h2>
                    <h3>Beberapa aparat melakukan Nepotisme <span style="color: yellow">?</span></h3>
                    <h3>Merasakan indikasi seperti Kolusi <span style="color: yellow">?</span></h3>
                    <h3>Melihat Korupsi <span style="color: yellow">?</span></h3>
                    <h4>dan berbagai masalah lainya,</h4>

                    <br>

                    <h1><b style="font-family: 'Acme', sans-serif; color:yellow">ngadU</b>!</h1>
                </div>
                <br>
                <a href="{{ route('proses.pengaduan') }}" class="btn btn-primary btn-lg me-3">Mari Ngadu!</a>
                <a href="{{ route('form.register') }}" class="btn btn-outline-primary btn-lg">Daftar</a>
            </div>

            <div class="col-6">
                <img src="{{ asset('7630.svg') }}" alt="" style="width: 600px">
            </div>
        </div>
    </div>
    <!-- header tutup -->

    <!-- hero buka -->
    <section id="about">
        <div class="container">
            <div class="row text-center" style="margin-top: 20%;">
                <h1>3 Keys Benefit</h1>
                <p>You can easily manage your business with a powerfull tools</p>
            </div>
            <div class="row d-flex justify-content-evenly" style="margin-top: 5%; margin-bottom: 15%;">
                <div class="col-3 text-center">
                    <img src="#" alt="" style="width: 70px;">
                    <h3>Easy to Operate</h3>
                    <p>This can easily help you to
                        grow up your business fast</p>
                </div>
                <div class="col-3 text-center">
                    <img src="#" alt="" style="width: 70px;">
                    <h3>Real-Time analytic</h3>
                    <p>With real-time analytics, you
                        can check data in real time</p>
                </div>
                <div class="col-3 text-center">
                    <img src="#" alt="" style="width: 70px;">
                    <h3>Very Full Secured</h3>
                    <p>With real-time analytics, we
                        will guarantee your data</p>
                </div>
            </div>
        </div>
    </section>
    <!-- hero tutup -->

    <!-- content buka -->
    <div style="position: absolute;left: 0;right: 0;width: 100%; background-color: #ffffff; height: 400px;" class=" badge h-30 mb-4">
        <div class="card-body  align-items-center">
            <h1 style="margin-top: 110px; font-family: 'Oswald', sans-serif; color: #ffc371">JUMLAH LAPORAN SEKARANG</h1>
            <h1  style="font-size: 100px; font-family: 'Staatliches', cursive; color: #ffc371" id="total" >{{$jumlah_pengaduan}}</h1>

        </div>
        <br>
    </div>
    <br><br>
    <br><br>

    <!-- content tutup -->

@endsection
