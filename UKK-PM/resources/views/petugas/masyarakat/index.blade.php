@extends('layouts.admin')

@section('content')
    <div class="page-header page-header-light">


        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('petugas.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <span class="breadcrumb-item active">Masyarakat</span>
                    <span class="breadcrumb-item active">Data Masyarakat</span>
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
                        <div class="card-header header-elements-inline">
                            <h4 class="card-title">Data Masyarakat</h4>
                            
                        </div>
    
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>NO</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Telp</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($masyarakat as $mass)
                                    @if (($loop->iteration % 3) === 1)
                                        <tr class="bg-info text-center">
                                            <td><b>{{ $loop->iteration }}</b></td>
                                        @elseif (($loop->iteration % 2) === 0)
                                        <tr class=" text-center" style="background-color: yellow;">
                                            <td><b>{{ $loop->iteration }}</b></td>
                                        @else
                                        <tr class="bg-danger text-center">
                                            <td><b>{{ $loop->iteration }}</b></td>
                                        @endif
                                            <td><b>{{ $mass->nik }}</b></td>
                                            <td><b>{{ $mass->nama }}</b></td>
                                            <td><b>{{ $mass->telp }}</b></td>
                                           <td>
                                            <form action="{{route('delete.masyarakat',$mass->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                
                                                <a href="{{route('edit.masyarakat',[$mass->id])}}" class="btn btn-warning">Edit</a>
            
                                                <button type="submit" class="btn btn-danger " >Delete</button> 
                                            </form>
                                           </td>
                                        </tr>
                                        
                                        
                                    @endforeach

                            </tbody>
                        </table>
                        {{-- {{ $masyarakat->links() }} --}}
                    </div>
                </div>
                <div class="text-center">
                    {{ $masyarakat->appends(['sort' => 'created_at'])->links() }}
                </div>
                

            </div>
        </div>
    </div>
@endsection
