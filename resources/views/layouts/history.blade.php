<!DOCTYPE html>
<html lang="en">
@include('layouts/user/head')


<body>

@include('layouts/user/header')
  <!-- END header -->

   @yield('content_head')

   <div class="section portfolio-section"  style="padding:0px;padding-top:10px">
    <div class="container"style="height: 0px;">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">{{__('History')}}</h2>
          <p>{{__('Store user response history.')}}</p>
        </div>
      </div>
    </div>
  </div>

  <!-- content body -->
  <section class="site-section" id="post" style="padding-bottom:10px;">
  <div class="container">
  <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">{{__('There are')}} {{count($report)}}  {{__('requirements in history')}} </h2>
          </div>
        </div>
<ul class="job-listings mb-5">
    @foreach($report as $r)
    <li  style="border-style: ridge;"class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center "  >
        <a href="{{ route('home.detail', $r->id )}}"style="position: absolute;width: 100%;height: 100%;"></a>
        <div class="job-listing-logo">
            <img  src="{{asset('File/File_img/'.$r->image)}}"  style="width:200px; height=240px;" alt="Free Website Template by Free-Template.co" class="img-fluid">
        </div>

        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
            <h2>{{$r->title}}	&nbsp;	&nbsp;	&nbsp;({{$r->createreport}})</h2>
            <strong>{{$r->description}}</strong>
            </div>
            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
            <span class="icon-room"></span> {{$r->address}}
            </div>
            <div class="job-listing-meta">

           
            @if($r->status == 0)
            <span class="badge badge-danger">{{__('Posted')}} </span>
            @endif
            @if($r->status == 1)
            <span class="badge badge-primary">{{__('Approved')}} </span>
            @endif
            @if($r->status == 2)
             <span class="badge badge-info">{{__('Processing')}} </span>
            @endif
            @if($r->status == 3)
              <span class="badge badge-success">{{__('Fixed')}} </span>
            @endif
           
            </div>
        </div>
            
    </li>
    @endforeach
    </ul>

    
    </div>
    </div>
    </section>

  <!-- END .block-4 -->

  
  @include('layouts/user/footer')
  @include('layouts/user/js')

</body>

</html>