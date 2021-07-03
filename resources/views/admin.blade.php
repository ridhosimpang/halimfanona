<!-- /navbar -->
@extends('layout.tema')
@section('title', 'PT. Halim Fanona')
   
@section('container')
<!-- /subnavbar -->
<div class="section-header">
    <h1>Dashboard</h1>
</div>
<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                <i class="fas fa-home"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Lokasi Perumahan</h4>
                  </div>
                  <div class="card-body">
                    {{$dataPerumahan->count()}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                <i class="fab fa-wpforms"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Pengajuan Berkas</h4>
                  </div>
                  <div class="card-body">
                    {{$dataPengajuan}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                <i class="fas fa-hand-holding-usd"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Sudah Terjual</h4>
                  </div>
                  <div class="card-body">
                    {{$dataPenjualan}} Unit
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                <i class="fas fa-hand-holding"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Belum Terjual</h4>
                  </div>
                  <div class="card-body">
                    {{$belumTerjual}} Unit
                  </div>
                </div>
              </div>
            </div>                  
          </div>
          <div class="card">
                <div class="card-header">
                  <h4>Project Perumahan</h4>
                </div>
                <div class="card-body">
                  @forelse ($dataPerumahan as $perumahan)
                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">{{hitungUnit($perumahan->id)}} Unit</div>
                    <div class="font-weight-bold mb-1">{{$perumahan->nama}}</div>
                    <div class="progress" data-height="3" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" data-width="{{terjual($perumahan->id)}}%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                    </div>                          
                  </div>
                  @empty
                      
                  @endforelse
                </div>
              </div>
              
              
@endsection
