@extends('layouts.auth')
@section('style')
<style>
    footer{
        display: none;
    }
    .slick-dots{
    display: none;
    }
    #login{
        margin-top: -100px;
        margin-right:-250px ;
    }
</style>
@endsection
@section('content')
<section class="hero-section overlay bg-cover" data-background="https://images.unsplash.com/photo-1546422904-90eab23c3d7e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80">
    <div class="container">
        <div class="hero-slider" style="margin-top: -100px;">
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-9">
                        <section id="login">
                            <div class="container">
                                <div class="card m-auto headcard text-center shadow">
                                        <h1 class="fw-bold fs-5" style="color: white">LOGIN</h1>
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
                       
                                        <form id="frmlogin"  method="POST"   class="mt-5" onsubmit="event.preventDefault();">
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
                                                    <input type="checkbox" class="form-check-input" style="border: 2px solid #c48717" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" style="color: #c48717" for="exampleCheck1">Remember Username</label>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection






<script>
 
</script>