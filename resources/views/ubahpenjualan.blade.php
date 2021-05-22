@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    <div class="col-10">
        <center> <h1>FORM UBAH DATA PENJUALAN</h1> </center>
    
        <div class="card-body">
                    
            <form method="post" action="/datapenjualan/{{ $penjualan->id }}">
              @method('patch')
                @csrf
                  <div class="form-group">
                    <label for="nama_perumahan" class="col-sm-3 col-form-label">Nama Perumahan</label>
                    <div class="col-sm-9 ">
                      <input type="text" class="form-control @error('nama_perumahan') is-invalid
                       @enderror" id="nama_perumahan" placeholder="Masukan Nama Perumahan" name="nama_perumahan" value="{{$penjualan->nama_perumahan}}">
                      @error('nama_perumahan')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                    <div class="form-group">
                      <label for="blok" class="col-sm-3 col-form-label">Blok</label>
                      <div class="col-sm-9 ">
                        <input type="text" class="form-control @error('blok') is-invalid 
                        @enderror" id="blok" placeholder="Masukan Blok Rumah" name="blok" value="{{$penjualan->blok}}">
                      @error('blok')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="no" class="col-sm-3 col-form-label">No</label>
                        <div class="col-sm-9 ">
                          <input type="text" class="form-control @error('no') is-invalid
                           @enderror" id="no" placeholder="Masukan No Rumah" name="no" value="{{$penjualan->no}}">
                      @error('no')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                        </div>
                      </div>
                        <div class="form-group">
                          <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                          <div class="col-sm-9 ">
                            <input type="text" class="form-control @error('nama') is-invalid 
                            @enderror" id="nama" placeholder="Masukan Nama Konsumen" name="nama" value="{{$penjualan->nama}}">
                      @error('nama')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                          </div>
                        </div>
                          <div class="form-group">
                            <label for="status" class="col-sm-3 col-form-label">Staus</label>
                            <div class="col-sm-9 ">
                              <input type="text" class="form-control @error('status') is-invalid 
                              @enderror" id="status" placeholder="Masukan Status Kavling" name="status" value="{{$penjualan->status}}">
                      @error('status')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                            </div>
                          </div>
                            <button type="submit" class="btn btn-primary btn-block py-2"> Ubah Data</button>
                    <a href="/datapenjualan" class="btn btn-secondary btn-block py-2">Kembali</a>
                       
            </form>
        </div>
    </div>
          
    </div>
    @endsection