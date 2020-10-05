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
          <h2 class="mb-4 section-title">Delail</h2>
          <p>Show details of a request in history.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- content body -->        
    <section class="site-section" style="border-top: 1px solid; width: 100%;">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0" style="margin:0 auto;">
            <div class="d-flex align-items-center">
            <a href="#" class="border p-2 d-inline-block mr-3 rounded">

              <img src="{{asset('File/File_img/'. $report->image)}}"style="width:100px; height:100px;" alt="Image">
              </a>
              <div>
                <h2>{{$report->title}}</h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{$report->address}}</span>
                  
                  @if($report->status == 0)
                     <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">Posted</span></span>
                  @endif  
                  @if ($report->status == 1)
                     <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">Approved</span></span>
                  @endif 
                  @if ($report->status == 2)
                     <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">Processing</span></span>
                  @endif  
                  @if ($report->status == 3)
                     <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">Fixed</span></span>
                  @endif  
                  <!-- <span class="m-2"><span class="icon-room mr-2"></span>{{$report->title}}</span> -->
                </div>
                
              </div>
              
              
            </div>
          <div class="row" style="margin-top: 30px;">
          <div class="row" >
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>	Description</h3>
              <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span style="padding-top:7px;" class="icon-check_circle mr-2 text-muted"></span><span>{{$report->description}}</span></li>
                
            </div>

            <div class="mb-5">
              <h3 style="display: inline;" class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
              <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;" class="icon-check_circle mr-2 text-muted"></span><span>Createreport:&nbsp;&nbsp;{{$report->createreport }}</span></li>
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;" class="icon-check_circle mr-2 text-muted"></span><span>Solve:&nbsp;&nbsp;{{$report->solve }}</span></li>
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;" class="icon-check_circle mr-2 text-muted"></span><span>Completed:&nbsp;&nbsp;{{$report->completed }}</span></li>
              </ul>
            </div>
            <div class="mb-5">
              <h3 style="display: inline;" class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Technicians</h3>
              <ul class="list-unstyled m-0 p-0">
              @if(isset($technicians))
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;" class="icon-check_circle mr-2 text-muted"></span><span>Name:&nbsp;&nbsp;{{$technicians->fullname }}</span></li>
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;" class="icon-check_circle mr-2 text-muted"></span><span>Chức vụ:&nbsp;&nbsp;{{$technicians->position }}</span></li>
              @else
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;" class="icon-check_circle mr-2 text-muted"></span><span>Name:&nbsp;&nbsp;Chưa có nhân viên nhận giải quyết</span></li>
              @endif
              </ul>
            </div>
          </div>
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