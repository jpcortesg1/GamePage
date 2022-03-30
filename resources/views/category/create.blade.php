@extends('adminlte::page') @section('title', $viewData['title'])
@section('content_header')
  <h1>@lang('messages.categoryCreateCategory')</h1>
  @stop @section('content')

  <form action="{{ route('admin.categoryStore') }}" enctype="multipart/form-data" method="POST"
    class="d-flex flex-column justify-content-center align-items-center">
    @method('POST') @csrf
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.categoryName')</label>

      <input id="name" name="name" type="text" class="form-control" tabindex="1" />
      @error('name')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.categoryDescription')</label>

      <input id="description" name="description" type="text" class="form-control" tabindex="2" />

      @error('description')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.categoryImage')</label>

      <input id="image" name="image" type="file" class="" tabindex="1" />

      @error('image')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div>
      <a href="{{ route('admin.category') }}" class="btn btn-secondary" tabindex="5">@lang('messages.categoryCancel')</a>
      <button type="submit" class="btn btn-primary" tabindex="4">@lang('messages.categorySave')</button>
    </div>
  </form>
  @stop @section('css')
  <link rel="stylesheet" href="/css/admin_custom.css" />
  @stop @section('js') @stop
