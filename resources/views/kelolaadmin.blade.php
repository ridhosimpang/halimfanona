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
            <h4> Data Penjualan </h4>
        </div>
        <div class="col-2">
            <a href="/tambahadmin" class=" btn btn-info mb-2 ">Tambah Admin</a>
        </div>
</div>
<div class="card-body">
<table class="table table-hover" id="tabelpenjualan">
    <thead>
                    <tr>

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
    </div>
    </div>
</div>
    </div>
</div>
@endsection