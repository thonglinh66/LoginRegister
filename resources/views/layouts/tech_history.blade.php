<!DOCTYPE html>
<html lang="en">
<head>
@yield('title')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display:400,400i|Roboto+Mono&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">


  <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('css/aos.css')}}">
  <link rel="stylesheet">

    <link rel="stylesheet" href="{{asset('cssjobs/css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{asset('cssjobs/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('cssjobs/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('cssjobs/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('cssjobs/fonts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('cssjobs/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('cssjobs/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('cssjobs/css/Business_Home_View.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('cssjobs/css/style.css')}}">   
   <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>


<body>

@include('layouts/user/header')
  <!-- END header -->

   @yield('content_head')

   <div class="section portfolio-section"  style=" height:10px; margin: 0px; display:block;">
    <div class="container"style="height: 0px;">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">History</h2>
          <p>Store user response history.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- content body -->
  <section class="site-section" id="post">
  <div class="container">
  <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">There are {{count($report)}}  requirements in history </h2>
          </div>
        </div>
<ul class="job-listings mb-5">
    @foreach($report as $r)
    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center " >
        <a href="{{ route('technicians.detail', $r->id )}}"style="position: absolute;width: 100%;height: 100%;"></a>
        <div class="job-listing-logo">
            <img src="{{asset('File/File_img/'.$r->image)}}"  style="width:200px; height=200px;" alt="Free Website Template by Free-Template.co" class="img-fluid">
        </div>

        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
            <h2>{{$r->title}}	&nbsp;	&nbsp;	&nbsp;({{$r->solve}})</h2>
            <strong>{{$r->description}}</strong>
            </div>
            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
            <span class="icon-room"></span> {{$r->address}}
            </div>
            <div class="job-listing-meta">

            <span class="badge badge-danger">
            @if($r->status == 0)
              Posted
            @endif
            @if($r->status == 1)
              Approved
            @endif
            @if($r->status == 2)
            Processing
            @endif
            @if($r->status == 3)
              Fixed
            @endif
            </span>
            </div>
        </div>
            
    </li>
    @endforeach
    </ul>

    <div class="row pagination-wrap">
          
      <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
 
      </div>
      <div class="col-md-6 text-center text-md-right">
      {{$report->links()}}
          </div>
    </div>
    </div>
    </div>
    </section>

  <!-- END .block-4 -->

  
  @include('layouts/user/footer')
  @include('layouts/user/js')

</body>

</html>