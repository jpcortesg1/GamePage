@extends('adminlte::page') @section('title', 'CRUD con Laravel 8')
@section('content_header')
  <h1>@lang('messages.gameCreateGame') {{ $viewData['category']->getName() }}</h1>
  @stop @section('content')

  <form action="{{ route('admin.gameStore') }}" enctype="multipart/form-data" method="POST"
    class="d-flex flex-column justify-content-center align-items-center">
    @csrf @method('POST')
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.gameName')</label>
      <input id="name" name="name" type="text" class="form-control" tabindex="1" />
      @error('name')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.gameDeveloper')</label>
      <input id="developer" name="developer" type="text" class="form-control" tabindex="2" />
      @error('developer')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.gameDescription')</label>
      <input id="description" name="description" type="text" class="form-control" tabindex="3" />
      @error('description')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.gameRealeaseDate')</label>
      <input id="releasedate" name="releasedate" type="text" class="form-control" tabindex="3" />
      @error('releasedate')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.gamePrice')</label>
      <input id="price" name="price" type="number" class="form-control" tabindex="3" />
      @error('price')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.gameAgeRating')</label>
      <input id="agerating" name="agerating" type="number" class="form-control" tabindex="3" />
      @error('agerating')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.gameImage')</label>
      <input id="image" name="image" type="file" class="" tabindex="3" />
      @error('image')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <input id="idCategory" name="idCategory" type="number" class="form-control" tabindex="3"
        value="{{ $viewData['category']->getId() }}" style="visibility: hidden; height: 0" />
    </div>
    <div class="mb-3">
      <input id="buyquantity" name="buyquantity" type="number" class="form-control" tabindex="3" value="0"
        style="visibility: hidden; height: 0" />
    </div>
    <div class="mb-3">
      <a href="{{ route('admin.category') }}" class="btn btn-secondary" tabindex="5">@lang('messages.gameCancel')</a>
      <button type="submit" class="btn btn-primary" tabindex="4">@lang('messages.gameSave')</button>
    </div>
  </form>
  @stop @section('css')
  <link rel="stylesheet" href="/css/admin_custom.css" />
  @stop @section('js') @stop
