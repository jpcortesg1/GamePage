@extends('adminlte::page') @section('title', $viewData["title"])
@section('content_header')
<h1>Create Category</h1>
@stop @section('content')

<form
  action="{{ route('admin.categoryStore') }}"
  enctype="multipart/form-data"
  method="POST"
  >
  @method('POST')
  @csrf
    <div class="mb-3">
      <label for="" class="form-label">Name</label>
        <div class="col-md-6">
          <input id="name" name="name" type="text" class="form-control" tabindex="1"/>
        </div>
        @error('name')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror  
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Description</label>
        <div class="col-md-6">
          <input id="description" name="description" type="text" class="form-control" tabindex="2"/>
        </div>
        @error('description')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror  
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Photo</label>
      <div class="col-md-6">
        <input id="image" name="image" type="file" class="" tabindex="1" />
      </div>
      @error('image')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror  
    </div>
    <a href="{{ route('admin.category') }}" class="btn btn-secondary" tabindex="5">Cancel</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Save</button>
</form>
@stop @section('css')
<link rel="stylesheet" href="/css/admin_custom.css" />
@stop @section('js') @stop