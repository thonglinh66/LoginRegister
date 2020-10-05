@extends('layouts.work')

@section('title')
    <title>HelpDesk</title>
@endsection

@section('active')
<li class="nav-item">
        <a class="nav-link " href="{{ route('technicians.index') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{route('technicians.work')}}">Work</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('technicians.history')}}">History</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('technicians.edit')}}">Edit account</a>
    </li>
@endsection


@section('content_head')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('images/hero_2.jpg')}});">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
        <h1 class="mb-4" data-aos="fade-up" data-aos-delay="">Work</h1>
          <p class="custom-breadcrumbs" data-aos="fade-up" data-aos-delay="100"><a href="{{ route('technicians.index') }}">Home</a> <span class="mx-3">/</span> Work</p>
        </div>
      </div>
    </div>
  </div>
@endsection