@extends('layouts.technicians')

@section('title')
    <title>HelpDesk</title>
@endsection

@section('active')
    <li class="nav-item">
        <a class="nav-link active" href="{{route('technicians.index') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('technicians.work')}}">Work</a>
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
          <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">HelpDesk </h1>
          <p data-aos="fade-up" data-aos="fade-up" data-aos-delay="">A website design by Tăng Minh Thông_B1704774 and Huỳnh Nhựt Huy_B1704812</p>
        </div>
      </div>
    </div>
  </div>
@endsection