<!DOCTYPE html>
<html lang="en">
@include('layouts/user/head')

<body>

@include('layouts/user/header')
  <!-- END header -->

   @yield('content_head')

  
   <div class="section portfolio-section"  style=" height:10px; margin: 0px; display:block;">
    <div class="container"style="height: 0px;">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">Work</h2>
          <p>receive and perform assigned tasks.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- content body -->
  
     
  <!-- END .block-4 -->

  
  @include('layouts/user/footer')
  @include('layouts/user/js')

</body>

</html>