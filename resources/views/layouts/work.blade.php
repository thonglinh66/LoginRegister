<!DOCTYPE html>
<html lang="en">
@include('layouts/user/head')

<body>

@include('layouts/user/header')
  <!-- END header -->

   @yield('content_head')

  
   <div class="section portfolio-section"  style=" height:10px; margin: 0px; display:block; padding:20px;">
    <div class="container"style="height: 0px;">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">{{__('Work')}}</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- content body -->


  <section class="site-section" id="post" style="padding:-20px 20px 20px 20px; margin-bottom: -150px;">
  <div class="container">
    <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">{{__('There are')}} {{count($processing)}}  {{__('Processing work')}} </h2>
          </div>
    </div>
    <ul class="job-listings mb-5">
      @foreach($processing as $r)
        <li style="border-style: ridge;"class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center " >
          <a href="{{ route('technicians.processing', $r->id )}}"style="position: absolute;width: 100%;height: 100%;"></a>
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

              <span class="badge badge-info">
                {{__('Processing')}}
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
    {{$processing->links()}}
  </div>
</div>
</div>
</div>
</section>
<!-- ==========================================Approved============================================ -->
    <section class="site-section" id="post" style="padding:-100px 20px 20px 20px;margin-top:-150px;">
  <div class="container">
    <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">{{__('There are')}} {{count($report)}}  {{__('Approved work')}} </h2>
          </div>
    </div>
    <ul class="job-listings mb-5" style="margin-top:0px;">
      @foreach($report as $r)
        <li style="border-style: ridge;"class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center " >
          <a href="{{ route('technicians.approved', $r->id )}}"style="position: absolute;width: 100%;height: 100%;"></a>
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

              <span class="badge badge-primary">
                @if($r->status == 1)
                  {{__('Approved')}}
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