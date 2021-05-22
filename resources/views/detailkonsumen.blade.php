@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="/detailkonsumen">Data Konsumen</a>
  </nav>

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
          <div class="row">
            <div class="col-md-3">
                <p><strong>Nama</strong></p>
                <p><strong>Nomor Nik</strong></p>
                <p><strong>Tempat Lahir</strong></p>
                <p><strong>Tanggal Lahir</strong></p>
                <p><strong>Alamat</strong></p>
                <p><strong>Jenis Kelamin </strong></p>
                <p><strong>Status Perkawinan</strong></p>
                <p><strong>Agama</strong></p>
                <p><strong>Nama Perumahan</strong></p>
                <p><strong>Blok</strong></p>
                <p><strong>Nomor</strong></p>
                <p><strong>No HP</strong></p>
                <p><strong></strong></p>
            </div>
            <div class="row">
            <div class="col-md-3">
                <p>: {{$konsumen->nama}} </p>
                <p>: {{$konsumen->nik}} </p>
                <p>: {{$konsumen->tmptlhr}} </p>
                <p>: {{$konsumen->tgllhr}} </p>
                <p>: {{$konsumen->alamat}} </p>
                <p>: {{$konsumen->jk}} </p>
                <p>: {{$konsumen->status_perkawinan}} </p>
                <p>: {{$konsumen->agama}} </p>
                <p>: {{$konsumen->namaperumahan}} </p>
                <p>: {{$konsumen->blok}} </p>
                <p>: {{$konsumen->no}} </p>
                <p>: {{$konsumen->nohp}} </p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
            
                    </div>
                    <a href="/ubahkonsumen/{{$konsumen->id}}/edit" class="btn btn-info">Edit</a>
                    {{-- <form action="/datakonsumen/{{ $konsumen->id }}" method="post" class="d-inline ">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger">Delete</button> --}}
                      <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#hapusdatakonsumen" >Hapus Data</button>
                   
                            <div class="modal fade" id="hapusdatakonsumen" tabindex="-1" role="dialog">
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
                    </form>
                  </div>
            </div>
          </div>
          </div>
  
          
  </div>
@endsection