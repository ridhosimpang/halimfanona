@extends('layout.tema')
@section('menuPengajuan')
    active
@endsection
@section('container')

<!-- /subnavbar -->
<div class="section-header">
    <a href="{{route('tambahPengajuan')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data Pengajuan</a>
</div>
        
@if (session('status'))
<div class="alert alert-success">
    {{ session('status')}}
</div>
@endif
<div class="card">
    <div class="card-header">
        <h4> Data Pengajuan Konsumen </h4>
</div>
<div class="card-body">
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No </th>
        <th scope="col">Perumahan</th>
        <th scope="col">Blok</th>
        <th scope="col">Konsumen</th>
        <th scope="col">Status</th>
        {{-- <th scope="col">Jadwal Wawancara</th> --}}
        <th scope="col">Jadwal Akad</th>
        {{-- <th scope="col">Aksi</th> --}}
      </tr>
    </thead>
            <tbody>
                @foreach ($pengajuan as $pj)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $pj->perumahan->nama}}</td>
                    <td>{{ $pj->unit->blok}}</td>
                    <td>{{ $pj->nama_konsumen}}</td>
                    <td>
                        <form action="datapengajuan/{{$pj->id }}" method="post" class="">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                              <select class="custom-select" id="status{{$pj->id}}" name="statusBerkas" data-id="{{$pj->id}}">
                                <option selected>{{$pj->status_berkas}}</option>
                                <option value="Melengkapi Berkas">Melengkapi Berkas</option>
                                <option value="Berkas Dikantor">Berkas Dikantor</option>
                                <option value="Belum Wawancara">Belum Wawancara</option>
                                <option value="Sudah Wawancara">Sudah Wawancara</option>
                                <option value="On Proses">On Proses</option> 
                                <option value="SP3K" >SP3K</option> 
                                <option value="Akad Kredit">Akad Kredit</option>
                              </select>
                              <div class="input-group-append">
                                <button class="btn btn-info btn-sm" type="submit">Simpan</button>
                              </div>
                            </div>
                          </div>
                        </form>
                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                        <script>
                        $(document).ready(function(){ 
                                $('#status{!!json_encode($pj->id) !!}').change(function() { //jQuery Change Function
                                var opval = $(this).val(); //Get value from select element
                                // var id = $(this).data('id');
                                // document.getElementById('formAkad').action='/datapengajuan/'+id;
                                // document.getElementById('formTransfer').action='/transferPengajuan/'+id;
                                if(opval=="SP3K"){ //Compare it and if true
                                    $('#modalAkad{!!json_encode($pj->id) !!}').modal("show"); //Open Modal
                                }
                                if(opval=="Akad Kredit"){ //Compare it and if true
                                    $('#modalTransfer{!!json_encode($pj->id) !!}').modal("show"); //Open Modal
                                }
                            });
                        });
                        </script>
                          {{-- <script>
                            function cekOption(){
                              var id = {!!json_encode($pj->id) !!}
                              var opval = $('#status{!!json_encode($pj->id) !!}').val();
                              if(opval=="SP3K"){ //Compare it and if true
                                    $('#modalAkad{!!json_encode($pj->id) !!}').modal("show"); //Open Modal
                                }
                                if(opval=="Akad Kredit"){ //Compare it and if true
                                    $('#modalTransfer{!!json_encode($pj->id) !!}').modal("show"); //Open Modal
                                }
                            }
                          </script> --}}
                          <!-- Modal -->
                          <div class="modal fade" id="modalAkad{{$pj->id}}" tabindex="-1" role="dialog" aria-labelledby="modalAkadTitle" aria-hidden="true" data-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Input Jadwal Akad {{$pj->nama_konsumen}}</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/datapengajuan/{{$pj->id}}" method="post" class="" id="formAkad">
                                        @method('patch')
                                        @csrf
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Jadwal Akad</label>
                                            <div class="col-sm-9">
                                                <input type="hidden" name="statusBerkas" value="SP3K">
                                                <input type="date" class="form-control" id="inputEmail3" placeholder="Email" name="jadwalAkad">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submin" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                              </div>
                            </div>
                          </div>
                          <!-- Modal Transfer-->
                          <div class="modal fade" id="modalTransfer{{$pj->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="modalTransferTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Transfer Data Pengajuan?</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/transferPengajuan/{{$pj->id}}" method="post" class="" id="formTransfer">
                                        @csrf
                                        <button type="submin" class="btn btn-primary">Transfer</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </form>
                              </div>
                            </div>
                          </div>
                    </td>
                    <td>
                        @if($pj->jadwalAkad != null)
                        {{Carbon\carbon::parse($pj->jadwalAkad)->isoFormat('D MMMM Y')}}
                        
                        @else
                        --
                        @endif
                    </td>
                    {{-- <td>
                        <button type="submit" class="btn btn-info">Detail</button>
                    </td> --}}
                </tr>
                @endforeach
                </tbody>
</table>
    </div>
    </div>
</div>

@endsection