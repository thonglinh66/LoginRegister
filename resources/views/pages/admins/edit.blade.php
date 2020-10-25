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
<a href="{{route('admin.index')}}" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Account List</p>
</a>
</li>

<li class="nav-item">
<a href="{{route('admin.report')}}" class="nav-link ">
<i class="far fa-circle nav-icon"></i>
<p>Report List</p>
</a>
</li>

</ul>

@endsection

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">Edit account</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">admin</a></li>
      <li class="breadcrumb-item"><a href="{{route('admin.index')}}">account</a></li>
        <li class="breadcrumb-item active">edit</li>
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
    <div class="row">
        <div class="col-sm-6 m-auto">
            <form action="{{route('admin.update', $user->id)}}" method="POST" style="margin-top:-20px;">
                @csrf
                <div class="form-group" style="visibility: hidden;;">
                    <label for="id" class="control-label">ID</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="" value="{{$user->id}}" disabled>
                </div>
                <div class="form-group">
                        <label for="code" class="control-label">Mã</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="" value="{{$user->username}}" disabled>
                </div>
                <!-- <div class="form-group">
                    <label for="type" class="control-label">Loại tk</label>
                    <select name="type"  class="form-control pull-right">
                        <option value="0" @if($user->type == 0) selected @endif>Employee</option>
                        <option value="1" @if($user->type == 1) selected @endif>Technicians</option>
                    </select>                     
                </div> -->
                <div class="form-group">
                        <label for="password" class="control-label">A new password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="@ps!">
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{route('admin.index')}}" class="btn btn-default">Back</a>
                    </div>  
            </form>
        </div>
    </div>    
@endsection