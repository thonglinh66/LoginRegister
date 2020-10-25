<!DOCTYPE html>
<html lang="en">
@include('layouts/user/head')
<body>

@include('layouts/user/header')
  <!-- END header -->

   @yield('content_head')
   @yield('command')

   <div class="section portfolio-section"  style="padding-top:20px;padding-bottom:0px;">
    <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">{{__('Detail')}}</h2>
          <p>{{__('Show details of a request in history.')}}</p>
        </div>
      </div>
    </div>
  </div>
  <!-- content body -->        
    <section class="site-section" style="padding-top:1rem;padding-bottom:1rem;">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0" style="margin:0 auto; ">
            <div class="d-flex align-items-center">
            <a href="#" class="border p-2 d-inline-block mr-3 rounded">

              <img src="{{asset('File/File_img/'. $report->image)}}"style="width:100px; height:100px;" alt="Image">
              </a>
              <div>
                <h2>{{$report->title}}</h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span style="color:#7532a8;"class="icon-briefcase mr-2"></span>{{$report->address}}</span>
                  @if ($report->status == 1)
                     <span style="display: inline;" class="m-2"><span style="color:#7532a8;"class="icon-clock-o mr-2"></span><span class="badge badge-primary">{{__('Approved')}}</span></span>
                  @endif  
                  @if ($report->status == 2)
                     <span style="display: inline;" class="m-2"><span style="color:#7532a8;"class="icon-clock-o mr-2"></span><span class="badge badge-info">{{__('Processing')}}</span></span>
                  @endif 
                </div>
                
              </div>
              @if ($report->status == 1)
              <form class="login100-form validate-form" action="{{route('technicians.approved.post',  $report->id)}}" class="p-4 border rounded" method="post">
            @csrf
              <div class="ml-auto">
                     <button type="submit" style="display: inline; margin-left: 30px;background-color:#e303fc; border:none; color:white;"  class="btn border-width-2 d-none d-lg-inline-block">{{__('Accept work')}}</button>
            </div>
            </form>
            @endif

            </div>
          <div class="row" style="margin-top:30px;">
          <div class="row" style="padding:0px;">
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 " style="color:#7532a8;"><span style="color:#7532a8;"class="icon-book mr-3"></span>	{{__('Description')}}</h3>
              <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span style="padding-top:7px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{$report->description}}</span></li>
                
            </div>

            <div class="mb-5">
              <h3 style="display: inline;" class="h5 d-flex align-items-center mb-4 " style="color:#7532a8;"><span style="color:#7532a8;"class="icon-turned_in mr-3"></span>{{__('Time')}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
              <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Createreport')}}:&nbsp;&nbsp;{{$report->createreport }}</span></li>
              
              @if ($report->status == 2)
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Solve')}}:&nbsp;&nbsp;{{$report->solve }}</span></li>
                  @endif 
              </ul>
            </div>
            <div class="mb-5">
              <h3 style="display: inline;" class="h5 d-flex align-items-center mb-4" style="color:#7532a8;"><span style="color:#7532a8;"class="icon-turned_in mr-3"></span>{{__('Employee')}}</h3>
              <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Name')}}:&nbsp;&nbsp;{{$employee->fullname }}</span></li>
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Position')}}:&nbsp;&nbsp;{{$employee->position }}</span></li>
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