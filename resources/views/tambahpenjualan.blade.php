@extends('layout.menuadmin')
   
@section('container')

<!-- /subnavbar -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    <div class="col-10">
        <center> <h1>FORM TAMBAH DATA PENJUALAN</h1> </center>
    
        <div class="card-body">
                    
            <form method="POST" action="/datapenjualan">
                @csrf
                  <div class="form-group">
                    <label for="nama_perumahan" class="col-sm-3 col-form-label">Nama Perumahan</label>
                    <div class="col-sm-7 ">
                      <input type="text" class="form-control @error('nama_perumahan') is-invalid @enderror" id="nama_perumahan" placeholder="Masukan Nama Perumahan" name="nama_perumahan">
                      @error('nama_perumahan')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                    <div class="form-group">
                      <label for="blok" class="col-sm-3 col-form-label">Blok</label>
                      <div class="col-sm-7 ">
                        <input type="text" class="form-control @error('blok') is-invalid @enderror" id="blok" placeholder="Masukan Blok Rumah" name="blok">
                      @error('blok')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="no" class="col-sm-3 col-form-label">No</label>
                        <div class="col-sm-7 ">
                          <input type="text" class="form-control @error('no') is-invalid @enderror" id="no" placeholder="Masukan Nomor Rumah" name="no">
                      @error('no')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                        </div>
                      </div>
                        <div class="form-group">
                          <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                          <div class="col-sm-7 ">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Pembeli" name="nama">
                      @error('nama')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                          </div>
                        </div>
                                <div class="form-group">
                                    <label for="tglakad" class="col-sm-3 col-form-label">Tanggal Terjual</label>
                                    <div class="col-sm-7 ">
                                        <input type="date" class="form-control @error('tglakad') is-invalid @enderror" id="tglakad" name="tglakad" value="{{ old('tglakad')}}">
                                        @error('tglakad')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>  
                                </div>
                                <label class="col-sm-3 col-form-label">Status Kavling</label>
                                <div class="col-sm-7 ">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="status1" value="Terjual Subsidi" checked>
                                        <label class="form-check-label" for="status1">
                                            Terjual Subsidi
                                          </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status2" value="Terjual Komersil">
                            <label class="form-check-label" for="status2">
                              Terjual Komersil
                            </label>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12 ">
                                <button type="submit" class="btn btn-primary center-block"> Tambah Data</button>
                                <a href="/datapenjualan" class="btn btn-secondary center-block">Kembali</a>
                        </div>
                      </div>
                            </form>
        </div>
    </div>
          
    </div>
    @endsection