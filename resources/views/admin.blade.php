<!-- /navbar -->
@extends('layout.menuadmin')
@section('title', 'PT. Halim Fanona')
   
@section('container')
<!-- /subnavbar -->

<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Selamat Datang {{auth()->user()->name}}</h1>
    </div>
  </section>
@endsection
