@extends('layout.menuadmin')
   
@section('container')

<!-- /subnavbar -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    <div class="col-10">
        <center><h1>DATA PENGAJUAN BERKAS</h1></center>
        
@if (session('status'))
<div class="alert alert-success">
    {{ session('status')}}
</div>
@endif
<center>
<table class="table table-bordered">
    <thead class="thead-dark">
        <center>
            <table border="1" width="1100px" align="center">
                    <tr style="background-color: yellow;">
                {{-- <center> --}}
                <th width="40px" scope="col" style="text-align: center">No</th>
                <th width="200px" scope="col" style="text-align: center">Nama Perumahan</th>
                <th width="50px "scope="col" style="text-align: center">Blok</th>
                <th width="50px" scope="col" style="text-align: center">No</th>
                <th width="200px" scope="col" style="text-align: center">Nama Pembeli</th>
                <th width="120px" scope="col" style="text-align: center">Status Berkas</th>
                <th width="150px" scope="col" style="text-align: center">Aksi</th>
                {{-- </center> --}}
            </thead>
        </tr>
            <tbody>
                @foreach ($pengajuan as $pengajuan)
                <tr>
                    <th scope="row" style="text-align: center">{{ $loop->iteration}}</th>
                    <td align="center">{{ $pengajuan->nama_perumahan}}</td>
                    <td align="center">{{ $pengajuan->blok}}</td>
                    <td align="center">{{ $pengajuan->no}}</td>
                    <td align="center">{{ $pengajuan->nama}}</td>
                    <td align="center">{{ $pengajuan->statusBerkas}}</td>
                    <td align="center">
                        
                        <form action="datapengajuan/{{$pengajuan->id }}" method="post" class="">
                            @method('patch')
                            @csrf
                            <input type="hidden" name="id" value="{{$pengajuan->id}}">
                            <select class="form-select" aria-label="Default select example" name="statusBerkas">
                                <option selected>{{$pengajuan->statusBerkas}}</option>
                                <option value="Melengkapi Berkas">Melengkapi Berkas</option>
                                <option value="Berkas Dikantor">Berkas Dikantor</option>
                                <option value="Belum Wawancara">Belum Wawancara</option>
                                <option value="Sudah Wawancara">Sudah Wawancara</option> {{-- nanti ditulis status ny ap bae disini samo value ny jg --}}
                                <option value="On Proses">On Proses</option> 
                                <option value="SP3K">SP3K</option> 
                                <option value="Akad Kredit">Akad Kredit</option>
                              </select>
                            <button type="submit" class="btn btn-info">Ganti Status</button>
                            
                        </form>
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