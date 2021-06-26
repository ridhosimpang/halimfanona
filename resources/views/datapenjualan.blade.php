@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="section-header">
        <h1>DATA PENJUALAN</h1>
        @if(auth()->user()->role=='admin')
               <a href="datapenjualan/tambahpenjualan" class=" btn btn-info mb-2 " style="display: flex; margin-left:auto;">TAMBAH DATA PENJUALAN</a>
@endif
</div>
@if (session('status'))
<div class="alert alert-success">
    {{ session('status')}}
</div>
@endif
<div class="card">
    <div class="card-header">
        <h4> Data Penjualan </h4>
</div>
<div class="card-body">
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No </th>
        <th scope="col">Nama Perumahan</th>
        <th scope="col">Blok</th>
        <th scope="col">Nama Konsumen</th>
        <th scope="col">Tanggal Akad</th>
        <th scope="col">Status Kavling</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
            <tbody>
                @foreach ($penjualan as $pj)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $pj->perumahan->nama}}</td>
                    <td>{{ $pj->unit->blok}}</td>
                    <td>{{ $pj->konsumen->nama_konsumen}}</td>
                    <td>{{ $pj->tglakad}}</td>
                    <td>{{ $pj->status}}</td>
                    @if(auth()->user()->role=='admin')
                    <td>
                        
                        {{-- <form action="datapenjualan/{{$penjualan->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf --}}
                            <a href="ubahpenjualan/{{$pj->id}}/edit" class="btn btn-info">Edit</a>
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
                                <form action="/datapenjualan/{{$pj->id}}" method="post" class="d-inline ">
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
    </div>
    </div>
</div>
@endsection