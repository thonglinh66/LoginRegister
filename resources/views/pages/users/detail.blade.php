@extends('layouts.detail')

@section('title')
    <title>Details</title>
@endsection

@section('active')
    <li class="nav-item">
        <a class="nav-link " href="{{ route('home.index') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('home.report')}}">Report</a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link " href="{{route('home.history')}}">History</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('home.edit')}}">Edit account</a>
    </li>
@endsection


@section('content_head')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('images/hero_2.jpg')}});">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
        <h1 class="mb-4" data-aos="fade-up" data-aos-delay="">Details</h1>
          <p class="custom-breadcrumbs" data-aos="fade-up" data-aos-delay="100"><a href="{{ route('home.index') }}">Home</a> <span class="mx-3">/</span> Details</p>
        </div>
      </div>
    </div>
  </div>
@endsection