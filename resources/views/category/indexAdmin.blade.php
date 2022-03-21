@extends('adminlte::page') @section('title', $viewData["title"])
@section('content_header')
<h1>Category List</h1>
@stop @section('content')
<a href="{{ route('admin.categoryCreate') }}" class="btn btn-dark mb-3">
  Create
  <i class="fas fa-plus"></i>
</a>

<div class="d-flex flex-wrap justify-content-around">

@foreach ($viewData["categories"] as $category)

<div class="card" style="width: 40%;">
  <div class="card-header">
    <h3 class="card-title">{{ $category->getName() }}</h3>
    <form class="card-tools" action="{{ route ('admin.categoryDelete',$category->getId())}}">
      @csrf @method('GET')
      <a href="{{ route ('admin.categoryEdit',$category->getId() )}}" class="btn btn-dark mb-3">
        Edit
        <i class="fas fa-pen"></i>
      </a>
      <button class="btn btn-dark mb-3" type="submit">
        Delete
        <i class="fas fa-trash"></i>
      </button>
    </form>
  </div>
  <div class="card-body d-flex justify-content-around">
    <img src="./../../../image/category/{{ $category->getImage() }}" alt="" width="200" class="mx-5">
    <p>{{ $category->getDescription() }}</p>
  </div>
  <div class="card-footer d-flex justify-content-around">
    <i class="fas fa-calendar"></i>
    <p>{{ $category->getCreateAt() }}</p>
    <p>{{ $category->getUpdateAt() }}</p>
    <i class="fas fa-calendar"></i>
  </div>
</div>

@endforeach

</div>

@endsection