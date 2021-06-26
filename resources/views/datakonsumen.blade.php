@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="section-header">
        
        <a href="datakonsumen/tambahkonsumen" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data Konsumen</a>
</div>

@if (session('status'))
<div class="alert alert-success">
    {{ session('status')}}
</div>
@endif
<div class="card">
    <div class="card-header">
        <h4> Data Konsumen </h4>
</div>
<div class="card-body">
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No </th>
        <th scope="col">Nama Konsumen</th>
        <th scope="col">Blok</th>
        <th scope="col">Nomor HP</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
            <tbody>
                @foreach ($konsumen as $ks)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{$ks->nama_konsumen}}</td>
                    <td>{{$ks->unit->blok}}</td>
                    <td>{{$ks->no_hp}}</td>
                    <td>
                            <a href="/detailkonsumen/{{$ks->id}}" class="btn btn-info" >Detail</a>
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