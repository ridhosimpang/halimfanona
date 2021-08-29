@extends('layout.tema')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection
@section('container')

<!-- /subnavbar -->
<div class="section-header bg-primary">
          
        @if(auth()->user()->role=='admin')
               
@endif
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
            <a href="{{route('exportPenjualan')}}" class="btn btn-success "> <i class="fas fa-file-excel    "></i> Export</a>
        </div>
</div>
<div class="card-body">
<table class="table table-hover" id="tabelpenjualan">
    <thead>
      <tr>
        <th scope="col">No </th>
        <th scope="col">Nama Perumahan</th>
        <th scope="col">Blok</th>
        <th scope="col">Nama Konsumen</th>
        <th scope="col">Tanggal Akad</th>
        <th scope="col">Status Kavling</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
            <tbody>
                @foreach ($penjualan as $pj)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $pj->perumahan->nama}}</td>
                    <td>{{ $pj->unit->blok}}</td>
                    <td>{{ $pj->konsumen->nama_konsumen}}</td>
                    <td>{{ $pj->tglakad}}</td>
                    <td>{{ $pj->status}}</td>
                    @if(auth()->user()->role=='admin')
                    <td>
                        
                        {{-- <form action="datapenjualan/{{$penjualan->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf --}}
                            <a href="ubahpenjualan/{{$pj->id}}/edit" class="btn btn-info">Edit</a>
                            {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                            <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#hapusdatapenjualan" >Hapus</button>
                   
                            <div class="modal fade" id="hapusdatapenjualan" data-backdrop="false" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Data Penjualan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Yakin Mau Dihapus</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                <form action="/datapenjualan/{{$pj->id}}" method="post" class="d-inline ">
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
                        @endif
                </tr>
                @endforeach
                </tbody>
</table>
    </div>
    </div>
</div>
@endsection
@section('script')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script> --}}
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script type="text/javascript" >
    $('#tabelpenjualan').DataTable({
      "pageLength":     25,
      "language": {
        "decimal":        "",
        "emptyTable":     "Tidak ada data tersedia",
        "info":           "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
        "infoEmpty":      "Menampilkan 0 sampai 0 dari 0 data",
        "infoFiltered":   "(difilter dari _MAX_ total data)",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "Menampilkan _MENU_ data",
        "loadingRecords": "Loading...",
        "processing":     "Processing...",
        "search":         "Cari:",
        "zeroRecords":    "Tidak ada data ditemukan",
        "paginate": {
            "first":      "Awal",
            "last":       "Akhir",
            "next":       "Selanjutnya",
            "previous":   "Sebelumnya"
        },
        }
    });
</script>
@endsection