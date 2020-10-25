@extends('layouts.home')

@section('title')
    <title>HelpDesk</title>
@endsection

@section('active')
    <li class="nav-item">
        <a class="nav-link active"style="font-size:20px;" href="{{ route('home.index') }}">{{ __('Home') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="font-size:20px;"href="{{route('home.report')}}">{{ __('Report') }}</a>
    </li>
    
    <li class="nav-item">
       <a class="nav-link "style="font-size:20px;" href="{{route('home.history')}}">{{ __('History')}}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"style="font-size:20px;" href="{{route('home.edit')}}"> {{__('Edit') }}</a>
    </li>
@endsection


@section('content_head')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('UserView/css/bg-01.jpg')}});height: 350px; min-height:300px;">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
          <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100" style="margin-top: -250px; font-size:50px;">HelpDesk </h1>
          <p data-aos="fade-up" data-aos="fade-up" data-aos-delay="">Tăng Minh Thông {{__('And') }} Huỳnh Nhựt Huy</p>
        </div>
      </div>
    </div>
  </div>
@endsection