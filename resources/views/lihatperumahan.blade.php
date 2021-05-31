@extends('layout.tema')
   
@section('container')

        <div class="card">
            <div class="card-header">
                <h4> Data Perumahan {{$perum->nama}} </h4>
    </div>          
    </div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status')}}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4>Tambah Unit Kavling</h4>
            
        </div>
        <form method="POST" action="/lihatperumahan/{{$perum->id}}" enctype="multipart/form-data">
        @csrf
                          <div class="card-body">
                          <div class="form-group">
                            <label for="blok" class="col-sm-2 col-form-label">Blok Dan Nomor</label>
                            <div class="col-sm-5 ">
                              <input type="text" class="form-control @error('blok') is-invalid @enderror" id="blok" placeholder="Masukan blok dan nomor" name="blok">
                              @error('blok')
                                        <div class="invalid-feedback " style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                          </div>
                                  <div class="form-group">
                                    <label for="luastanah" class="col-sm-2 col-form-label">Luas Tanah</label>
                                    <div class="col-sm-5 ">
                                      <input type="text" class="form-control @error('luastanah') is-invalid @enderror" id="luastanah" placeholder="Masukan luas tanah" name="luastanah">
                              @error('luastanah')
                                        <div class="invalid-feedback " style="color:red">{{$message}}</div>
                                @enderror
                                    </div>
                                  </div>
                                  <div class="card-footer text-left">
                            <a href="/dataperumahan" class="btn btn-light">Kembali</a>      
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </div>  
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Blok dan Nomor</th>
                            <th scope="col">Luas Tanah</th>
                            <th scope="col">Nama Konsumen</th>
                            <th scope="col">Diajukan Oleh</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($unit as $blok)
                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td>{{ $blok->blok}}</td>
                                <td>{{ $blok->luastanah}}</td>
                                <td>{{ $blok->namakonsumen}}</td>
                                <td>{{ $blok->pengajuan}}</td>
                                <td>
                                    <a href="dataperumahan/{{$perum->id}}/lihat" class="btn btn-info">Lihat</a>
                                    <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#hapusdataperumahan{{$perum->id}}" >Hapus</button>
                                    <div class="modal fade" id="hapusdataperumahan{{$perum->id}}" data-backdrop="false" tabindex="-1" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Hapus Data Perumahan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Yakin Mau Dihapus</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                            <form action="/dataperumahan/{{$perum->id}}" method="post" class="d-inline ">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">Ya</button>
                                                </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
@endsection