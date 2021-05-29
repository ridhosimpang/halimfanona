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
          <div class="card">
                <div class="card-header">
                  <h4>Project Perumahan</h4>
                </div>
                <div class="card-body">
                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">33 Rumah</div>
                    <div class="font-weight-bold mb-1">Fanona Residence 1</div>
                    <div class="progress" data-height="3" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" data-width="70%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                    </div>                          
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">54 Rumah</div>
                    <div class="font-weight-bold mb-1">Fanona Residence 2</div>
                    <div class="progress" data-height="3" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" data-width="20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">21 Rumah</div>
                    <div class="font-weight-bold mb-1">Fanona Residence 3</div>
                    <div class="progress" data-height="3" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" data-width="90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 58%;"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">350 Rumah</div>
                    <div class="font-weight-bold mb-1">Griya Halim Fanona 1</div>
                    <div class="progress" data-height="3" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" data-width="60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 36%;"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">43 Rumah</div>
                    <div class="font-weight-bold mb-1">Griya Halim Fanona 2</div>
                    <div class="progress" data-height="3" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" data-width="70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 28%;"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">131 Rumah</div>
                    <div class="font-weight-bold mb-1">Griya Halim Barokah 1</div>
                    <div class="progress" data-height="3" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" data-width="70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 28%;"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">120 Rumah</div>
                    <div class="font-weight-bold mb-1">Griya Halim Barokah 2</div>
                    <div class="progress" data-height="3" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" data-width="10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                    </div>
                  </div>
                </div>
              </div>
              
              
@endsection
