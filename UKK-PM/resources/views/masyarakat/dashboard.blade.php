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
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
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
