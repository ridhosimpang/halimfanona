@extends('layout.menuadmin')
   
@section('container')

<!-- /subnavbar -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    <div class="col-10">
        <center><h1>KELOLA DATA ADMIN</h1></center>
        
               <center> <a href="/tambahadmin" class=" btn btn-info mb-2 ">Tambah Admin</a> </center>

@if (session('status'))
<div class="alert alert-success">
    {{ session('status')}}
</div>
@endif
<center>
<table class="table table-bordered">
    <thead class="thead-dark">
        <center>
            <table border="1" width="1100px">
                    <tr style="background-color: yellow;">

                <th scope="col" style="text-align: center">No </th>
                <th scope="col" style="text-align: center">Nama</th>
                <th scope="col" style="text-align: center">Email</th>
                <th scope="col" style="text-align: center">Aksi</th>
    
            </thead>
        </tr>
            <tbody>
                @foreach ($admin as $adm)
                <tr>
                    <th scope="row" style="text-align: center">{{ $loop->iteration}}</th>
                    <td align="center">{{ $adm->name}}</td>
                    <td align="center">{{ $adm->email}}</td>
                    <td align="center">
                        
                            <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#hapusdataadmin{{$adm->id}}" >Hapus</button>
                   
                            <div class="modal fade" id="hapusdataadmin{{$adm->id}}" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Data Admin</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Yakin Mau Dihapus</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                <form action="/hapusadmin/{{$adm->id}}" method="post" class="d-inline ">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Ya</button>
                                    </form>
                            </div>
                          </div>
                        </div>
                      </div>
                            
                        {{-- </form> --}}
                        </td>
                </tr>
                @endforeach
                </tbody>
</table>
</table>
</center>
    </div>
    </div>
</div>
@endsection