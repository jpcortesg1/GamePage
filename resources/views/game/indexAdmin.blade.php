@extends('adminlte::page') @section('title', 'CRUD con Laravel 8')
@section('content_header')
<h1>Games List</h1>
@stop @section('content')

<div class="d-flex flex-wrap justify-content-around">

@foreach( $viewData['categories'] as $category )

<div class="card" style="width: 40%;">
  <div class="card-header">
    <h3 class="card-title">{{ $category->getName() }}</h3>
    <div class="card-tools">
      <a href="{{ route('admin.gameCreate', $category->getId()) }}" class="btn btn-dark mb-3">
        Create
        <i class="fas fa-plus"></i>
      </a>
      <a href="{{ route('admin.gamesCategory', $category->getId()) }}" class="btn btn-dark mb-3">
        See all
        <i class="fas fa-eye"></i>
      </a>
    </div>
  </div>
</div>

@endforeach

</div>

@endsection
