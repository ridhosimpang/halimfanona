@extends('layout.tema')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection
@section('container')

<!-- /subnavbar -->
<div class="section-header">
        <h1>Data Konsumen</h1>
        {{-- <a href="datakonsumen/tambahkonsumen" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data Konsumen</a> --}}
</div>

@if (session('status'))
<div class="alert alert-success">
    {{ session('status')}}
</div>
@endif
<div class="card">
    <div class="card-header">
        <h4> Daftar Perumahan </h4>
</div>
<div class="card-body">
<table class="table table-hover" id="table">
    <thead>
      <tr>
        <th scope="col">No </th>
        <th scope="col">Nama Perumahan</th>
        <th scope="col">Tipe Rumah</th>
        <th scope="col">Jumlah Kavling</th>
        <th scope="col">Jumlah Pembelian</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
            <tbody>
                @foreach ($perumahan as $ks)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{$ks->nama}}</td>
                    <td>{{$ks->tiperumah}}</td>
                    <td>{{ hitungUnit($ks->id)}} Unit</td>
                    <td>{{unitTerjual($ks->id)}} Unit</td>
                    <td>
                            <a href="/konsumenPerumahan/{{$ks->id}}" class="btn btn-info" >Lihat Konsumen</a>
                        </td>
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
    $('#table').DataTable({
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