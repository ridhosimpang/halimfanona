@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="section-header">
        <h1>Data Pengajuan Berkas</h1>
</div>
        
@if (session('status'))
<div class="alert alert-success">
    {{ session('status')}}
</div>
@endif
<div class="card">
    <div class="card-header">
        <h4> Data Pengajuan </h4>
</div>
<div class="card-body">
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No </th>
        <th scope="col">Nama Perumahan</th>
        <th scope="col">Blok</th>
        <th scope="col">Nomor</th>
        <th scope="col">Nama Konsumen</th>
        <th scope="col">Status Berkas</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
            <tbody>
                @foreach ($pengajuan as $pengajuan)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $pengajuan->nama_perumahan}}</td>
                    <td>{{ $pengajuan->blok}}</td>
                    <td>{{ $pengajuan->no}}</td>
                    <td>{{ $pengajuan->nama}}</td>
                    <td>{{ $pengajuan->statusBerkas}}</td>
                    <td>
                        
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
    </div>
    </div>
</div>
@endsection