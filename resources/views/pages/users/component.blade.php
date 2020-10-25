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