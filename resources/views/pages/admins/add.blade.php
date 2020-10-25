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
      <h1 class="m-0 text-dark">Create Account</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('admin.add')}}">Admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
        <li class="breadcrumb-item active">Add Account</li>
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
            <form action="{{route('admin.add_submit')}}" method="POST">
                @csrf
                <div class="form-group">
                        <label for="code" class="control-label">Account</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="B170XXXX">
                </div>
                <div class="form-group">
                        <label for="code" class="control-label">Fullname</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="full-name">
                </div>
                <div class="form-group">
                    <label for="type" class="control-label">Account Type</label>
                    <select id="type" name="type" class="form-control pull-right">
                        <option value="0" selected>Employee</option>
                        <option value="1">Technicians</option>
                    </select>
                </div> 
                <div class="form-group">
                    <label for="type" class="control-label">Sex</label>
                    <select id="type" name="sex" class="form-control pull-right">
                        <option value="0" selected>Male</option>
                        <option value="1">Female</option>
                    </select>
                    <div class="form-group">
                        <label for="code" class="control-label">Position</label>
                        <input type="text" class="form-control" id="position" name="position" placeholder="Position">
                </div>
                </div>   
                <div class="form-group">
                        <label for="password" class="control-label">Password</label>
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