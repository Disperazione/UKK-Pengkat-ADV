@extends('layouts.auth')

@section('content')
<section id="login">
        <div class="container">
            <div class="card m-auto headcard text-center shadow">
                <h1 class="fw-bold text-white fs-5">LOGIN</h1>
            </div>
            <div class="card formcard shadow m-auto ">
                <div class="mt-4">
                    <div style="height: 20px; padding-top:18px;" >
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            <span>{{ session()->get('success') }}</span>
                        </div>
                        @endif
                        @if (session()->has('error'))
                        <div class="alert alert-danger">
                            <span>{{ session()->get('error') }}</span>
                        </div>
                        @endif

                    </div>
                    <form  id="frmlogin" class="mt-5">
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
                        <div class="text-center mt-3"style="font-weight: 300; font-size: 14px;">Belum punya akun? <a href="{{ route('form.register') }}"> Daftar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
