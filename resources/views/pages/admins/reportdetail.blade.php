@extends('layouts.admin_home')

@section('active')
<li class="nav-item has-treeview menu-open">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
List
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="{{route('admin.index')}}" class="nav-link ">
<i class="far fa-circle nav-icon"></i>
<p>Account List</p>
</a>
</li>

<li class="nav-item">
<a href="{{route('admin.report')}}" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Report List</p>
</a>
</li>


</ul>

@endsection

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">Report Detail</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('admin.add')}}">Admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
        <li class="breadcrumb-item active">Report Detail</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('content')
<style>
    body{
        font-size: 12px!important;
    }
</style>
    
<section class="site-section" style="padding:10px 0px 0px 0px; font-size: 20px;">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div  style="margin-left: 20px; width: 100%; height:100%;">
            <div class="d-flex align-items-center">
            <a href="#" class="border p-2 d-inline-block mr-3 rounded">

              <img src="{{asset('File/File_img/'. $report->image)}}"style="width:100px; height:100px;" alt="Image">
              </a>
              <div>
                <h2>Title: {{$report->title}}</h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span style="color:#7532a8;"class="icon-briefcase mr-2"></span><span style="color:#7532a8;" >Address:</span> {{$report->address}}</span>
                  
                  @if($report->status == 0)
                     <span class="m-2"><span style="color:#7532a8;"class="icon-clock-o mr-2"> Status:</span><span class="badge badge-danger">Posted</span></span>
                  @endif  
                  @if ($report->status == 1)
                     <span class="m-2"><span style="color:#7532a8;"class="icon-clock-o mr-2">Status:</span><span class="badge badge-primary">Approved</span></span>
                  @endif 
                  @if ($report->status == 2)
                     <span class="m-2"><span style="color:#7532a8;"class="icon-clock-o mr-2">Status:</span><span class="badge badge-info">Processing</span></span>
                  @endif  
                  @if ($report->status == 3)
                     <span class="m-2"><span style="color:#7532a8;"class="icon-clock-o mr-2">Status:</span><span class="badge badge-success">Fixed</span></span>
                  @endif  
                  <!-- <span class="m-2"><span class="icon-room mr-2"></span>{{$report->title}}</span> -->
                </div>
                
              </div>
              
              
            </div>
          <div class="row" style="margin-top: 30px;">
          <div class="row" >
            <div class="mb-5" style="min-width:350px; border-right: 1px solid;">
              <h3 class="h5 d-flex align-items-center mb-4 ;"style="color:#7532a8;"><span style="color:#7532a8;"class="icon-book mr-3"></span>	Description</h3>
              <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span style="padding-top:7px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>{{$report->description}}</span></li>
                
            </div>

            <div class="mb-5" style="min-width:350px;border-right: 1px solid;">
              <h3 style="color:#7532a8;" class="h5 d-flex align-items-center mb-4 "><span style="color:#7532a8;"class="icon-turned_in mr-3"></span>Time </h3>
              <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>Createreport:&nbsp;&nbsp;{{$report->createreport }}</span></li>
              @if(isset($report->solve ))
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>Solve:&nbsp;&nbsp;{{$report->solve }}</span></li>
              @endif
              @if(isset($report->completed ))
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>Completed:&nbsp;&nbsp;{{$report->completed }}</span></li>
              @endif
              </ul>
            </div>
            <div class="mb-5"style="min-width:350px;">
              <h3 style="color:#7532a8;" class="h5 d-flex align-items-center mb-4 "><span style="color:#7532a8;"class="icon-turned_in mr-3"></span>Staff</h3>
              <ul class="list-unstyled m-0 p-0">
              @if(isset($technicians))
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>Technicians:&nbsp;&nbsp;{{$technicians->fullname }}</span></li>
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>Position:&nbsp;&nbsp;{{$technicians->position }}</span></li>
              @else
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>Name:&nbsp;&nbsp;Chưa có nhân viên nhận giải quyết</span></li>
              @endif
              </ul>
              <ul class="list-unstyled m-0 p-0">
              @if(isset($employee))
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>Employee:&nbsp;&nbsp;{{$employee->fullname }}</span></li>
              <li class="d-flex align-items-start mb-2"><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 "></span><span>Position:&nbsp;&nbsp;{{$employee->position }}</span></li>
              @endif
              </ul>
            </div>
          </div>
          </div>
            <div class="mb-5">
              <h3 style="display: inline-block;color:#7532a8;" class="h5 d-flex align-items-center mb-4 "><span style="color:#7532a8;"class="icon-turned_in mr-3"></span>Mesage</h3>
            </div>
          </div>

       
         
        
      </div>

          
        </div>
      </div>
      <!-- ---------------------------------------------------------content message------------------------- -->
      @if($report->status !=0  )
<div  id="croll"class="rounded"style="border: 1px solid; width: 63%;margin-left:165px;margin-top:-70px;overflow-y: scroll; height:300px; font-size:20px; ">
@foreach($messages as $m)
          <div class="container" @if($m->user_type != 2) style=" text-align: right; " @endif>
          @if($m->user_type == 1) 
          <p> <span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 ">Technicians &nbsp;&nbsp;{{$m->time}}</p>
          @endif
          @if($m->user_type == 0) 
          <p><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 ">Employee &nbsp;&nbsp;{{$m->time}}</p>
          @endif
          @if($m->user_type == 2) 
          <p><span style="padding-top:6px;color:#e303fc;" class="icon-check_circle mr-2 ">Me &nbsp;&nbsp;{{$m->time}}</p>
          @endif
            <p @if($m->user_type == 2) style="margin-left: 20px; " @else style="margin-right: 20px;" @endif>{{$m->contains}}</p>
    </div>

    
    @endforeach
</div> 
@endif

<!-- ------------------------------------------------------------message-------------------------------- -->
     <!-- ------------------ add--------------- -->
     @if($report->status == 0)
      <div class="row" style="font-size:20px; margin-top:10px;">
        <div class="col-sm-6 m-auto" >
            <form action="{{route('admin.confirm',$id)}}" method="POST">
                @csrf
                <div class="form-group" >
                    <label for="type" class="control-label">Choose the technician on duty</label>
                    <select id="type" name="username_tech" class="form-control pull-right">
                    @foreach ($tech as $t)
                        <option value="{{$t->username}}" selected>{{$t->username}}-{{$t->fullname}}</option>
                        @endforeach
                    </select>
                </div>   
                <div class="form-group" >
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <a href="{{route('admin.report')}}" class="btn btn-default">Back</a>
                    </div>
            </form>
        </div>
    </div> 
    @endif
    @if($report->status !=0 &&  $report->status !=3 )
    <div class="row" style="font-size:20px; margin-top:10px;">
        <div class="col-sm-6 m-auto" >
            <form action="{{route('admin.feedback',$report->id)}}" method="POST">
                @csrf
                <div class="form-group">
                        <label for="code" class="control-label">Feedback</label>
                        <textarea class="form-control" id="feedback" name="feedback" placeholder="Content..."></textarea>
                </div>
                <div class="form-group" >
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <a href="{{route('admin.report')}}" class="btn btn-default">Back</a>
                    </div>
            </form>
        </div>
    </div> 
    @endif
    <!-- ------------------end add--------------- -->  
    </section>
    <script>
   var div = document.getElementById("croll");
   div.scrollTop = div.scrollHeight - div.clientHeight;
</script>



    
@endsection