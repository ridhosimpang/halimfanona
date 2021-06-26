@extends('layout.tema')
   
@section('container')
@section('menuPerumahan')
    active
@endsection

<div class="section-header">
    <a href="dataperumahan/tambahperumahan"class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data Perumahan</a>
</div>
        
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4> Data Perumahan </h4>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No </th>
                <th scope="col">Nama Perumahan</th>
                <th scope="col">Tipe Rumah</th>
                <th scope="col">Jumlah Kavling</th>
                <th scope="col">Jumlah Rumah</th>
                <th scope="col">Luas Lahan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($perumahan as $perum)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $perum->nama}}</td>
                    <td>{{ $perum->tiperumah}}</td>
                    <td>{{ hitungUnit($perum->id)}}</td>
                    <td></td>
                    <td>{{ $perum->luaslahan}}</td>
                    <td>
                        <a href="dataperumahan/{{$perum->id}}/lihat" class="btn btn-info">Lihat</a>
                        <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#hapusdataperumahan{{$perum->id}}" >Hapus</button>
                        <div class="modal fade" id="hapusdataperumahan{{$perum->id}}" data-backdrop="false" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Data Perumahan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Yakin Mau Dihapus</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                <form action="/dataperumahan/{{$perum->id}}" method="post" class="d-inline ">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Ya</button>
                                    </form>
                            </div>
                          </div>
                        </div>
                      </div>
                        </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection