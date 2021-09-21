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
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                
                   
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <div class="card">
                    @if ($message = Session::get('success'))
                    <div class="alert bg-success text-white alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        <span class="font-weight-semibold">Success!</span> {{$message}} 
                    </div>   
                    @endif




                    <div class="table-responsive">
                        
                        <div class="card ">
                            <div class="card-header header-elements-inline">
                                <h2 class="card-title">Data Petugas</h2>
                                <div class="header-elements">
                                    <a href="{{route('petugas.tambah')}}" class="btn bg-indigo-600 rounded">Tambah Data</a>
                            
                                </div>
                            </div>
        
        
                            <div class="table-responsive">
                                <table class="table  ">
                                    <thead>
                                        <tr class="text-center bg-dark">
                                            <th>NO</th>
                                            <th>Nama Petugas</th>
                                            <th>Username</th>
                                            <th>Telp</th>
                                            <th>Level</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($petugas as $ptgs)

                                        <tr class=" text-center">
                                            @if (($loop->iteration % 3) === 2)
                                            <tr class="bg-teal-300 text-center">
                                                <td><b>{{ $loop->iteration }}</b></td>
                                                @else 
                                                <tr class=" text-center">
                                                    <td><b>{{ $loop->iteration }}</b></td>
                                                @endif
                                            <td><b>{{ $ptgs->nama_petugas }}</b></td>
                                            <td><b>{{ $ptgs->username }}</b></td>
                                            <td><b>{{ $ptgs->telp }}</b></td>
                                            <td><b>{{ $ptgs->level}}</b></td>
                                           <td>
                                            <form action="{{route('delete.petugas',$ptgs->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                
                                                <a href="{{route('edit.petugas',[$ptgs->id])}}" class="btn btn-warning">Edit</a>
            
                                                <button type="submit" class="btn btn-danger " >Delete</button> 
                                            </form>
                                           </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                        {{ $petugas->links() }}
                    </div>
                </div>
                <div class="text-center">
                    
                </div>
                

            </div>
        </div>
    </div>
@endsection
