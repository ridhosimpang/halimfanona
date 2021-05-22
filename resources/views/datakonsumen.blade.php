@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    <div class="col-10">
        <center><h1>DATA KONSUMEN</h1></center>
        
               <center> <a href="datakonsumen/tambahkonsumen" class=" btn btn-info mb-2 ">Tambah Data Konsumen</a> </center>    
@if (session('status'))
<div class="alert alert-info">
    {{ session('status')}}
</div>
@endif
<center>
<table class="table table-bordered">
    <thead class="thead-dark">
        <center>
            <table border="1" width="1000px">
                    <tr style="background-color: yellow;">
                    
                <th scope="col" style="text-align: center">No </th>
                <th width="300px" scope="col" style="text-align: center">Nama </th>
                <th width="250px" scope="col" style="text-align: center">Nama Perumahan</th>
                <th scope="col" style="text-align: center">Blok</th>
                <th scope="col" style="text-align: center">Nomor</th>
                <th scope="col" style="text-align: center">Nomor HP</th>
                <th scope="col" style="text-align: center">Aksi</th>
    
            </thead>
        </tr>
            {{-- {{-- <tbody> --}}
                @foreach ($konsumen as $konsumen)
                <tr>
                    <th scope="row" style="text-align: center">{{ $loop->iteration}}</th>
                    <td align="center">{{ $konsumen->nama}}</td>
                    <td align="center">{{ $konsumen->namaperumahan}}</td>
                    <td align="center">{{ $konsumen->blok}}</td>
                    <td align="center">{{ $konsumen->no}}</td>
                    <td align="center">{{ $konsumen->nohp}}</td>
                    <td>
                        <center>
                            <a href="/detailkonsumen/{{$konsumen->id}}" class="btn btn-info" >Detail</a>
                        </center>
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