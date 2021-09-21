<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Krona+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Fjalla+One&family=Krona+One&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />



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
    <!-- /theme JS files -->

    <title>Hello, world!</title>

</head>

<body>
    <div class="container-fluid" style="background-color: #1d1d44;">
        <!-- navbar buka -->
        @include('layouts.masyarakat_partial.navbar')
        <!-- navbar tutup -->
        <div class="container">
            @yield('content')
        </div>

        <!-- buka -->
        <footer>
            <div class="container">
                <div class="row" style="margin-top: 15%; line-height: 50px; margin-bottom: 10%;">
                    <div class="col-3">
                        <ul style="list-style-type:none; ">
                            <li>
                                <img src="#" alt="">
                            </li>
                            <li>
                                <a href="">Home</a>
                            </li>
                            <li>
                                <a href="">About</a>
                            </li>
                            <li>
                                <a href="">Features</a>
                            </li>
                            <li>
                                <a href="">Pricing</a>
                            </li>
                            <li>
                                <a href="">Testimonial</a>
                            </li>
                            <li>
                                <a href="">Help</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul style="list-style-type:none;">
                            <li>
                                <h2>Product</h2>
                            </li>
                            <li>
                                <a href="">Real Time Analytic</a>
                            </li>
                            <li>
                                <a href="">Easy to Operate</a>
                            </li>
                            <li>
                                <a href="">Full Secured</a>
                            </li>
                            <li>
                                <a href="">Analytic Tool</a>
                            </li>
                            <li>
                                <a href="">Story</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul style="list-style-type: none;">
                            <li>
                                <h2>Company</h2>
                            </li>
                            <li>
                                <a href="">Contact Us</a>
                            </li>
                            <li>
                                <a href="">Blog</a>
                            </li>
                            <li>
                                <a href="">Culture</a>
                            </li>
                            <li>
                                <a href="">Security</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul style="list-style-type: none;">
                            <li>
                                <h2>Support</h2>
                            </li>
                            <li>
                                <a href="">Getting Started</a>
                            </li>
                            <li>
                                <a href="">Help Center</a>
                            </li>
                            <li>
                                <a href="">Server Status</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">

                    </div>
                    <div class="col-6 d-flex justify-content-evenly">
                        <a href="#" class="me-4">Terms of Service</a>
                        <span class="me-4">|</span>
                        <a href="#" class="me-4">Privacy Policy</a>
                        <span class="me-4">|</span>
                        <a href="$" class="me-4">Licenses</a>
                    </div>
                    <div class="col-3">
                        <p>Copyright © 2021 Analystic Max</p>
                    </div>
                </div>

            </div>
        </footer>
        <!-- tutup -->
    </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
    <script src="{{ asset('global_assets/') }}/js/demo_pages/form_inputs.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        $(function() {
            var duration = 3000; // 4 seconds
            setTimeout(function() {
                $('#alertt').hide().fadeout();
            }, duration);
        });

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

</body>

</html>
