@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Edit Games</h1>
@stop

@section('content')
<form action="/games/{{$game->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input id="name" name="name" type="text" class="form-control" value="{{$game->name}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Developer</label>
    <input id="developer" name="developer" type="text" class="form-control" value="{{$game->developer}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input id="description" name="description" type="text" class="form-control" value="{{$game->description}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Id Category</label>
    <input id="id_category" name="id_category" type="number" class="form-control" value="{{$game->id_category}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Release Date</label>
    <input id="releasedate" name="releasedate" type="text" class="form-control" value="{{$game->releasedate}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Price</label>
    <input id="price" name="price" type="number" class="form-control" value="{{$game->price}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Age Rating</label>
    <input id="agerating" name="agerating" type="number" class="form-control" value="{{$game->agerating}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Buy Quantity</label>
    <input id="buyquantity" name="buyquantity" type="number" class="form-control" value="{{$game->buyquantity}}">
  </div>
  <a href="/games" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop