@extends('layouts.auth')

@section('content')

    <div class="container">
    </div>
    <br><br>
    <br><br>

    <div class="container mt-5 " >
        <div class="card ">
            <div class="card-header text-dark text-center">
                History Pengaduan
            </div>
            <div class="card-body">
                @forelse ($history as $jejak)
                <div class="card mb-3 " style="max-width: 100%; border: none;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('img/'.$jejak->foto)}}" style="border-radius: 5px; width: 330px; height: 200px;" >
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        @if ($jejak->status === 'selesai')
                                        <span class="badge badge-success">di tanggapi</span>
                                        @else 
                                        <span class="badge badge-danger">di tolak</span>
                                        @endif
                                    </div>  
                                    <div class="col-3">

                                    </div>
                                    <div class="col-5">
                                        <small class="text-muted">
                                            di adukan  tanggal
                                            <i class="text-dark"> : {{$jejak->created_at->isoFormat('dddd, D MMMM Y')}} </i>
                                        </small>
                                    </div>
                                </div>
                                <h4 class="card-title text-dark fw-bold">{{$jejak->judul_laporan}}</h4>
                                <p class="card-text text-dark" style="overflow: auto; height: 110px;">{{$jejak->isi_laporan}}</p>
                                <div class="row">
            
                                    <div class="col-6 text-start">
                                        <p class="card-text text-dark">
                                            @if ($jejak->status === 'selesai')
                                            <small class="text-muted">di tanggapi pada : 
                                                <i class="text-dark">{{$jejak->updated_at->isoFormat('dddd, D MMMM Y')}} &nbsp; {{$jejak->updated_at->isoFormat('H:s')}}</i>
                                            </small>
                                            @else 
                                            <small class="text-muted">di tolak pada : 
                                                <i class="text-dark">{{$jejak->updated_at->isoFormat('dddd, D MMMM Y')}} &nbsp; {{$jejak->updated_at->isoFormat('H:s')}}</i>
                                            </small>
                                            @endif
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <hr style="border-color: rgb(0, 0, 0);">
                @empty

                <div class="text-center mt-4 mb-4">
                    <h4 class="text-dark">Belum ada History Tanggapan</h4>
                </div>
                    
                @endforelse


            </div>

                <div class="container">
    {{ $history->links() }}

                </div>
            <div class="card-footer text-muted text-start">
                <a href="{{ route('proses.pengaduan') }}" class="btn btn-dark ms-5 "> <i class="icon-exit text-white"
                        style="transform: rotate(180deg);"> </i> &nbsp; Kembali</a>
            </div>
        </div>

    </div>
    <br>
    <br>


@endsection
