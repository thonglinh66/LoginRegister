<!DOCTYPE html>
<html lang="en">
@include('layouts/user/head')
<body>

@include('layouts/user/header')
  <!-- END header -->

   @yield('content_head')
   @yield('command')

   <div class="section portfolio-section"  style="padding:20px;">
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
    <section class="site-section" style="padding:20px;">
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
                  <span class="ml-0 mr-2 mb-2"><span style="color:#7532a8;"class="icon-briefcase mr-2"></span>{{$report->address}}</span>
                  @if ($report->status == 2)
                     <span style="display: inline;" class="m-2"><span style="color:#7532a8;"class="icon-clock-o mr-2"></span><span class="badge badge-info">{{__('Processing')}}</span></span>
                  @endif 
                  @if ($report->status == 3)
                     <span style="display: inline;" class="m-2"><span style="color:#7532a8;"class="icon-clock-o mr-2"></span><span class="badge badge-success">{{__('Fixed')}}</span></span>
                  @endif 
                </div>
                
              </div>
            

            </div>
          <div class="row" >
          <div class="row" >
            <div class="mb-5" style="margin-top:20px;">
              <h3 class="h5 d-flex align-items-center mb-4" style="color:#7532a8;"><span style="color:#7532a8;" class="icon-book mr-3"></span>	{{__('Description')}}</h3>
              <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span style="padding-top:7px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{$report->description}}</span></li>
                
            </div>

            <div class="mb-5">
              <h3 style="display: inline;color:#7532a8;" class="h5 d-flex align-items-center mb-4 "><span style="color:#7532a8;"class="icon-turned_in mr-3"></span>{{__('Time')}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
              <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Createreport')}}:&nbsp;&nbsp;{{$report->createreport }}</span></li>
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Solve')}}:&nbsp;&nbsp;{{$report->solve }}</span></li>
              </ul>
            </div>
            <div class="mb-5">
              <h3 style="display: inline;color:#7532a8;" class="h5 d-flex align-items-center mb-4 "><span style="color:#7532a8;"class="icon-turned_in mr-3"></span>{{__('Employee')}}</h3>
              <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Name')}}:&nbsp;&nbsp;{{$employee->fullname }}</span></li>
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Position')}}:&nbsp;&nbsp;{{$employee->position }}</span></li>
              </ul>
            </div>
          </div>
          </div>

          @if ($report->status == 2)
              <form style="margin-left:-25px;" class="login100-form validate-form" action="{{route('technicians.processing.post',  $report->id)}}" class="p-4 border rounded" method="post">
            @csrf
            <div class="row">
				  <div class="col-md-12 form-group">
					<label for="message" style="font-weight:bold;">{{__('Solution')}}</label>
					<textarea   style="border-style: ridge;" name="solution" class="form-control " cols="30" rows="8"></textarea>
				  </div>
				</div>
              <div class="ml-auto">
                     <button type="submit" style=" background-color:#e303fc; color:white;"  class="btn ">{{__('ht')}}</button>
            </div>
            </form>
            @endif
      </div>
        </div>
      </div>
    </section>

  <!-- END .block-4 -->

  
  @include('layouts/user/footer')
  @include('layouts/user/js')

</body>

</html>