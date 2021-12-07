@extends('layouts.auth')
@section('style')
<style>
    footer{
        display: none;
    }
    .slick-dots{
    display: none;
    }
    #register{
        margin-top: 150px;
        margin-right: -250px;
    }
</style>

@endsection
@section('content')
<section class="hero-section overlay bg-cover" data-background="https://images.unsplash.com/photo-1546422904-90eab23c3d7e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80">
    <div class="container">
        <div class="hero-slider" style="margin-top: -300px;">
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-9">
                        <section id="register">
                            <div id="info" class="text-danger">
    
                            </div>
                            <div class="container" >
                                <div class="card m-auto headcard text-center shadow">
                                    <h1 class="fw-bold  fs-5" style="color: white" >SIGN UP</h1>
                                </div>
                                <div class="card formcard shadow m-auto   ">
                                    <div class="mt-3">
                                        <form id="frmregister" method="POST" onsubmit="event.preventDefault();" class="mt-5">
                                            @csrf
                                            <!-- nik -->
                                            <div class="input-group pb-3 m-auto" style="width: 350px; ">
                                                <span class="input-group-text  fs-6 "><i style="color: black;" class="fas fa-id-card"></i></span>
                                                <input id="nik" type="text" class="form-control" placeholder="NIK" style="font-size: 14px;"  autocomplete="nik" name="nik" value="{{ old('nik') }}" >
                                                <span class="invalid-feedback d-block text-md-left" role="alert">
                                                <strong class="text-danger" id="error_nik"></strong>
                                                </span>
                                            </div>
                                            <!-- nama -->
                                            <div class="input-group pb-3 m-auto" style="width: 350px; ">
                                                <span class="input-group-text  fs-6 "><i style="color: black;" class="fas fa-user"></i></span>
                                                <input id="nama" type="text" class="form-control" placeholder="Nama" style="font-size: 14px;"  autocomplete="nama" name="nama" value="{{ old('nama') }}">
                                                <span class="invalid-feedback d-block text-md-left" role="alert">
                                                <strong class="text-danger" id="error_nama"></strong>
                                                </span>
                                            </div>
                                            <!-- phone -->
                                            <div class="input-group pb-3 m-auto" style="width: 350px; ">
                                                <span class="input-group-text  fs-6 "><i style="color: black;" class="fas fa-phone"></i></span>
                                                <input id="telp" type="text" class="form-control " placeholder="Telephone" style="font-size: 14px;"  autocomplete="telp" name="telp"value="{{ old('telp') }}" >
                                                <span class="invalid-feedback d-block text-md-left" role="alert">
                                                <strong class="text-danger" id="error_telp"></strong>
                                                </span>
                                            </div>
                                            <!-- username -->
                                            <div class="input-group pb-3 m-auto" style="width: 350px; ">
                                                <span class="input-group-text  fs-6 "><i style="color: black;" class="fas fa-user"></i></span>
                                                <input id="username" type="text" class="form-control" placeholder="Username"style="font-size: 14px;"  autocomplete="username" name="username" value="{{ old('username') }}">
                                                <span class="invalid-feedback d-block text-md-left" role="alert">
                                                <strong class="text-danger" id="error_username"></strong>
                                                </span>
                                            </div>
                                            <!-- password -->
                                            <div class="input-group pb-3 m-auto" style="width: 350px; ">
                                                <span class="input-group-text  fs-6 "><i style="color: black;" class="fas  fa-lock"></i></span>
                                                <input id="password" type="password" class="form-control" placeholder="Password"style="font-size: 14px;"  autocomplete="password" name="password">
                                                <span class="invalid-feedback d-block text-md-left" role="alert">
                                                <strong class="text-danger" id="error_password"></strong>
                                                </span>
                                            </div>
                                            <!-- konfirmasi password -->
                                            <div class="input-group pb-3 m-auto" style="width: 350px; ">
                                                <span class="input-group-text  fs-6 "><i style="color: black;" class="fas fa-unlock-alt"></i></span>
                                                <input id="password-confirm" type="password" class="form-control " placeholder="Konfirmasi password"style="font-size: 14px;"  autocomplete="confirm_password" name="confirm_password" >
                                            </div>

                                            <div class="">
                                                <button type="submit" class="btn text-white mt-2">DAFTAR</button>
                                                <!-- <a href="">Sudah punya akun? Login</a> -->
                                            </div>
                                            <div class="text-center mt-3 mb-3"style="font-weight: 300; font-size: 14px; color: black;">Sudah punya akun? <a href="{{ route('login') }}"> Login</a>
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
