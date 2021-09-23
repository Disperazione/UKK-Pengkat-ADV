<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        #footer {
        background: #ff5f6d;
        background: -webkit-linear-gradient(to right, #ff5f6d, #ffc371);
        background: linear-gradient(to right, #ff5f6d, #ffc371);
        min-height: 100vh;
        margin-top: 22%;
        }

        #button-addon1 {
        color: #ffc371;
        }

        i {
        color: #ffc371;
        }

        .form-control::placeholder {
        font-size: 0.95rem;
        color: #aaa;
        font-style: italic;
        }

        .form-control.shadow-0:focus {
        box-shadow: none;
        }
    </style>

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
    <!-- /theme JS files -->

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid" style="background: linear-gradient(to right, #ff5f6d, #ffc371);">
        <!-- navbar buka -->
        @include('layouts.masyarakat_partial.navbar')
        <!-- navbar tutup -->
        <div class="container">
            @yield('content')
        </div>



        <!-- buka -->
        <footer>
            {{-- <div class="container">
                <div class="row" style="margin-top: 35%; line-height: 50px; margin-bottom: 10%;">
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

            </div> --}}
        </footer>
        <!-- tutup -->
    </div>

    <div class="d-flex flex-column" id="footer">
        <!-- For demo purpose -->
        <div class="container-fluid flex-grow-1 flex-shrink-0">
          <div class="px-lg-5">
            <div class="row py-5">
              <div class="col-lg-12 mx-auto text-white text-center">
                <h1 class="display-4">Bootstrap 4 footer</h1>
                <p class="lead mb-0">Build a nicely styled light footer using Bootstrap 4.</p>
                <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white">
                              <u>Bootstrapious</u></a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- End -->


        <!-- Footer -->
        <footer class="bg-white">
          <div class="container py-5">
            <div class="row py-4">
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="img/logo.png" alt="" width="180" class="mb-3">
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <ul class="list-inline mt-4">
                  <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Shop</h6>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><a href="#" class="text-muted">For Women</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">For Men</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">Stores</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">Our Blog</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><a href="#" class="text-muted">Login</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">Register</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">Wishlist</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">Our Products</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-6 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
                <p class="text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
                <div class="p-1 rounded border">
                  <div class="input-group">
                    <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                    <div class="input-group-append">
                      <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Copyrights -->
          <div class="bg-light py-4">
            <div class="container text-center">
              <p class="text-muted mb-0 py-2">© 2019 Bootstrapious All rights reserved.</p>
            </div>
          </div>
        </footer>
        <!-- End -->
    </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="{{ asset('global_assets/') }}/js/demo_pages/form_inputs.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>



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
