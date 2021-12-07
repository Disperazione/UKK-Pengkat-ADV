<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Krona+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Fjalla+One&family=Krona+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />



    <!-- Styles -->
    <link href="{{ asset('global_assets/') }}/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/masyarakat.css') }}" rel="stylesheet">

    <!-- font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">

    {{-- new css --}}
        <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/bootstrap/bootstrap.min.css')}}">
        <!-- slick slider -->
        <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/slick/slick.css')}}">
        <!-- themefy-icon -->
        <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/themify-icons/themify-icons.css')}}">
        <!-- animation css -->
        <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/animate/animate.css')}}">
        <!-- aos -->
        <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/aos/aos.css')}}">
        <!-- venobox popup -->
        <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/venobox/venobox.css')}}">
        <!-- Main Stylesheet -->
        <link href="{{ asset('/themes/educenter/css/style.css')}}" rel="stylesheet">
        <!--Favicon-->
        {{-- <link rel="shortcut icon" href="{{ asset('/themes/educenter/images/favicon.png')}}" type="image/x-icon"> --}}
        {{-- <link rel="icon" href="{{ asset('/themes/educenter/images/favicon.png')}}" type="image/x-icon"> --}}
        <link rel="icon" type="image/png" href="{{ asset('Login_v17/images/icons/favicon.ico') }}">

    {{-- new css --}}
        @yield('style')

    <title>Mari Ngadu! | Home</title>
</head>

<body>
    @include('layouts.masyarakat_partial.navbar')
    @yield('content')
    @include('layouts.masyarakat_partial.footer')

    {{-- axios --}}
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    {{-- new js --}}
        <!-- jQuery -->
        <script src="{{ asset('/themes/educenter/plugins/jQuery/jquery.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('/themes/educenter/plugins/bootstrap/bootstrap.min.js')}}"></script>
        <!-- slick slider -->
        <script src="{{ asset('/themes/educenter/plugins/slick/slick.min.js')}}"></script>
        <!-- aos -->
        <script src="{{ asset('/themes/educenter/plugins/aos/aos.js')}}"></script>
        <!-- venobox popup -->
        <script src="{{ asset('/themes/educenter/plugins/venobox/venobox.min.js')}}"></script>
        <!-- filter -->
        <script src="{{ asset('/themes/educenter/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
        <!-- google map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
        <script src="{{ asset('/themes/educenter/plugins/google-map/gmap.js')}}"></script>
        <!-- Main Script -->
        <script src="{{ asset('/themes/educenter/js/script.js')}}"></script>
    {{-- new js --}}

    <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
        <script src="{{ asset('global_assets/') }}/js/demo_pages/form_inputs.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
{{-- swalert --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('assets/js/api.js')}}"></script>
        <script>



            // $(function() {
            //     var duration = 3000; // 4 seconds
            //     setTimeout(function() {
            //         $('#alertt').hide().fadeout();
            //     }, duration);
            // });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }

            $("#imgInp").change(function() {
                readURL(this);
            });

        </script>

        <script>
            function myFunction() {
                var x = document.getElementById("myDIV");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
                }

                $('#total').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 2200,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        </script>

        @stack('script')
        @yield('script')
</body>
</html>
