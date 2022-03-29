@extends('adminlte::page') @section('title', 'CRUD con Laravel 8')
@section('content_header')
  <h1>Edit {{ $viewData['game']->getName() }}</h1>
  @stop @section('content')
  <form action="{{ route('admin.gameUpdate', $viewData['game']->getId()) }}" method="POST" enctype="multipart/form-data"
    class="d-flex flex-column align-items-center">
    @csrf @method('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Name</label>
      <input id="name" name="name" type="text" class="form-control" value="{{ $viewData['game']->getName() }}" />
      @error('name')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Developer</label>
      <input id="developer" name="developer" type="text" class="form-control"
        value="{{ $viewData['game']->getDeveloper() }}" />
      @error('developer')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Description</label>
      <input id="description" name="description" type="text" class="form-control"
        value="{{ $viewData['game']->getDescription() }}" />
      @error('description')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Id Category</label>
      <select class="form-control" name="idCategory">
        @foreach ($viewData['categories'] as $category)
          <option value="{{ $category->getId() }}"
            {{ $category->getId() == $viewData['game']->getIdCategory() ? 'selected' : '' }}>
            {{ $category->getName() }}
          </option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Release Date</label>
      <input id="releasedate" name="releasedate" type="text" class="form-control"
        value="{{ $viewData['game']->getReleasedate() }}" />
      @error('releasedate')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Price</label>
      <input id="price" name="price" type="number" class="form-control"
        value="{{ $viewData['game']->getPrice() }}" />
      @error('price')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Age Rating</label>
      <input id="agerating" name="agerating" type="number" class="form-control"
        value="{{ $viewData['game']->getAgerating() }}" />
      @error('agerating')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Image</label>
      <input id="image" name="image" type="file" />
    </div>
    <div class="d-flex justify-content-start pt-2 pb-4 pl-5">
      <img src="./../../../image/games/{{ $viewData['game']->getId() }}/{{ $viewData['game']->getImage() }}" alt=""
        style="width: 30rem" class="mx-5" />
    </div>
    <div>
      <a href="/games" class="btn btn-secondary" tabindex="5">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>
  </form>
  @stop @section('css')
  <link rel="stylesheet" href="/css/admin_custom.css" />
  @stop @section('js') @stop
