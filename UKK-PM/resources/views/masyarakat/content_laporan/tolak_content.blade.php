@extends('masyarakat.dashboard')
@section('mas-css')
    <style>
        .con-1{
            margin-left: -160px;
        }
        #myDIV{
            width: 1010px;
        }
    </style>
@endsection
@section('content_laporan')
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
                aria-labelledby="flush-heading{{ $loop->iteration }}" data-bs-parent="#accordionFlushExample">
                <div class="card mb-3" style="max-width: 100%; border: none;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('img/' . $tol->foto) }}" style="width: 200px; height: 120px;" alt="...">
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

@endsection
