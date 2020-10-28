<!DOCTYPE html>
<html lang="en">
@include('layouts/user/head')
<body>

@include('layouts/user/header')
  <!-- END header -->

   @yield('content_head')

   <div class="section portfolio-section"  style="padding:0px;padding-top:10px">
    <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">{{__('Detail')}}</h2>
          <p id="aa">{{__('Show details of a request in history.')}}</p>
        </div>
      </div>
    </div>
  </div>

<!-- ---------------------------- -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- ----------------------------------- -->
  <!-- content body -->        
    <section class="site-section" style="padding:10px 0px 0px 0px">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0" style="margin:0 auto;">
            <div class="d-flex align-items-center">
            <a href="#" class="border p-2 d-inline-block mr-3 rounded">
              <img src="{{asset('File/File_img/'. $report->image)}}" style="width:100px; height:100px;" alt="Image" >
              </a>
              <div>
                <h2>{{$report->title}}</h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span style="color:#7532a8;"class="icon-briefcase mr-2"></span>{{$report->address}}</span>
                  
                  @if($report->status == 0)
                     <span class="m-2"><span style="color:#7532a8;"class="icon-clock-o mr-2"></span><span class="badge badge-danger">{{__('Posted')}}</span></span>
                  @endif  
                  @if ($report->status == 1)
                     <span class="m-2"><span style="color:#7532a8;"class="icon-clock-o mr-2"></span><span class="badge badge-primary">{{__('Approved')}}</span></span>
                  @endif 
                  @if ($report->status == 2)
                     <span class="m-2"><span style="color:#7532a8;"class="icon-clock-o mr-2"></span><span class="badge badge-info">{{__('Processing')}}</span></span>
                  @endif  
                  @if ($report->status == 3)
                     <span class="m-2"><span style="color:#7532a8;"class="icon-clock-o mr-2"></span><span class="badge badge-success">{{__('Fixed')}}</span></span>
                  @endif  
                  <!-- <span class="m-2"><span class="icon-room mr-2"></span>{{$report->title}}</span> -->
                </div>
                
              </div>
              
              
            </div>
          <div class="row" style="margin-top: 30px;">
          <div class="row" >
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 ;"style="color:#7532a8;"><span style="color:#7532a8;"class="icon-book mr-3"></span>	{{__('Description')}}</h3>
              <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span style="padding-top:7px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{$report->description}}</span></li>
                
            </div>

            <div class="mb-5">
              <h3 style="display: inline;color:#7532a8;" class="h5 d-flex align-items-center mb-4 "><span style="color:#7532a8;"class="icon-turned_in mr-3"></span>{{__('Time')}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
              <ul class="list-unstyled m-0 p-0">
              @if(isset($report->createreport ))
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Createreport')}}:&nbsp;&nbsp;{{$report->createreport }}</span></li>
               @endif
               @if(isset($report->solve)) 
               <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Solve')}}:&nbsp;&nbsp;{{$report->solve }}</span></li>
               @endif
               @if(isset($report->completed)) 
               <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Completed')}}:&nbsp;&nbsp;{{$report->completed }}</span></li>
               @endif
              </ul>
            </div>
            <div class="mb-5">
              <h3 style="display: inline;color:#7532a8;" class="h5 d-flex align-items-center mb-4 "><span style="color:#7532a8;"class="icon-turned_in mr-3"></span>{{__('Technicians')}}</h3>
              <ul class="list-unstyled m-0 p-0">
              @if(isset($technicians))
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Name')}}:&nbsp;&nbsp;{{$technicians->fullname }}</span></li>
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Position')}}:&nbsp;&nbsp;{{$technicians->position }}</span></li>
              @else
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{__('Name')}}:&nbsp;&nbsp;Chưa có nhân viên nhận giải quyết</span></li>
              @endif
              </ul>
            </div>
            <div class="mb-5">
              <h3 style="display: inline-block;color:#7532a8;" class="h5 d-flex align-items-center mb-4 "><span style="color:#7532a8;"></span>{{__('Message')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
            </div>
          </div>
          
          </div>

       
         
        
      </div>

          
        </div>

        <!-- ---------------------------------------------------------content message------------------------- -->
        
  <div  id="croll" name="croll"class="rounded"style="border: 1px solid; width: 63%;margin-left:165px;margin-top:-70px;overflow-y: scroll; height:300px; margin-bottom:20px;"> 
    @foreach($messages as $m)
          <div class="container" @if($m->user_type != 0) style=" text-align: right; " @endif>
          @if($m->user_type == 0) 
          <p> <span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 ">{{__('Me')}} &nbsp;&nbsp;{{$m->time}}</p>
          @endif
          @if($m->user_type == 1) 
          <p><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 ">{{__('Technicians')}} &nbsp;&nbsp;{{$m->time}}</p>
          @endif
          @if($m->user_type == 2) 
          <p><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 ">{{__('Admin')}} &nbsp;&nbsp;{{$m->time}}</p>
          @endif
            <p @if($m->user_type == 0) style="margin-left: 20px; " @else style="margin-right: 20px;" @endif>{{$m->contains}}</p>
    </div>
    
    @endforeach
  
</div> 

<!-- ------------------------------------------------------------message-------------------------------- -->
        @if($report->status != 3)
    <div class="row">
        <div class="col-sm-6 m-auto" >
            <form  style="width:700px; margin-left:-120px; ">
                @csrf
                <div class="form-group">
                        <label for="code" class="control-label" style="font-weight:bold;">{{__('Feedback')}}</label>
                        <textarea rows="5" class="form-control" id="feedback" name="feedback" placeholder="{{__('Content...')}}"></textarea>
                </div>
                <div class="form-group" >
                        <!-- <button type="submit" id="{{$report->id}}"style=" background-color:#e303fc; border:none; color:white;" class="btn approved">{{__('Confirm')}}</button> -->
                    </div>
            </form>
            <button type="submit" id="{{$report->id}}"style=" background-color:#e303fc; border:none; color:white; margin-left:-120px; margin-bottom:10px;" class="btn approved">{{__('Confirm')}}</button>
        </div>
    </div> 
    @endif
      </div>
    </section>

  <!-- END .block-4 -->

  
  @include('layouts/user/footer')
  @include('layouts/user/js')
  <script>
   var div = document.getElementById("croll");
   div.scrollTop = div.scrollHeight - div.clientHeight;


  
   $(document).ready(function(){
    setInterval(function(){
              var id = $('.approved').attr('id');

                // alert(feedback);
                $.ajax({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                type: 'post',
                url: "{{route('home.mess')}}",
                data:{ id:id},
                success: function(data){
                      $('#croll').html(data);
                      var div = document.getElementById("croll");
                      div.scrollTop = div.scrollHeight - div.clientHeight;
                    },
                    error: function(data) {
                        // alert("Lỗi rồi mày ơi");
                        alert(JSON.stringify(data));
                    }
                })        
            },1000)
        });
</script>


<script>
$(document).ready(function () {
            $('.approved').on('click',function(){
                var feedback =$('#feedback').val(); 
                var id = $(this).attr('id');
                // alert(feedback);
                $.ajax({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                type: 'post',
                url: "{{route('home.feedback')}}",
                data:{feedback:feedback, id:id},
                success: function(data){
                      $('#croll').html(data);
                      var div = document.getElementById("croll");
                          div.scrollTop = div.scrollHeight - div.clientHeight;
                          $('#feedback').val('');
                    },
                    error: function(data) {
                        // alert("Lỗi rồi mày ơi");
                        alert(JSON.stringify(data));
                    }
                })
              })
                });
        </script>
       
</body>

</html>