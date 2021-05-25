<!-- /navbar -->
@extends('layout.tema')
@section('title', 'PT. Halim Fanona')
   
@section('container')
<!-- /subnavbar -->
<div class="section-header">
    <h1>Selamat Datang {{auth()->user()->name}}</h1>
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
                    10
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
                    42
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
                    1,201
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
                    47
                  </div>
                </div>
              </div>
            </div>                  
          </div>
@endsection
