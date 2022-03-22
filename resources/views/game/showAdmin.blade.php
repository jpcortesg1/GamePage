@extends('adminlte::page') @section('title', 'CRUD con Laravel 8')
@section('content_header')
<h1>{{ $viewData['category']->getName() }}</h1>
@stop @section('content')

<a href="{{ route('admin.gameCreate', $viewData['category']->getId()) }}" class="btn btn-dark mb-3">
  Create
  <i class="fas fa-plus"></i>
</a>

<div class="d-flex flex-wrap justify-content-around">

@foreach ($viewData["games"] as $game)

<div class="card" style="width: 40%;">
  <div class="card-header">
    <h3 class="card-title">{{ $game->getName() }}</h3>
    <form 
      class="card-tools" 
      action="{{ route('admin.gameDelete', $game->getId()) }}"
    >
      @csrf @method('GET')
      <a href="{{ route('admin.gameEdit', $game->getId()) }}" class="btn btn-dark mb-3">
        Edit
        <i class="fas fa-pen"></i>
      </a>
      <button class="btn btn-dark mb-3" type="submit">
        Delete
        <i class="fas fa-trash"></i>
      </button>
      <a href="{{ route('admin.gameShow', $game->getId()) }}" class="btn btn-dark mb-3">
        More
        <i class="fas fa-angle-double-right"></i>
      </a>
    </form>
  </div>
  <div class="card-body d-flex justify-content-around">
    <img src="./../../../image/games/{{ $game->getId() }}/{{ $game->getImage() }}" alt="" width="200" class="mx-5" style="max-height: 10rem;">
    <p style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden;">{{ $game->getDescription() }}</p>
  </div>
  <div class="card-footer d-flex justify-content-around">
    <i class="fas fa-calendar"></i>
    <p>{{ $game->getCreateAt() }}</p>
    <p>{{ $game->getUpdateAt() }}</p>
    <i class="fas fa-calendar"></i>
  </div>
</div>

@endforeach

</div>

@endsection