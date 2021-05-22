@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    <div class="col-10">
        <center><h1>DATA PENJUALAN</h1></center>
        @if(auth()->user()->role=='admin')
               <center> <a href="datapenjualan/tambahpenjualan" class=" btn btn-info mb-2 ">TAMBAH DATA PENJUALAN</a> </center>
@endif
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

                <th width="40px" scope="col" style="text-align: center">No</th>
                <th width="200px" scope="col" style="text-align: center">Nama Perumahan</th>
                <th width="50px "scope="col" style="text-align: center">Blok</th>
                <th width="50px" scope="col" style="text-align: center">No</th>
                <th width="200px" scope="col" style="text-align: center">Nama Pembeli</th>
                <th width="120px" scope="col" style="text-align: center">Tanggal Terjual</th>
                <th width="120px" scope="col" style="text-align: center">Status Kavling</th>
                @if(auth()->user()->role=='admin')
                <th width="150px" scope="col" style="text-align: center">Aksi</th>
                @endif
    
            </thead>
        </tr>
            <tbody>
                @foreach ($penjualan as $penjualan)
                <tr>
                    <th scope="row" style="text-align: center">{{ $loop->iteration}}</th>
                    <td align="center">{{ $penjualan->nama_perumahan}}</td>
                    <td align="center">{{ $penjualan->blok}}</td>
                    <td align="center">{{ $penjualan->no}}</td>
                    <td align="center">{{ $penjualan->nama}}</td>
                    <td align="center">{{ $penjualan->tglakad}}</td>
                    <td align="center">{{ $penjualan->status}}</td>
                    @if(auth()->user()->role=='admin')
                    <td align="center">
                        
                        {{-- <form action="datapenjualan/{{$penjualan->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf --}}
                            <a href="ubahpenjualan/{{$penjualan->id}}/edit" class="btn btn-info">Edit</a>
                            {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                            <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#hapusdatapenjualan" >Hapus</button>
                   
                            <div class="modal fade" id="hapusdatapenjualan" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Data Penjualan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Yakin Mau Dihapus</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                <form action="/datapenjualan/{{$penjualan->id}}" method="post" class="d-inline ">
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
                        @endif
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