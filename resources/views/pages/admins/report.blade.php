@extends('layouts.admin_report')
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
      <h1 class="m-0 text-dark">Report List</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Account</a></li>
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
<div id="page-wrapper">
    @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert" id="showMessage">
            <p>{{$message}}</p>
            <p class="mb-0"></p>
        </div>
    @endif
        <div class="container-fluid">
            <div class="white-box">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <!-- <br>
                            {{-- @if (Auth::user()->hasRole('Admin')) --}}
                                <a style="width:80px" href="{{route('admin.add')}}" class="btn btn-success waves-effect waves-light m-r-10">Add </a>
                            {{-- @endif --}}
                            <br> -->
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table style="font-size:12px" id="myTable" class="table table-striped dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th>ID_Empployee</th>
                                            <th>Title</th>
                                            <th>Time</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            {{-- @if (Auth::user()->hasRole('Admin')) --}}
                                                <th>Function</th>
                                            {{-- @else --}}
                                                {{-- <th></th> --}}
                                            {{-- @endif --}}
                                        </tr>
                                    </thead>
                                    <tbody  style="font-size: 12px">
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{$item->username_emp}}</td>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->createreport}}</td>
                                                <td>{{$item->address}}</td>
                                                @if($item->status == 0)
                                                    <td style="width: 60px; height 60px;" class="badge badge-danger">Posted </td>
                                                    @endif
                                                    @if($item->status == 1)
                                                    <td style="width: 60px; height 60px;" class="badge badge-primary">Approved </td>
                                                    @endif
                                                    @if($item->status == 2)
                                                    <td style="width: 60px; height 30px;" class="badge badge-info">Processing </td>
                                                    @endif
                                                    @if($item->status == 3)
                                                    <td style="width: 60px; height 30px;" class="badge badge-success">Fixed </td>
                                                @endif
                                                {{-- @if (Auth::user()->hasRole('Admin')) --}}
                                                    <td>
                                                        <form action="{{ route('admin.deletereport', $item->id) }}" method="post" class="delete_form">
                                                            <a  href="{{route('admin.reportdetail',$item->id)}}" data-toggle="" data-placement="top" title="Update">&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil  "></i></a>
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-icon  " data-toggle="" data-placement="top" title="Delete"><i class="fa fa-trash-alt "></i></button>
                                                        </form>
                                                    </td>
                                                {{-- @else --}}
                                                    {{-- <td></td> --}}
                                                {{-- @endif --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                {{-- end div col-sm-6 --}}
                </div> 
            {{-- end div row --}}
            </div>
        {{-- end div white-box --}}
        </div>
    {{-- end div container-fluid --}}
</div>
    {{-- end div page-wrapper --}}

@endsection
    
@section('script')    
    <script>
        // Sắp xếp
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        // an thong bao
        $(document).ready(function(){
            setTimeout(function(){
                $('#showMessage').hide()            
            },1000)
        });
        // Họp thoại cảnh báo xóa
        $(document).ready(function () {
            $('.delete_form').on('submit',function(){
                if(confirm('Bạn có muốn xóa tài khoản này không?'))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            });
        });
    </script>
@endsection

@section('script')
<script>
$(function () 
    $('[data-toggle="tooltip"]').tooltip();
);
</script>
@endsection