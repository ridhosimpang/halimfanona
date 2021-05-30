@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="section-header">
    <a href="{{route('tambahPengajuan')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data Pengajuan</a>
</div>
        
@if (session('status'))
<div class="alert alert-success">
    {{ session('status')}}
</div>
@endif
<div class="card">
    <div class="card-header">
        <h4> Data Pengajuan Konsumen </h4>
</div>
<div class="card-body">
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No </th>
        <th scope="col">Nama Perumahan</th>
        <th scope="col">Blok dan Nomor</th>
        <th scope="col">Nama Konsumen</th>
        <th scope="col">Status Berkas</th>
        <th scope="col">Jadwal Wawancara</th>
        <th scope="col">Jadwal Akad</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
            <tbody>
                @foreach ($pengajuan as $pj)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $pj->perumahan->nama}}</td>
                    <td>{{ $pj->unit->blok}}</td>
                    <td>{{ $pj->nama_konsumen}}</td>
                    <td>
                        
                        <form action="datapengajuan/{{$pj->id }}" method="post" class="">
                            @method('patch')
                            @csrf
                            <input type="hidden" name="id" value="{{$pj->id}}">
                            <select class="form-select" aria-label="Default select example" name="statusBerkas">
                                <option selected>{{$pj->status_berkas}}</option>
                                <option value="Melengkapi Berkas">Melengkapi Berkas</option>
                                <option value="Berkas Dikantor">Berkas Dikantor</option>
                                <option value="Belum Wawancara">Belum Wawancara</option>
                                <option value="Sudah Wawancara">Sudah Wawancara</option> {{-- nanti ditulis status ny ap bae disini samo value ny jg --}}
                                <option value="On Proses">On Proses</option> 
                                <option value="SP3K">SP3K</option> 
                                <option value="Akad Kredit">Akad Kredit</option>
                              </select>
                            </form>
                        </td>
                        <td></td>
                    <td></td>

                    <td>
                        <button type="submit" class="btn btn-info">Detail</button>
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