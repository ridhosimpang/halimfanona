@extends('layout.menuadmin')
   
@section('container')

<!-- /subnavbar -->
<div class="col-sm-8 col-sm-offset-3 col-lg-100 col-lg-offset-3 main">
    <div class="row">
    <div class="col-10">
        <center> <h1>FORM TAMBAH DATA KONSUMEN</h1> </center>
    
        <div class="card-body">
                    
            <form method="POST" action="/datakonsumen">
                @csrf
                  <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Konsumen</label>
                    <div class="col-sm-9 ">
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Konsumen" name="nama">
                      @error('nama')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                    <div class="form-group row">
                      <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                      <div class="col-sm-9 ">
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan NIK" name="nik">
                      @error('nik')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                      <div class="form-group row">
                        <label for="tmptlhr" class="col-sm-3 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9 ">
                          <input type="text" class="form-control @error('tmptlhr') is-invalid @enderror" id="tmptlhr" placeholder="Masukan Tempat Lahir" name="tmptlhr">
                      @error('tmptlhr')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tgllhr" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9 ">
                          <input type="date" class="form-control @error('tgllhr') is-invalid @enderror" id="tgllhr" name="tgllhr" value="{{ old('tgllhr')}}">
                          @error('tgllhr')
                            <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                        </div>  
                      </div>
                        <div class="form-group row">
                          <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                          <div class="col-sm-9 ">
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat" name="alamat">
                      @error('alamat')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                          </div>
                        </div>
                        <fieldset class="form-group row">
                            {{-- <div class="row"> --}}
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9 ">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="jk1" value="Laki Laki" checked>
                                        <label class="form-check-label" for="jk1">
                                            Laki-laki
                                          </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="jk2" value="Perempuan">
                            <label class="form-check-label" for="jk2">
                              Perempuan
                            </label>
                          </div>
                      </div>
                  {{-- </div> --}}
              </fieldset>
              <fieldset class="form-group row">
                {{-- <div class="row"> --}}
                    <label class="col-sm-3 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-9 ">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status_perkawinan" id="status_perkawinan1" value="Kawin" checked>
                            <label class="form-check-label" for="status_perkawinan1">
                                Kawin
                              </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_perkawinan" id="status_perkawinan2" value="Belum Kawin">
                <label class="form-check-label" for="status_perkawinan2">
                  Belum Kawin
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_perkawinan" id="status_perkawinan3" value="Cerai Mati">
                <label class="form-check-label" for="status_perkawinan3">
                  Cerai Mati
              </label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status_perkawinan" id="status_perkawinan4" value="Cerai Hidup">
                <label class="form-check-label" for="status_perkawinan4">
                  Cerai Hidup
                </label>
              </div>
          </div>
      {{-- </div> --}}
  </fieldset>
              <fieldset class="form-group row">
                {{-- <div class="row"> --}}
                    <label class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9 ">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="agama" id="agama1" value="Islam" checked>
                            <label class="form-check-label" for="agama1">
                                Islam
                              </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="agama" id="agama2" value="Protestan">
                <label class="form-check-label" for="agama2">
                  Protestan
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="agama" id="agama3" value="Katolik">
                <label class="form-check-label" for="agama3">
                  Katolik
              </label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="agama" id="agama4" value="Hindu">
                <label class="form-check-label" for="agama4">
                  Hindu
                </label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="agama" id="agama5" value="Buddha">
                <label class="form-check-label" for="agama5">
                  Buddha
                </label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="agama" id="agama6" value="Khonghucu">
                <label class="form-check-label" for="agama6">
                  Khonghucu
                </label>
              </div>
          </div>
      {{-- </div> --}}
  </fieldset>
  
                          <div class="form-group row">
                            <label for="namaperumahan" class="col-sm-3 col-form-label">Nama Perumahan</label>
                            <div class="col-sm-9 ">
                              <input type="text" class="form-control @error('namaperumahan') is-invalid @enderror" id="namaperumahan" placeholder="Masukan Nama Perumahan" name="namaperumahan">
                      @error('namaperumahan')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="blok" class="col-sm-3 col-form-label">Blok</label>
                            <div class="col-sm-9 ">
                              <input type="text" class="form-control @error('blok') is-invalid @enderror" id="blok" placeholder="Masukan Blok" name="blok">
                      @error('blok')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="no" class="col-sm-3 col-form-label">Nomor</label>
                            <div class="col-sm-9 ">
                              <input type="text" class="form-control @error('no') is-invalid @enderror" id="no" placeholder="Masukan Nomor" name="no">
                      @error('no')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="nohp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-9 ">
                              <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" placeholder="Masukan Nomor Handphone" name="nohp">
                      @error('nohp')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="foto" class="col-sm-3 col-form-label"> Foto</label>
                            <div class="col-sm-9 ">
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{ old('foto')}}">
                                @error('foto')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>  
                          </div>
                          <div class="form-group row">
                            <label for="fotoktp" class="col-sm-3 col-form-label"> Foto KTP</label>
                            <div class="col-sm-9 ">
                                <input type="file" class="form-control @error('fotoktp') is-invalid @enderror" id="fotoktp" name="fotoktp" value="{{ old('fotoktp')}}">
                                @error('fotoktp')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>  
                          </div>
                          <div class="form-group row">
                            <label for="fotokk" class="col-sm-3 col-form-label"> Foto KK</label>
                            <div class="col-sm-9 ">
                                <input type="file" class="form-control @error('fotokk') is-invalid @enderror" id="fotokk" name="fotokk" value="{{ old('fotokk')}}">
                                @error('fotokk')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>  
                          </div>
                          <div class="form-group row">
                            <label for="fotonpwp" class="col-sm-3 col-form-label"> Foto NPWP</label>
                            <div class="col-sm-9 ">
                                <input type="file" class="form-control @error('fotonpwp') is-invalid @enderror" id="fotonpwp" name="fotonpwp" value="{{ old('fotonpwp')}}">
                                @error('fotonpwp')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>  
                          </div>
                          <div class="form-group row">
                            <label for="fotobukunikah" class="col-sm-3 col-form-label"> Foto Buku Nikah</label>
                            <div class="col-sm-9 ">
                                <input type="file" class="form-control @error('fotobukunikah') is-invalid @enderror" id="fotobukunikah" name="fotobukunikah" value="{{ old('fotobukunikah')}}">
                                @error('fotobukunikah')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>  
                          
                            <button type="submit" class="btn btn-primary btn-block py-2">Tambah Data</button>
                    <a href="/datakonsumen" class="btn btn-secondary btn-block py-2">Kembali</a>
                         
            </form>
        </div>
    </div>
          
    </div>
    @endsection