<!-- /navbar -->
@extends('layout.tema')
@section('title', 'PT. Halim Fanona')
   
@section('container')
<!-- /subnavbar -->
<div class="section-header sticky-top">
  <div class="container">
    <h1>Selamat Datang {{auth()->user()->name}}</h1>
  </div>
</div>

@endsection
