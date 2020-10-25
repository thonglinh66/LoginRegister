<!DOCTYPE html>
<html lang="en">
@include('layouts/user/head')

<body>

@include('layouts/user/header')
  <!-- END header -->

   @yield('content_head')
   @yield('command')

   <div class="section portfolio-section"  style=" height:10px; margin: 0px; display:block;padding:20px;" >
    <div class="container"style="height: 0px;">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">{{__('Feedback system')}}</h2>
          <p style="color:black">{{__('Enter error and problem information to respond to the system.')}}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
		<div class="container">
		  <div class="row mb-5">

			<div class="col-12 mb-5 order-2">
      <form  style="border-style: ridge;" action="{{route('home.report.feedback')}} " class="p-4 p-md-5  rounded" method="post" enctype="multipart/form-data">
            @csrf
				<div class="row">
				  <div class="col-md-6 form-group">
					<label style="color:black"for="name" >{{__('Title')}}</label>
					<input style="border-style: ridge;" type="text"  name="title" class="form-control ">
				  </div>
				  <div class="col-md-6 form-group">
					<label style="color:black"for="phone">{{__('Address')}}</label>
					<input type="text"  name="address" class="form-control ">
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-12 form-group">
					<label style="color:black"for="message">{{__('Description')}}</label>
					<textarea   name="description" class="form-control " cols="30" rows="8"></textarea>
				  </div>
				</div>
        <div class="form-group">
                <label style="color:black"for="company-website-tw d-block">{{__('Images(required|image|mimes:jpeg,png,jpg,gif,svg|max:2048)')}}</label> <br>
                <label style=" background-color:#e303fc; border:none; color:white;" class="btn  btn-md btn-file">
                {{__('Choose Images')}}<input name="img" type="file" hidden>
                </label>
        </div>
				<div class="row">
				  <div class="col-md-6 form-group">
					<input type="submit" style=" background-color:#e303fc; border:none; color:white;"value="{{__('Send Message')}}" name="submit" class="btn  px-3 py-3">
				  </div>
				</div>
			  </form>
			</div>

        
      </div>

      <div class="row" style="padding:0px; margin:-50px;">
        <div class="col-12 contact-form-contact-info">
          <div class="row"  style="padding:20px; margin:0px;">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="">
              <p class="d-flex">
                <span style="color:#e303fc;"class="ion-ios-location icon mr-5"></span>
                <span>Khu II, đường 3/2, P. Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ.</span>
              </p>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <p class="d-flex">
                <span style="color:#e303fc;"class="ion-ios-telephone icon mr-5"></span>
                <span> (84-292) 3832663</span>
              </p>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <p class="d-flex">
                <span style="color:#e303fc;"class="ion-android-mail icon mr-5"></span>
                <span>dhct@ctu.edu.vn.</span>
              </p>
            </div>
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