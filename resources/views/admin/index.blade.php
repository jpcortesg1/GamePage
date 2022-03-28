@extends('adminlte::page') @section('title', 'Admin panel')
@section('content_header')
  <h1>Admin Panel</h1>
  @stop @section('content')

  <div class="small-box bg-gradient-primary">

    <div class="inner">
      <h3>{{ $viewData['totalCategory'] }}</h3>
      <p>Game Categories</p>
    </div>
    <div class="icon">
      <i class="fas fa-folder-open"></i>
    </div>
    <a href="{{ route('admin.category') }}" class="small-box-footer">
      More info <i class="fas fa-arrow-circle-right"></i>
    </a>
  </div>

  <div class="small-box bg-danger">
    <div class="inner">
      <h3>{{ $viewData['totalGames'] }}</h3>
      <p>Games</p>
    </div>
    <div class="icon">
      <i class="fas fa-gamepad"></i>
    </div>
    <a href="{{ route('admin.game') }}" class="small-box-footer">
      More info <i class="fas fa-arrow-circle-right"></i>
    </a>
  </div>

  <div class="small-box bg-info">
    <div class="inner">
      <h3>38</h3>
      <p>Orders</p>
    </div>
    <div class="icon">
      <i class="fas fa-shopping-cart"></i>
    </div>
    <a href="{{ route('admin.game') }}" class="small-box-footer">
      More info <i class="fas fa-arrow-circle-right"></i>
    </a>
  </div>

  <div class="small-box bg-gradient-success">
    <div class="inner">
      <h3>{{ $viewData['totalUsers'] }}</h3>
      <p>Users</p>
    </div>
    <div class="icon">
      <i class="fas fa-user-plus"></i>
    </div>
    <a href="{{ route('admin.user') }}" class="small-box-footer">
      More info <i class="fas fa-arrow-circle-right"></i>
    </a>
  </div>

  <div class="small-box bg-warning">
    <div class="inner">
      <h3>{{ $viewData['totalAdmins'] }}</h3>
      <p>Admins</p>
    </div>
    <div class="icon">
      <i class="fas fa-user-secret"></i>
    </div>
    <a href="{{ route('admin.user') }}" class="small-box-footer">
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
