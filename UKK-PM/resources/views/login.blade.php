{{-- @extends('layouts.auth')
@section('style')
@endsection
@section('content')
<section id="login">
        <div class="container">
            <div class="card m-auto headcard text-center shadow">
                <h1 class="fw-bold  fs-5" style="color: yellow">LOGIN</h1>
            </div>
            <div class="card formcard shadow m-auto ">
                <div class="mt-4">
                    <div style="height: 20px; padding-top:18px;" >
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            <span style="color: black;">{{ session()->get('success') }}</span>
                        </div>
                        @endif
                        @if (session()->has('error'))
                        <div class="alert alert-danger">
                            <span style="color: black;">{{ session()->get('error') }}</span>
                        </div>
                        @endif

                    </div>
                    <form  method="POST" action="{{ route('kirimlogin') }}"  class="mt-5">
                        @csrf
                        <div class="input-group pb-3 m-auto" style="width: 330px; ">
                            <span class="input-group-text pe-3 ps-3 fs-6"><i class="fas fa-user"></i></span>
                            <input id="username" type="username" class="form-control fs-5 shadow @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group pb-3 m-auto " style="width: 330px; ">
                            <span class="input-group-text pe-3 ps-3 fs-6"style=" "><i class="fas fa-lock"></i></span>
                            <input id="password" type="password" class="form-control fs-5 shadow @error('password') is-invalid @enderror" placeholder="Password"name="password" required autocomplete="current-password" >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 form-check ms-5">
                            <input type="checkbox" class="form-check-input" style="border: 2px solid #8E2DE2" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" style="color: #8E2DE2" for="exampleCheck1">Remember Username</label>
                        </div>
                        <div class="">
                            <button class="btn text-white mt-2" type="submit">Login</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="text-center mt-3"style="font-weight: 300; font-size: 14px; color:black;">Belum punya akun? <a href="{{ route('form.register') }}"> Daftar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection
@section('script')
@endsection --}}












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ asset('Login_v17/images/icons/favicon.ico') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v17/vendor/bootstrap/css/bootstrap-grid.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v17/fonts/font-awesome-4.7.0/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v17/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v17/vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v17/vendor/css-hamburgers/hamburgers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v17/vendor/animsition/css/animsition.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v17/vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v17/vendor/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v17/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v17/css/main.css') }}">

    <style>
        .login100-more{
            height: 675px;
            width: 580px;
            margin-top: 185px;
        }
        .wrap-login100{
            margin-top: -195px;
            margin-left: 100px;
        }
    </style>

    <title>Login Data</title>
</head>
<body>
    <div class="limiter" id="login">
        <div class="">
            <div class="wrap-login100">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    <span style="color: black;">{{ session()->get('success') }}</span>
                </div>
                @endif
                @if (session()->has('error'))
                <div class="alert alert-danger">
                    <span style="color: black;">{{ session()->get('error') }}</span>
                </div>
                @endif
                <form class="login100-form validate-form" method="POST" action="{{ route('kirimlogin') }}">
                    @csrf
                    <span class="login100-form-title p-b-34">
                        Account Login
                    </span>
                    <div class="rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                        <input id="username" class="input100 @error('username') is-invalid @enderror" type="text" name="username"
                            placeholder="Username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <span class="focus-input100"></span>
                    </div>
                    <div class="rs1-wrap-input100 validate-input m-b-20" data-validate="Type password">
                        <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password"
                            placeholder="Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <span class="focus-input100"></span>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" style="border: 2px solid #2ecc71" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" style="color: #2ecc71" for="exampleCheck1">Remember Username</label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">Sign in</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                    </div>
                    <div class="w-full text-center p-t-27 p-b-239">
                        <span class="txt1">
                            Belum punya akun?
                        </span>
                        <a href="{{ route('form.register') }}" class="txt2">
                            Daftar
                        </a>
                    </div>
                </form>
                <div class="login100-more" style="background-image: url('https://images.unsplash.com/photo-1556648011-e01aca870a81?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1374&q=80');"></div>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>




    <script src="{{ asset('Login_v17/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('Login_v17/vendor/animsition/js/animsition.min.js') }}"></script>
	<script src="{{ asset('Login_v17/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('Login_v17/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('Login_v17/vendor/select2/select2.min.js') }}"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<script src="{{ asset('Login_v17/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('Login_v17/vendor/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('Login_v17/vendor/countdowntime/countdowntime.js') }}"></script>
	<script src="{{ asset('Login_v17/js/main.js') }}"></script>
</body>
</html>
