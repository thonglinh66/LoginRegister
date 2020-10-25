@extends('layouts.tech_history')

@section('title')
    <title>History</title>
@endsection

@section('active')
  <li class="nav-item">
        <a class="nav-link " style="font-size:20px;"href="{{ route('technicians.index') }}">{{ __('Home') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " style="font-size:20px;"href="{{route('technicians.work')}}">{{__('Work')}}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" style="font-size:20px;"href="{{route('technicians.history')}}">{{ __('History')}}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " style="font-size:20px;"href="{{route('technicians.edit')}}">{{__('Edit') }} </a>
    </li>
    
@endsection


@section('content_head')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('UserView/css/bg-01.jpg')}});height: 200px; min-height:100px;">
    
  </div>
@endsection