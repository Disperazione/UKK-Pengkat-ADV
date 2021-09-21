@extends('layouts.auth')

@section('content')

    <div class="container">
    </div>
    <br><br>

    <div class="container">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img style="max-width: 100%; max-height: 100%; border-radius: 8px; height: 250px; width: 400px;" src="{{asset('img/'.$detail->Pengaduan->foto)}}" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7"> 
                          <h5 class="card-title text-dark">{{$detail->Pengaduan->judul_laporan}} </h5>
                        </div>
                        <div class="col-4 ms-5">
                            <a href="{{route('tanggapi.pengaduan')}}" class="btn btn-dark ms-5 " > <i class="icon-exit text-white" style="transform: rotate(180deg);"> </i> Kembali</a>
                        </div>
                    </div>

                  <p class="card-text text-dark">{{$detail->Pengaduan->isi_laporan}} </p>
                  <p class="card-text text-dark"><small class="text-muted">{{$detail->Pengaduan->created_at->diffForHumans()}}</small></p>
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header ">
                 <h3 class="text-dark"> Tanggapan</h3>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="text-dark">{{$detail->tanggapan}}</p>
                    <div class="row">
                       
                            <footer class="blockquote-footer text-dark">Dari Petugas | {{$detail->Petugas->nama_petugas}} &nbsp; <br>Waktu di tanggapi :<cite title="Source Title " class="ms-2 text-dark">{{$detail->Pengaduan->updated_at->diffForHumans()}}</cite></footer>
                      
                      
                    </div>
                </blockquote>
                </div>
              </div>
          </div>
          
    </div>
    <br>
    <br>


@endsection
