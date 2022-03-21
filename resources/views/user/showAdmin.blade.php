@extends('adminlte::page') @section('title', 'CRUD con Laravel 8')
@section('content_header')
<h1>{{ $viewData['user']->getName() }}</h1>
@stop @section('content')

<a href="{{ route('admin.userCreate', $viewData['user']->getId()) }}" class="btn btn-dark mb-3">
  Create
  <i class="fas fa-plus"></i>
</a>

<div class="d-flex flex-wrap justify-content-around">

@foreach ($viewData["users"] as $user)

<div class="card" style="width: 40%;">
  <div class="card-header">
    <h3 class="card-title">{{ $user->getName() }}</h3>
    <form 
    class="card-tools" action="{{ route ('admin.userDelete',$user->getId()) }}">
      @csrf @method('GET')
      <a href="{{ route('admin.userEdit', $user->getId()) }}" class="btn btn-dark mb-3">
        Edit
        <i class="fas fa-pen"></i>
      </a>
      <button class="btn btn-dark mb-3" type="submit">
        Delete
        <i class="fas fa-trash"></i>
      </button>
    </form>
  </div>
  <div class="card-footer d-flex justify-content-around">
    <i class="fas fa-calendar"></i>
    <p>{{ $user->getCreateAt() }}</p>
    <p>{{ $user->getUpdateAt() }}</p>
    <i class="fas fa-calendar"></i>
  </div>
</div>

@endforeach

</div>

@endsection