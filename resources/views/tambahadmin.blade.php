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
            <h4> Form Tambah Admin </h4>
        </div>

</div>
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
                            <div class="card-footer text-center">
                              <a href="/datakonsumen" class="btn btn-secondary">Kembali</a>      
                              <button type="submit" class="btn btn-primary">Tambah Data</button>
                      </div>
            </form>
        </div>
    </div>
          
    </div>
    @endsection