@extends('adminlte::page') @section('title', $viewData['title'])
@section('content_header')
<h1>Edit Categories</h1>
@stop @section('content')
<form
  action="{{ route('admin.categoryUpdate',$viewData['category']->getId()) }}"
  method="post"
  enctype="multipart/form-data"
>
  @csrf @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input
      id="name"
      name="name"
      type="text"
      class="form-control"
      value="{{ $viewData['category']->getName() }}"
    />
  </div>
  <div class="mb-3">
    <label for="" class="form-label">description</label>
    <input
      id="description"
      name="description"
      type="text"
      class="form-control"
      value="{{ $viewData['category']->getDescription() }}"
    />
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Image</label>
    <input id="image" name="image" type="file" class="form-control" />
  </div>
  <div>
    <img
      src="./../../../image/category/{{ $viewData['category']->getImage() }}"
      alt=""
      style="width: 30rem"
    />
  </div>

  <a href="{{ route('admin.category') }}" class="btn btn-secondary" tabindex="5"
    >Cancel</a
  >
  <button type="submit" class="btn btn-primary" tabindex="4">Save</button>
</form>
@stop @section('css')
<link rel="stylesheet" href="/css/admin_custom.css" />
@stop @section('js') @stop