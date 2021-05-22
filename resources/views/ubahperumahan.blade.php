@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    <div class="col-10">
        <center> <h1>FORM UBAH DATA PERUMAHAN</h1> </center>
    
        <div class="card-body">
                    
            <form method="post" action="/dataperumahan/{{ $perum->id }}">
              @method('patch')
                @csrf
                  <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Perumahan</label>
                    <div class="col-sm-9 ">
                      <input type="text" class="form-control @error('nama') is-invalid
                       @enderror" id="nama" placeholder="Masukan Nama Perumahan" name="nama" value="{{$perum->nama}}">
                      @error('nama')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                  <fieldset class="form-group row">
                    {{-- <div class="row"> --}}
                        <label class="col-sm-3 col-form-label">Tipe Rumah</label>
                        <div class="col-sm-9 ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tiperumah" id="tiperumah1" value="4 x 5" @if($perum->tiperumah=='4 x 5') checked @endif>
                                <label class="form-check-label" for="tiperumah1">
                                    4 x 5
                                  </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tiperumah" id="tiperumah2" value="3 x 6" @if($perum->tiperumah=='3 x 6') checked @endif>
                    <label class="form-check-label" for="tiperumah2">
                      3 x 6
                    </label>
                  </div>
              </div>
          {{-- </div> --}}
      </fieldset>
                      <div class="form-group row">
                        <label for="luasrumah" class="col-sm-3 col-form-label">Luas Rumah</label>
                        <div class="col-sm-9 ">
                          <input type="text" class="form-control @error('luasrumah') is-invalid
                           @enderror" id="luasrumah" placeholder="Masukan Luas Rumah" name="luasrumah" value="{{$perum->luasrumah}}">
                      @error('luasrumah')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                        </div>
                      </div>
                        <div class="form-group row">
                          <label for="totalunit" class="col-sm-3 col-form-label">Total Unit</label>
                          <div class="col-sm-9 ">
                            <input type="text" class="form-control @error('totalunit') is-invalid 
                            @enderror" id="totalunit" placeholder="Masukan Total Unit" name="totalunit" value="{{$perum->totalunit}}">
                      @error('totalunit')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                          </div>
                        </div>
                          <div class="form-group row">
                            <label for="luaslahan" class="col-sm-3 col-form-label">Luas lahan</label>
                            <div class="col-sm-9 ">
                              <input type="text" class="form-control @error('luaslahan') is-invalid 
                              @enderror" id="luaslahan" placeholder="Masukan Luas Perumahan" name="luaslahan" value="{{$perum->luaslahan}}">
                      @error('luaslahan')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="foto" class="col-sm-3 col-form-label"> Foto</label>
                            <div class="col-sm-7 ">
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{ old('foto')}}">
                                @error('foto')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>  
                          </div>
                            <button type="submit" class="btn btn-primary btn-block py-2"> Ubah Data</button>
                    <a href="/dataperumahan" class="btn btn-secondary btn-block py-2">Kembali</a>
                       
            </form>
        </div>
    </div>
          
    </div>
    @endsection