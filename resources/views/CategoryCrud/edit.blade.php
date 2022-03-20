@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Edit Categories</h1>
@stop

@section('content')
<form action="/categoryc/{{$category->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input id="name" name="name" type="text" class="form-control" value="{{$category->name}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">description</label>
    <input id="description" name="description" type="text" class="form-control" value="{{$category->description}}">
  </div>

  <a href="/categoryc" class="btn btn-secondary" tabindex="5">Cancel</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Save</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop