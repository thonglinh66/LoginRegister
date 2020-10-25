<header role="banner">
    <nav class="navbar navbar-expand-lg  bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand " id="index" href="#" style="font-size: 30px">HelpDesk</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
          aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

   
        <div class="collapse navbar-collapse" id="navbarsExample05">
        
          <ul style="margin-top: 20px; margin-right:-0px; "class="navbar-nav pl-md-5 ml-auto">
          @yield('active')
          </ul>
          
          <div class="navbar-nav ml-auto">


          <div class="lan-selector" style="margin-right:20px; margin-top:7px;">
                        <select class="language_drop" name="countries" id="countries" style="width:50px;" onchange="location = this.value;">
                        @if(Session::get('language')=='en') 
                              <option value="{!! route('change-language', ['en']) !!}" data-image="{{asset('UserView/en.jpg')}}" data-imagecss="flag yt"
                                data-title="VietNam">En</option>
                              <option value="{!! route('change-language', ['vi']) !!}" data-image="{{asset('UserView/vi.jpg')}}" data-imagecss="flag yu"
                                data-title="English">Vi</option>
                                                @elseif (Session::get('language')=='vi')                
                            <option value="{!! route('change-language', ['vi']) !!}" data-image="{{asset('UserView/vi.jpg')}}" data-imagecss="flag yu"
                                data-title="English">Vi</option>
                                <option value="{!! route('change-language', ['en']) !!}" data-image="{{asset('UserView/en.jpg')}}" data-imagecss="flag yt"
                                data-title="VietNam">En</option>
                                @else
                                
                                <option value="{!! route('change-language', ['en']) !!}" data-image="{{asset('UserView/en.jpg')}}" data-imagecss="flag yt"
                                data-title="VietNam">En</option> 
                                <option value="{!! route('change-language', ['vi']) !!}" data-image="{{asset('UserView/vi.jpg')}}" data-imagecss="flag yu"
                                data-title="English">Vi</option>
                                                @endif
                           
                        </select>
                    </div>
              <div class="ht-right" >
                        <div>
                                  <p style="font-size:20px; color:white;" class="">
                               
                                  <i style="margin-left: 5px;  "class="fa fa-user"></i>
                                  {{$data->fullname}}
                                  </p>    
                        </div >  
                            <div class="ml-auto" >
                          @if(isset($user))
                          <a href="{{route('logout')}}" style="font-size:150%; background-color:#e303fc; border:none; color:white;"  class="btn border-width-2 ">{{ __('Logout') }}</a>
                            @endif 
                            </div>
          </div>

        </div>
      </div>
    </nav>
  </header>


  <!-- <select class="language_drop" name="countries" id="countries" >
                                <option value='yu' data-image="{{asset('UserView/en.jpg')}}" data-imagecss="flag yu"
                                    data-title="English">Eng</option>
                                <option value='yt' data-image="{{asset('UserView/vn.png')}}" data-imagecss="flag yt"
                                data-title="VietNam">VN</option>
                            </select> -->