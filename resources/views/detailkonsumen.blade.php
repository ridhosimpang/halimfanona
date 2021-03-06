@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="section-header bg-primary"> </div>
@if (session('status'))
<div class="alert alert-success">
    {{ session('status')}}
</div>
@endif
<div class="card">
  <div class="card-header">
      <h4> Detail Konsumen </h4>
</div>
<table class="table">
  <tbody>
    <tr>
      <td style="width: 20%">Nama</td>
      <td> : {{$konsumen->nama_konsumen}}</td>
    </tr>
    <tr>
      <td>NIK</td>
      <td> : {{$konsumen->nik}}</td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td> : {{$konsumen->tempat_lahir}}</td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td> : {{$konsumen->tanggal_lahir}}</td>
    </tr>
    <tr>
      <td>alamat</td>
      <td> : {{$konsumen->alamat}}</td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td> : {{$konsumen->jk}}</td>
    </tr>
    <tr>
      <td>Status Perkawinan</td>
      <td> : {{$konsumen->status_perkawinan}}</td>
    </tr>
    <tr>
      <td>Agama</td>
      <td> : {{$konsumen->agama}}</td>
    </tr>
    <tr>
      <td>Nama Perumahan</td>
      <td> : {{$konsumen->perumahan->nama}}</td>
    </tr>
    <tr>
      <td>Blok Dan No</td>
      <td> : {{$konsumen->unit->blok}}</td>
    </tr>
    <tr>
      <td>Nomor Handphone</td>
      <td> : {{$konsumen->no_hp}}</td>
    </tr>
    <tr >
      <td>File Pasfoto</td>
      <td >
        <a href="{{Storage::url($konsumen->foto)}}" class="btn btn-primary">Lihat File Pasfoto</a>
        {{-- <img src="{{Storage::url($konsumen->foto)}}" alt="" width="200px" class="mb-2"> --}}
      </td>
      {{-- <td><input type="file" name="ktp" id=""></td> --}}
    </tr>
    <tr>
      <td>File KTP</td>
      <td>
        <a href="{{Storage::url($konsumen->fotoktp)}}" class="btn btn-primary">Lihat File KTP</a>
      </td>
      {{-- <td><img src="{{Storage::url($konsumen->fotoktp)}}" alt="" width="200px" class="mb-2"></td> --}}
      {{-- <td><input type="file" name="ktp" id=""></td> --}}
    </tr>
    <tr>
      <td>File KK</td>
      <td>
        <a href="{{Storage::url($konsumen->fotokk)}}" class="btn btn-primary">Lihat File KK</a>
      </td>
      {{-- <td><input type="file" name="ktp" id=""></td> --}}
    </tr>
    <tr>
      <td>File NPWP</td>
      <td>
        <a href="{{Storage::url($konsumen->fotonpwp)}}" class="btn btn-primary">Lihat File NPWP</a>
      </td>
      {{-- <td><input type="file" name="ktp" id=""></td> --}}
    </tr>
    <tr>
      <td>File Buku Nikah</td>
      <td>
        <a href="{{Storage::url($konsumen->fotobukunikah)}}" class="btn btn-primary">Lihat File Buku Nikah</a>
      </td>
      {{-- <td><input type="file" name="ktp" id=""></td> --}}
    </tr>
  </tbody>
</table>

<form action="/datakonsumen/{{ $konsumen->id }}" method="post" class="d-inline ">
  <div class="card-footer text-right">
  <a href="/datakonsumen" class="btn btn-light">Kembali</a>
    @if (auth()->user()->role == "admin")
      
  <a href="/ubahkonsumen/{{$konsumen->id}}/edit" class="btn btn-info">Edit</a>
                      @method('delete')
                      @csrf
                      <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#hapusdatakonsumen" >Delete</button>
                   
                      <div class="modal fade" id="hapusdatakonsumen" tabindex="-1" role="dialog" data-backdrop="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Hapus Data Konsumen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Yakin Mau Dihapus</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                <form action="/datakonsumen/{{$konsumen->id}}" method="post" class="d-inline ">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Ya</button>
                                    </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endif
  </div>
                      
                      </form>
                    </div>
@endsection