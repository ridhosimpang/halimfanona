@extends('layout.menuadmin')
   
@section('container')

<!-- /subnavbar -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    <div class="col-10">
        <center><h1>DATA PERUMAHAN</h1></center>
        
               <center> <a href="dataperumahan/tambahperumahan" class=" btn btn-info mb-2 ">Tambah Perumahan</a> </center>

@if (session('status'))
<div class="alert alert-success">
    {{ session('status')}}
</div>
@endif
<center>
<table class="table table-bordered">
    <thead class="thead-dark">
        <center>
            <table border="1" width="1100px">
                    <tr style="background-color: yellow;">

                <th width="40px" scope="col" style="text-align: center">No </th>
                <th width="200px" scope="col" style="text-align: center">Nama Perumahan</th>
                <th width="120px "scope="col" style="text-align: center">Tipe Rumah</th>
                <th width="120px" scope="col" style="text-align: center">Luas Rumah</th>
                <th width="130px" scope="col" style="text-align: center">Total Unit Rumah</th>
                <th width="120px" scope="col" style="text-align: center">Luas Lahan</th>
                <th width="120px" scope="col" style="text-align: center">Foto</th>
                <th width="200px" scope="col" style="text-align: center">Aksi</th>
    
            </thead>
        </tr>
            <tbody>
                @foreach ($perumahan as $perum)
                <tr>
                    <th scope="row" style="text-align: center">{{ $loop->iteration}}</th>
                    <td align="center">{{ $perum->nama}}</td>
                    <td align="center">{{ $perum->tiperumah}}</td>
                    <td align="center">{{ $perum->luasrumah}}</td>
                    <td align="center">{{ $perum->totalunit}}</td>
                    <td align="center">{{ $perum->luaslahan}}</td>
                    <td align="center">{{ $perum->foto}}</td>
                    <td align="center">
                        
                        {{-- <form action="dataperumahan/{{$perum->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf --}}
                            <a href="dataperumahan/{{$perum->id}}/edit" class="btn btn-info">Edit</a>
                            {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                            <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#hapusdataperumahan" >Hapus</button>
                   
                            <div class="modal fade" id="hapusdataperumahan" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Data Perumahan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Yakin Mau Dihapus</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                <form action="/dataperumahan/{{$perum->id}}" method="post" class="d-inline ">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Ya</button>
                                    </form>
                            </div>
                          </div>
                        </div>
                      </div>
                            
                        {{-- </form> --}}
                        </td>
                </tr>
                @endforeach
                </tbody>
</table>
</table>
</center>
    </div>
    </div>
</div>
@endsection