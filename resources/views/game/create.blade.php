@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>This game will be {{ $viewData['category']->getName() }}</h1>
@stop

@section('content')
    
<form
  action="{{ route('admin.gameStore') }}"
  enctype="multipart/form-data"
  method="POST"
>
  @csrf
  @method('POST')
    <div class="mb-3">
      <label for="" class="form-label">Name</label>
        <div class="col-md-6">
          <input id="name" name="name" type="text" class="form-control" tabindex="1">
        </div>
        @error('name')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror   
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Developer</label>
        <div class="col-md-6">
          <input id="developer" name="developer" type="text" class="form-control" tabindex="2">
        </div>
        @error('developer')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Description</label>
        <div class="col-md-6">
          <input id="description" name="description" type="text" class="form-control" tabindex="3">
        </div>
        @error('description')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Release Date</label>
        <div class="col-md-6">
          <input id="releasedate" name="releasedate" type="text" class="form-control" tabindex="3">
        </div>
        @error('releasedate')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Price</label>
        <div class="col-md-6">
          <input id="price" name="price" type="number" class="form-control" tabindex="3">
        </div>
        @error('price')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Age Rating</label>
        <div class="col-md-6">
          <input id="agerating" name="agerating" type="number" class="form-control" tabindex="3">
        </div>
        @error('agerating')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Image</label>
        <div class="col-md-6">
          <input id="image" name="image" type="file" class="" tabindex="3">
        </div>
        @error('image')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror
    </div>
    <div class="mb-3">
      <input id="idCategory" name="idCategory" type="number" class="form-control" tabindex="3" value="{{ $viewData['category']->getId() }}" style="visibility:hidden; height: 0;">
    </div>
    <div class="mb-3">
      <input id="buyquantity" name="buyquantity" type="number" class="form-control" tabindex="3" value="0" style="visibility:hidden; height: 0;">
    </div>
    <a href="{{ route('admin.category') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')  
@stop