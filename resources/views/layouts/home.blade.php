<!DOCTYPE html>
<html lang="en">
@include('layouts/user/head_home')

<body>

@include('layouts/user/header')
  <!-- END header -->

   @yield('content_head')

   <div class="section portfolio-section" style="padding:20px;">
    <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">{{__('Support system')}}</h2>
          <p>{{__('Solve problems encountered by employees in the company. ')}}
            {{__('After that, give a solution and appoint a repair person. Get staff feedback.')}}</p>
        </div>
      </div>
    </div>
  </div>

  
  <div class="section" style="padding:20px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="">
            <span style="color:#e303fc;"class="icon	fa fa-handshake-o mb-4 d-block"></span>
            <h3>{{__('Help')}}</h3>
            <p>{{__('Helps you to solve difficult equipment problems such as errors and failures.')}}</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="100">
            <span style="color:#e303fc;" class="icon icon-screen-desktop mb-4 d-block"></span>
            <h3>{{__('Website platform')}}</h3>
            <p>{{__('Support on website browsers.')}}</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="200">
            <span style="color:#e303fc;" class="icon icon-screen-smartphone mb-4 d-block"></span>
            <h3>{{__('Mobile Application')}}</h3>
            <p>{{__('Convenient for users to perform functions on the phone.')}}</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="300">
            <span style="color:#e303fc;" class="icon fa fa-question mb-4 d-block"></span>
            <h3>{{__('Solution')}}</h3>
            <p>{{__('Solution support and fix errors that users encounter.')}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  
 
      
     
  <!-- END .block-4 -->

  
  @include('layouts/user/footer')
  @include('layouts/user/js')

</body>

</html>