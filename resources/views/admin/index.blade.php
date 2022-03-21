@extends('adminlte::page') @section('title', 'Admin panel')
@section('content_header')
<h1>Admin Panel</h1>
@stop @section('content')


<div class="small-box bg-gradient-primary">
  <div class="inner">
    <h3>44</h3>
    <p>User Registrations</p>
  </div>
  <div class="icon">
    <i class="fas fa-user-plus"></i>
  </div>
  <a href="users" class="small-box-footer">
    More info <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>

<div class="small-box bg-danger">
  <div class="inner">
    <h3>150</h3>
    <p>New Orders</p>
  </div>
  <div class="icon">
    <i class="fas fa-shopping-cart"></i>
  </div>
  <a href="#" class="small-box-footer">
    More info <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>

<div class="small-box bg-gradient-success">
  <div class="inner">
    <h3>44</h3>
    <p>games</p>
  </div>
  <div class="icon">
    <i class="fas fa-gamepad"></i>
  </div>
  <a href="games" class="small-box-footer">
    More info <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>

@stop @section('css')
<link rel="stylesheet" href="/css/admin_custom.css" />
@stop @section('js')
<script>
  console.log("Hi!");
</script>
@stop