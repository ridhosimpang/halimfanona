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
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error')}}
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
                                    <button class="btn btn-info" 
                                    data-toggle="modal" 
                                    data-target="#modalEdit" 
                                    data-id = "{{$blok->id}}"
                                    data-blok = "{{$blok->blok}}"
                                    data-luas = "{{$blok->luastanah}}"
                                    >Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusdataperumahan{{$blok->id}}" >Hapus</button>
                        <div class="modal fade" id="hapusdataperumahan{{$blok->id}}" data-backdrop="false" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Data Blok</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Yakin Mau Dihapus</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                <form action="/hapusBlok/{{$blok->id}}" method="post" class="d-inline ">
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

                {{-- Modal Edit --}}
                <div class="modal fade modalEdit ml-5 " data-backdrop="false" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Kavling</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="" enctype="multipart/form-data" id="formEdit">
                          @csrf
                            <div class="card-body">
                            <div class="form-group">
                              <label for="blok" class="col-sm-12 col-form-label">Blok Dan Nomor</label>
                              <div class="col-sm-12 ">
                                <input type="text" class="form-control @error('blok') is-invalid @enderror" id="blokEdit" placeholder="Masukan blok dan nomor" name="blok">
                                @error('blok')
                                          <div class="invalid-feedback " style="color:red">{{$message}}</div>
                                  @enderror
                              </div>
                            </div>
                                    <div class="form-group">
                                      <label for="luastanah" class="col-sm-12 col-form-label">Luas Tanah</label>
                                      <div class="col-sm-12 ">
                                        <input type="text" class="form-control @error('luastanah') is-invalid @enderror" id="luastanahEdit" placeholder="Masukan luas tanah" name="luastanah">
                                @error('luastanah')
                                          <div class="invalid-feedback " style="color:red">{{$message}}</div>
                                  @enderror
                                      </div>
                                    </div>
                                    <div class="card-footer text-left">
                                      <button type="submit" class="btn btn-primary">Edit Data</button>
                              <a href="/dataperumahan" class="btn btn-light">Kembali</a>      
                              </div>  
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
                <script type="text/javascript">
                  $(document).ready(function () {
                    $('#modalEdit').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var id = button.data('id') // Extract info from data-* attributes
                    var blok = button.data('blok') 
                    var luas = button.data('luas') 
                    document.getElementById('formEdit').action='/editBlok/'+id;
                    $('#blokEdit').val(blok);
                    $('#luastanahEdit').val(luas);
                    })
                  });
                  </script>
@endsection