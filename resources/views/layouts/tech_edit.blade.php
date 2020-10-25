<!DOCTYPE html>
<html lang="en">
@include('layouts/user/head')

<body>

@include('layouts/user/header')
  <!-- END header -->

   @yield('content_head')
   @yield('command')
   <div class="section portfolio-section"  style=" padding-top:20px;height:10px; margin: 0px; display:block;">
    <div class="container"style="height: 0px;">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title" >{{__('Edit Account')}}</h2>
          <p style="color:black">{{__('Update your account information.')}}</p>
        </div>
      </div>
    </div>
  </div>
  <!-- content body -->
  <div class="section" style="padding:20px;">
		<div class="container">
		  <div class="row mb-5">

			<div class="col-12 mb-5 order-2">
      <form style="border-style: ridge;"  action="{{route('technicians.edit.post')}} " class="p-4 p-md-5 border rounded" method="post" >
            @csrf
				<div class="row">
				  <div class="col-md-6 form-group">
					<label style="color:black"for="name">{{__('Fullname')}}</label>
					<input type="text" id="name" name="fullname" value="{{$technicians->fullname}}" class="form-control ">
				  </div>
				  <div class="col-md-6 form-group">
					<label style="color:black"for="phone">{{__('Phone')}}</label>
					<input type="text" id="phone" name="phone"value="0{{$technicians->phone}}" class="form-control ">
				  </div>
				  <div class="col-md-6 form-group">
					<label style="color:black"for="phone">{{__('Password')}}</label>
					<input type="password" id="password" name="password"value="" class="form-control ">
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-12 form-group">
	  
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-12 form-group">
					<label style="color:black"for="email">Email</label>
					<input type="email" id="email" name="email" value="{{$technicians->email}}" class="form-control ">
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-12 form-group">
					<label style="color:black"for="message">{{__('Address')}}</label>
					<textarea name="address" id="message" class="form-control " cols="30" rows="8" >{{$technicians->address}}</textarea>
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-6 form-group">
					<input type="submit" style="display: inline;background-color:#e303fc; border:none; color:white;" value="{{__('save')}}" class="btn  px-3 py-3">
				  </div>
				</div>
			  </form>
			</div> 
    </div>
  </div>
</div>


  <!-- END .block-4 -->

  
  @include('layouts/user/footer')
  @include('layouts/user/js')

</body>

</html>