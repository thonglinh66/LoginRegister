@extends('layouts.detail')

@section('title')
    <title>Details</title>
@endsection

@section('active')
    <li class="nav-item">
        <a class="nav-link " style="font-size:20px;"href="{{ route('home.index') }}">{{ __('Home') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " style="font-size:20px;"href="{{route('home.report')}}">{{ __('Report') }}</a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link "style="font-size:20px;" href="{{route('home.history')}}">{{ __('History')}}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"style="font-size:20px;" href="{{route('home.edit')}}">{{__('Edit') }} </a>
    </li>
@endsection


@section('content_head')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('UserView/css/bg-01.jpg')}});height: 200px; min-height:100px;">
    
  </div>
@endsection