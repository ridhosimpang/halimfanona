@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="col-sm-8 col-sm-offset-3 col-lg-100 col-lg-offset-3 main">
    <div class="row">
    <div class="col-10">
        <center> <h1>FORM UBAH DATA KONSUMEN</h1> </center>
    
        <div class="card-body">
                    
            <form method="post" action="/datakonsumen/{{ $konsumen->id }}">
              @method('patch')
                @csrf
                  <div class="form-group row">
                    <label for="nama_konsumen" class="col-sm-3 col-form-label">Nama Konsumen</label>
                    <div class="col-sm-9 ">
                      <input type="text" class="form-control @error('nama_konsumen') is-invalid
                       @enderror" id="nama_konsumen" placeholder="Masukan Nama Konsumen" name="nama_konsumen" value="{{$konsumen->nama_konsumen}}">
                      @error('nama_konsumen')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                    <div class="form-group row">
                      <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                      <div class="col-sm-9 ">
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan NIK" name="nik" value="{{$konsumen->nik}}">
                      @error('nik')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                      <div class="form-group row">
                        <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9 ">
                          <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="Masukan Tempat Lahir" name="tempat_lahir" value="{{$konsumen->tempat_lahir}}">
                      @error('tempat_lahir')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tgllhr" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9 ">
                          <input type="date" class="form-control @error('tgllhr') is-invalid @enderror" id="tgllhr" name="tgllhr" value="{{$konsumen->tanggal_lahir}}">
                          @error('tgllhr')
                            <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                        </div>  
                      </div>
                        <div class="form-group row">
                          <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                          <div class="col-sm-9 ">
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat" name="alamat" value="{{$konsumen->alamat}}">
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
                                        <input class="form-check-input" type="radio" name="jk" id="jk1" value="Laki Laki" @if($konsumen->jk=='Laki Laki') checked @endif>
                                        <label class="form-check-label" for="jk1">
                                            Laki-laki
                                          </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="jk2" value="Perempuan" @if($konsumen->jk=='Perempuan') checked @endif>
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
                            <input class="form-check-input" type="radio" name="status_perkawinan" id="status_perkawinan1" value="Kawin" @if($konsumen->status_perkawinan=='Kawin') checked @endif>
                            <label class="form-check-label" for="status_perkawinan1">
                                Kawin
                              </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_perkawinan" id="status_perkawinan2" value="Belum Kawin" @if($konsumen->status_perkawinan=='Belum Kawin') checked @endif>
                <label class="form-check-label" for="status_perkawinan2">
                  Belum Kawin
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_perkawinan" id="status_perkawinan3" value="Cerai Mati" @if($konsumen->status_perkawinan=='Cerai Mati') checked @endif>
                <label class="form-check-label" for="status_perkawinan3">
                  Cerai Mati
              </label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status_perkawinan" id="status_perkawinan4" value="Cerai Hidup" @if($konsumen->status_perkawinan=='Cerai Hidup') checked @endif>
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
                            <input class="form-check-input" type="radio" name="agama" id="agama1" value="Islam" @if($konsumen->agama=='Islam') checked @endif>
                            <label class="form-check-label" for="agama1">
                                Islam
                              </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="agama" id="agama2" value="Protestan" @if($konsumen->agama=='Protestan') checked @endif>
                <label class="form-check-label" for="agama2">
                  Protestan
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="agama" id="agama3" value="Katolik" @if($konsumen->agama=='Katolik') checked @endif>
                <label class="form-check-label" for="agama3">
                  Katolik
              </label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="agama" id="agama4" value="Hindu" @if($konsumen->agama=='Hindu') checked @endif>
                <label class="form-check-label" for="agama4">
                  Hindu
                </label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="agama" id="agama5" value="Buddha" @if($konsumen->agama=='Buddha') checked @endif>
                <label class="form-check-label" for="agama5">
                  Buddha
                </label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="agama" id="agama6" value="Khonghucu" @if($konsumen->agama=='Khonghucu') checked @endif>
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
      <input type="hidden" name="" id="perum">
      <select class="cari form-control" style="width:300px;height:calc(1.5em + .75rem + 2px);" name="perumahan_id">
        <option value="{{$konsumen->perumahan->id}}">{{$konsumen->perumahan->nama}}</option></select>
      {{-- <input type="text" class="form-control @error('objek') is-invalid @enderror" name="objek" value="{{old('objek')}}"> --}}
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
      <script type="text/javascript">
        $('.cari').select2({
                            placeholder: 'Pilih Perumahan...',
                            ajax: {
                            url: '/cariPerumahan',
                            dataType: 'json',
                            delay: 250,
                            processResults: function (data) {
                                return {
                                results:  $.map(data, function (item) {
                                    return {
                                    text: item.nama, /* memasukkan text di option => <option>namaSurah</option> */
                                    id: item.id /* memasukkan value di option => <option value=id> */
                                    }
                                })
                                };
                            },
                            cache: true
                            }
                        });
        $('.cari').change(function(){
          if($(this).val()!= ''){
            var perumahan_id = $(this).val();
            document.getElementById('perum').value=perumahan_id;
          }
        });
        </script>
    </div>
  </div>
  <div class="form-group row">
    <label for="blok" class="col-sm-3 col-form-label">Blok</label>
    <div class="col-sm-9 ">
      <select class="cariBlok form-control" style="width:300px;height:calc(1.5em + .75rem + 2px);" name="unit_id">
      <option value="{{$konsumen->unit->id}}">{{$konsumen->unit->blok}}</option>
      </select>
      {{-- <input type="text" class="form-control @error('objek') is-invalid @enderror" name="objek" value="{{old('objek')}}"> --}}
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
      <script type="text/javascript">
        var id = document.getElementById('perum').value;
        // console.log(id);
        $('.cariBlok').select2({
                            placeholder: 'Pilih Blok...',
                            ajax: {
                            url: '/cariBlok',
                            dataType: 'json',
                            delay: 250,
                            data: function (params) {
                              return {
                                q: params.term, // search term
                                id:document.getElementById('perum').value
                              };
                            },
                            processResults: function (data) {
                                return {
                                results:  $.map(data, function (item) {
                                    return {
                                    text: item.blok, /* memasukkan text di option => <option>namaSurah</option> */
                                    id: item.id /* memasukkan value di option => <option value=id> */
                                    }
                                })
                                };
                            },
                            cache: true
                            }
                        });
        </script>
  </div>
  </div>
                          <div class="form-group row">
                            <label for="nohp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-9 ">
                              <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp" value="{{$konsumen->no_hp}}">
                              @error('nohp')
                                      <div class="invalid-feedback " style="color:red">{{$message}}</div>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="foto" class="col-sm-3 col-form-label"> Ganti Foto</label>
                            <div class="col-sm-9 ">
                              <img width="200px" src="{{Storage::url($konsumen->foto)}}" alt="">
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{ old('foto')}}">
                                @error('foto')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>  
                          </div>
                          <div class="form-group row">
                            <label for="fotoktp" class="col-sm-3 col-form-label"> Ganti Foto KTP</label>
                            <div class="col-sm-9 ">
                              <img width="200px" src="{{Storage::url($konsumen->fotoktp)}}" alt="">
                              <input type="file" class="form-control @error('fotoktp') is-invalid @enderror" id="fotoktp" name="fotoktp" value="{{ old('fotoktp')}}">
                              @error('fotoktp')
                              <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                            </div>  
                          </div>
                          <div class="form-group row">
                            <label for="fotokk" class="col-sm-3 col-form-label"> Ganti Foto KK</label>
                            <div class="col-sm-9 ">
                              <img width="200px" src="{{Storage::url($konsumen->fotokk)}}" alt="">
                              <input type="file" class="form-control @error('fotokk') is-invalid @enderror" id="fotokk" name="fotokk" value="{{ old('fotokk')}}">
                              @error('fotokk')
                              <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                            </div>  
                          </div>
                          <div class="form-group row">
                            <label for="fotonpwp" class="col-sm-3 col-form-label"> Ganti Foto NPWP</label>
                            <div class="col-sm-9 ">
                              <img width="200px" src="{{Storage::url($konsumen->fotonpwp)}}" alt="">
                              <input type="file" class="form-control @error('fotonpwp') is-invalid @enderror" id="fotonpwp" name="fotonpwp" value="{{ old('fotonpwp')}}">
                              @error('fotonpwp')
                              <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                            </div>  
                          </div>
                          <div class="form-group row">
                            <label for="fotobukunikah" class="col-sm-3 col-form-label"> Ganti Foto Buku Nikah</label>
                            <div class="col-sm-9 ">
                              <img width="200px" src="{{Storage::url($konsumen->fotobukunikah)}}" alt="">
                              <input type="file" class="form-control @error('fotobukunikah') is-invalid @enderror" id="fotobukunikah" name="fotobukunikah" value="{{ old('fotobukunikah')}}">
                              @error('fotobukunikah')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>  
                          
                              <button type="submit" class="btn btn-primary btn-block py-2"> Ubah Data</button>
                              <a href="/datakonsumen" class="btn btn-secondary btn-block py-2">Kembali</a>
                         
            </form>
        </div>
    </div>
          
    </div>
    @endsection