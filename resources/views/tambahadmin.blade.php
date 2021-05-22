@extends('layout.tema')
   
@section('container')

<!-- /subnavbar -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    <div class="col-10">
        <center> <h1>FORM TAMBAH DATA ADMIN</h1> </center>
    
        <div class="card-body">
                    
            <form method="POST" action="/simpanadmin">
                @csrf
                  <div class="form-group">
                    <label for="name" class="col-sm-3 col-form-label">Nama Admin</label>
                    <div class="col-sm-7 ">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan Nama" name="name">
                      @error('name')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                   
                      <div class="form-group">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-7 ">
                          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email">
                      @error('email')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                        </div>
                      </div>
                        <div class="form-group">
                          <label for="password" class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-7 ">
                            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukan Password" name="password">
                      @error('password')
                                <div class="invalid-feedback " style="color:red">{{$message}}</div>
                        @enderror
                          </div>
                        </div>
                            <button type="submit" class="btn btn-primary btn-block py-2"> Tambah Data</button>
                    <a href="/dataperumahan" class="btn btn-secondary btn-block py-2">Kembali</a>
                       
            </form>
        </div>
    </div>
          
    </div>
    @endsection