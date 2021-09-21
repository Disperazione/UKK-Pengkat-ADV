@extends('layouts.admin')

@section('content')
    <div class="page-header page-header-light">


        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('petugas.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <span class="breadcrumb-item active">Petugas</span>
                    <span class="breadcrumb-item active">Data Petugas</span>
                    <span class="breadcrumb-item active">Tambah</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card">




                    <div class="table-responsive">
                        <div class="card-header header-elements-inline">
                            <h4 class="card-title">Tambah Petugas</h4>

                        </div>
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <div class="header-elements">

                                </div>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('store.petugas') }}" method="POST">
                                    @csrf
                                    <fieldset class="md-1">


                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label>Nama</label>
                                                <input type="text"
                                                    class="form-control @error('nama_petugas') is-invalid @enderror "
                                                    name="nama_petugas">
                                                @error('nama_petugas')
                                                    <span>
                                                        <small class="text-danger">{{ $message }}</small>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class=" row">

                                                <div class="col-md-4">
                                                    <label>Username</label>
                                                    <input type="text"
                                                        class="form-control @error('username') is-invalid @enderror "
                                                        name="username" placeholder="Username">
                                                    @error('username')
                                                        <span>
                                                            <small class="text-danger">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Password</label>
                                                    <input type="password"
                                                        class="form-control @error('password') is-invalid @enderror "
                                                        name="password" placeholder="Password">
                                                    @error('password')
                                                        <span>
                                                            <small class="text-danger">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                                
                                                {{--  --}}
                                                <div class="col-md-4">
                                                    <label>Telepon</label>
                                                    <input type="text"
                                                    class="form-control @error('telp') is-invalid @enderror "
                                                    name="telp" placeholder="08-XXXXXX">
                                                    @error('telp')
                                                    <span>
                                                        <small class="text-danger">{{ $message }}</small>
                                                    </span>
                                                    @enderror
                                                </div>
                                                
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity">Level</label>
                                            <select id="level" class="form-control @error('level') is-invalid @enderror"
                                                name="level">
                                                <option value="" selected>--Pilih Level--</option>
                                                <option value="admin">Admin</option>
                                                <option value="petugas">Petugas</option>
                                            </select>
                                            @error('level')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </fieldset>

                                    <div class="text-right">
                                        <a href="{{ route('data.petugas') }}" class="btn btn-dark">back</a>
                                        <button type="submit" class="btn btn-primary">Tambah <i
                                                class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
