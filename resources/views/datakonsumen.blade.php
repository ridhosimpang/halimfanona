@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="section-header">
        <h1>DATA KONSUMEN</h1>
<a href="datakonsumen/tambahkonsumen" class=" btn btn-info mb-2 " style="display: flex; margin-left:auto;">Tambah Data Konsumen</a>
</div>

@if (session('status'))
<div class="alert alert-info">
    {{ session('status')}}
</div>
@endif
<div class="card">
    <div class="card-header">
        <h4> Data Perumahan </h4>
</div>
<div class="card-body">
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No </th>
        <th scope="col">Nama Konsumen</th>
        <th scope="col">Nama Perumahan</th>
        <th scope="col">Blok</th>
        <th scope="col">Nomor</th>
        <th scope="col">Nomor HP</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
            <tbody>
                @foreach ($konsumen as $konsumen)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $konsumen->nama}}</td>
                    <td>{{ $konsumen->namaperumahan}}</td>
                    <td>{{ $konsumen->blok}}</td>
                    <td>{{ $konsumen->no}}</td>
                    <td>{{ $konsumen->nohp}}</td>
                    <td>
                            <a href="/detailkonsumen/{{$konsumen->id}}" class="btn btn-info" >Detail</a>
                        </td>
                </tr>
                @endforeach
                </tbody>
</table>
</table>
    </div>
    </div>
</div>
@endsection