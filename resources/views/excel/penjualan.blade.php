<table>
  <tr>
    <th colspan="5" style="text-align: center; font-weight:bold">Data Penjualan Perumahan</th>
  </tr>
  <tr>
    <th>No</th>
    <th>Nama Perumahan</th>
    <th>Blok</th>
    <th>Nama Konsumen</th>
    <th>Tanggal Akad</th>
  </tr>
  @forelse ($penjualan as $pj)
  <tr>
    <td>{{ $loop->iteration}}</td>
    <td>{{ $pj->perumahan->nama}}</td>
    <td>{{ $pj->unit->blok}}</td>
    <td>{{ $pj->konsumen->nama_konsumen}}</td>
    <td>{{ $pj->tglakad}}</td>
  </tr>
    @empty
        Tidak ada penjualan
    @endforelse
</table>