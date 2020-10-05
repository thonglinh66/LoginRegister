<!DOCTYPE html>
<html lang="en">
@include('layouts/user/head')

<body>

@include('layouts/user/header')
  <!-- END header -->

   @yield('content_head')
   @yield('command')

   <div class="section portfolio-section"  style=" height:10px; margin: 0px; display:block;">
    <div class="container"style="height: 0px;">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">Feedback system</h2>
          <p>Enter error and problem information to respond to the system.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
		<div class="container">
		  <div class="row mb-5">

			<div class="col-12 mb-5 order-2">
      <form  action="{{route('home.report.feedback')}} " class="p-4 p-md-5 border rounded" method="post" enctype="multipart/form-data">
            @csrf
				<div class="row">
				  <div class="col-md-6 form-group">
					<label for="name">Title</label>
					<input type="text"  name="title" class="form-control ">
				  </div>
				  <div class="col-md-6 form-group">
					<label for="phone">Address</label>
					<input type="text"  name="address" class="form-control ">
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-12 form-group">
					<label for="message">Description</label>
					<textarea   name="description" class="form-control " cols="30" rows="8"></textarea>
				  </div>
				</div>
        <div class="form-group">
                <label for="company-website-tw d-block">Images(required|image|mimes:jpeg,png,jpg,gif,svg|max:2048)</label> <br>
                <label class="btn btn-primary btn-md btn-file">
                  Choose Images<input name="img" type="file" hidden>
                </label>
        </div>
				<div class="row">
				  <div class="col-md-6 form-group">
					<input type="submit" value="Send Message" name="submit" class="btn btn-outline-black px-3 py-3">
				  </div>
				</div>
			  </form>
			</div>

        
      </div>

      <div class="row">
        <div class="col-12 contact-form-contact-info">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="">
              <p class="d-flex">
                <span class="ion-ios-location icon mr-5"></span>
                <span>Khu II, đường 3/2, P. Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ.</span>
              </p>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <p class="d-flex">
                <span class="ion-ios-telephone icon mr-5"></span>
                <span> (84-292) 3832663</span>
              </p>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <p class="d-flex">
                <span class="ion-android-mail icon mr-5"></span>
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