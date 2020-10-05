<header role="banner">
    <nav class="navbar navbar-expand-lg  bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand " id="index" href="index.html">HelpDesk</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
          aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

   
        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav pl-md-5 ml-auto">
          @yield('active')
          </ul>

          <div class="navbar-nav ml-auto">
          <div class="ht-right" >
                    <a href="#" style="font-size:20px; " class="login-panel"><i style="margin-left: 15px;  "class="fa fa-user"></i>&nbsp;{{$data->fullname}}</a>
                    <div class="lan-selector">
          </div>          
            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
          @if(isset($user))
            <a href="{{route('logout')}}" style="font-size:150%" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Đăng xuất</a>
            @endif 
            </div>
          </div>
            
          </div>

        </div>
      </div>
    </nav>
  </header>