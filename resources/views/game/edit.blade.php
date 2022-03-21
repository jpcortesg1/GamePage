@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Edit {{ $viewData["game"]->getName() }}</h1>
@stop

@section('content')
<form action="{{ route('admin.gameUpdate', $viewData['game']->getId()) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input id="name" name="name" type="text" class="form-control" value="{{$viewData['game']->getName()}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Developer</label>
    <input id="developer" name="developer" type="text" class="form-control" value="{{$viewData['game']->getDeveloper()}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input id="description" name="description" type="text" class="form-control" value="{{$viewData['game']->getDescription()}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Id Category</label>
    <select class="form-control" name="idCategory">
      @foreach ($viewData['categories'] as $category)
        <option value="{{ $category->getId() }}" 
        {{ ($category->getId() == $viewData['game']->getIdCategory()) ? 'selected' : '' }}
        >{{ $category->getName() }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Release Date</label>
    <input id="releasedate" name="releasedate" type="text" class="form-control" value="{{$viewData['game']->getReleasedate()}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Price</label>
    <input id="price" name="price" type="number" class="form-control" value="{{$viewData['game']->getPrice()}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Age Rating</label>
    <input id="agerating" name="agerating" type="number" class="form-control" value="{{$viewData['game']->getAgerating()}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Image</label>
    <input id="image" name="image" type="file">
  </div>
  <div class="d-flex justify-content-center">
    <img src="./../../../image/games/{{ $viewData['game']->getId() }}/{{ $viewData['game']->getImage() }}" alt="" style="width: 30rem" class="mx-5">
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