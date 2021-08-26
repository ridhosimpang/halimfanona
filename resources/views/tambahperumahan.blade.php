@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="section-header bg-primary">
    
</div>
@if (session('status'))
<div class="alert alert-success">
    {{ session('status')}}
</div>
@endif
<div class="card">
    <div class="card-header">
        <div class="col-10">
            <h4> Form Tambah Perumahan</h4>
        </div>
</div>
<div class="card-body">
<form method="POST" action="/dataperumahan">
@csrf
                  <div class="card-body">
                  <div class="form-group">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Perumahan</label>
                    <div class="col-sm-5 ">
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Perumahan" name="nama">
                      @error('nama')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                  <fieldset class="form-group">
                    {{-- <div class="row"> --}}
                        <label class="col-sm-2 col-form-label">Tipe Rumah</label>
                        <div class="col-sm-5 ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tiperumah" id="tiperumah1" value="4 x 5" checked>
                                <label class="form-check-label" for="tiperumah1">
                                    4 x 5
                                  </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tiperumah" id="tiperumah2" value="3 x 6">
                    <label class="form-check-label" for="tiperumah2">
                      3 x 6
                    </label>
                  </div>
              </div>
          {{-- </div> --}}
      </fieldset>
                        {{-- <div class="form-group">
                          <label for="totalunit" class="col-sm-2 col-form-label">Total Unit</label>
                          <div class="col-sm-5 ">
                            <input type="text" class="form-control @error('totalunit') is-invalid @enderror" id="totalunit" placeholder="Masukan Total Unit" name="totalunit">
                      @error('totalunit')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                          </div>
                        </div> --}}
                          <div class="form-group">
                            <label for="luaslahan" class="col-sm-2 col-form-label">Luas lahan</label>
                            <div class="col-sm-5 ">
                              <input type="text" class="form-control @error('luaslahan') is-invalid @enderror" id="luaslahan" placeholder="Masukan Luas Lahan" name="luaslahan">
                      @error('luaslahan')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="foto" class="col-sm-2 col-form-label"> Foto</label>
                            <div class="col-sm-5 ">
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{ old('foto')}}">
                                @error('foto')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>  
                          </div>
                          <div class="card-footer text-left">
                    <a href="/dataperumahan" class="btn btn-light">Kembali</a>      
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>  
            </form>
        </div>
    @endsection