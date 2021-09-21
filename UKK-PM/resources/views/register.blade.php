@extends('layouts.auth')

@section('content')
<section id="register">
    <div class="container">
        <div class="card m-auto headcard text-center shadow">
            <h1 class="fw-bold  fs-5" style="color: yellow" >SIGN UP</h1>
        </div>
        <div class="card formcard shadow m-auto ">
            <div class="mt-3">
                <form method="POST" action="{{ route('register') }}" class="mt-5">
                    @csrf
                    <!-- nik -->
                    <div class="input-group pb-3 m-auto" style="width: 350px; ">
                        <span class="input-group-text  fs-6 "><i style="color: black;" class="fas fa-id-card"></i></span>
                        <input id="nik" type="text" class="form-control" placeholder="NIK" style="font-size: 14px;"name="nik" value="{{ old('nik') }}" >
                        @if ($errors->has('nik'))
                        <span class="invalid-feedback d-block text-md-left" role="alert">
                        <strong class="text-danger">{{ $errors->first('nik') }}</strong>
                        </span>
                        @endif
                    </div>
                    <!-- nama -->
                    <div class="input-group pb-3 m-auto" style="width: 350px; ">
                        <span class="input-group-text  fs-6 "><i style="color: black;" class="fas fa-user"></i></span>
                        <input id="nama" type="text" class="form-control" placeholder="Nama" style="font-size: 14px;" name="nama" value="{{ old('nama') }}">
                        @if ($errors->has('nama'))
                        <span class="invalid-feedback d-block text-md-left" role="alert">
                        <strong class="text-danger">{{ $errors->first('nama') }}</strong>
                        </span>
                        @endif
                    </div>
                    <!-- phone -->
                    <div class="input-group pb-3 m-auto" style="width: 350px; ">
                        <span class="input-group-text  fs-6 "><i style="color: black;" class="fas fa-phone"></i></span>
                        <input id="telp" type="text" class="form-control " placeholder="Telephone" style="font-size: 14px;" name="telp"value="{{ old('telp') }}" >
                        @if ($errors->has('telp'))
                        <span class="invalid-feedback d-block text-md-left" role="alert">
                        <strong class="text-danger">{{ $errors->first('telp') }}</strong>
                        </span>
                        @endif
                    </div>
                    <!-- username -->
                    <div class="input-group pb-3 m-auto" style="width: 350px; ">
                        <span class="input-group-text  fs-6 "><i style="color: black;" class="fas fa-user"></i></span>
                        <input id="username" type="text" class="form-control" placeholder="Username"style="font-size: 14px;" name="username" value="{{ old('username') }}">
                        @if ($errors->has('username'))
                        <span class="invalid-feedback d-block text-md-left" role="alert">
                        <strong class="text-danger">{{ $errors->first('username') }}</strong>
                        </span>
                        @endif
                    </div>
                    <!-- password -->
                    <div class="input-group pb-3 m-auto" style="width: 350px; ">
                        <span class="input-group-text  fs-6 "><i style="color: black;" class="fas  fa-lock"></i></span>
                        <input id="password" type="password" class="form-control" placeholder="Password"style="font-size: 14px;" name="password">
                        @if ($errors->has('password'))
                        <span class="invalid-feedback d-block text-md-left" role="alert">
                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <!-- konfirmasi password -->
                    <div class="input-group pb-3 m-auto" style="width: 350px; ">
                        <span class="input-group-text  fs-6 "><i style="color: black;" class="fas fa-unlock-alt"></i></span>
                        <input id="password-confirm" type="password" class="form-control " placeholder="Konfirmasi password"style="font-size: 14px;" name="confirm_password" >
                    </div>
                    
                    <div class="">
                        <button type="submit" class="btn text-white mt-2">DAFTAR</button>
                        <!-- <a href="">Sudah punya akun? Login</a> -->
                    </div>
                    <div class="text-center mt-3"style="font-weight: 300; font-size: 14px; color:   black;">Sudah punya akun? <a href="{{ route('login') }}"> Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
