@extends('adminlte::page') @section('title', 'CRUD con Laravel 8')
@section('content_header')
  <h1>{{ $viewData['game']->getName() }}</h1>
  @stop @section('content')

  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6">
          <p>
            <i class="fas fa-user"></i>
            <span class="font-weight-bold">@lang('messages.gameDeveloper'): </span>
            {{ $viewData['game']->getDeveloper() }}
          </p>
        </div>
        <div class="col-md-6">
          <p>
            <i class="fas fa-tag"></i>
            <span class="font-weight-bold">@lang('messages.gameCategory'): </span>
            {{ $viewData['category']->getName() }}
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p>
            <i class="fas fa-align-justify"></i>
            <span class="font-weight-bold">@lang('messages.gameDescription'): </span>
            {{ $viewData['game']->getDescription() }}
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p>
            <i class="fas fa-calendar-plus"></i>
            <span class="font-weight-bold">@lang('messages.gameRealeaseDate'): </span>
            {{ $viewData['game']->getReleasedate() }}
          </p>
        </div>
        <div class="col-md-6">
          <p>
            <i class="fas fa-dollar-sign"></i>
            <span class="font-weight-bold">@lang('messages.gamePrice'): </span>
            {{ $viewData['game']->getPrice() }}
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p>
            <i class="fas fa-id-badge"></i>
            <span class="font-weight-bold">@lang('messages.gameAgeRating'): </span>
            {{ $viewData['game']->getAgerating() }}
          </p>
        </div>
        <div class="col-md-6">
          <p>
            <i class="fas fa-abacus"></i>
            <span class="font-weight-bold">@lang('messages.gameBuyQuantity'): </span>
            {{ $viewData['game']->getBuyquantity() }}
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p>
            <i class="fas fa-calendar"></i>
            <span class="font-weight-bold">@lang('messages.gameDateUpdated'): </span>
            {{ $viewData['game']->getUpdateAt() }}
          </p>
        </div>
        <div class="col-md-6">
          <p>
            <i class="fas fa-calendar-check"></i>
            <span class="font-weight-bold">@lang('messages.gameDateCreated'): </span>
            {{ $viewData['game']->getCreateAt() }}
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <img src="./../../../image/games/{{ $viewData['game']->getId() }}/{{ $viewData['game']->getImage() }}" alt=""
        style="width:80%;" class="mx-5">
    </div>
  </div>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#addImageModal">
  @lang('messages.gameAddImage')
    <i class="fas fa-plus"></i>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="addImageModal" tabindex="-1" aria-labelledby="addImageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addImageModalLabel">@lang('messages.gameAddImage')</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('admin.gameAddImages', $viewData['game']->getId()) }}" enctype="multipart/form-data"
            method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
              <label for="exampleInputPassword1">@lang('messages.gameImages'): </label>
              <input name="files[]" type="file" class="" id="exampleInputPassword1" multiple="multiple">
            </div>
            <button type="submit" class="btn btn-outline-light">@lang('messages.gameAddImage')</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('messages.gameClose')</button>
        </div>
      </div>
    </div>
  </div>

  <h3 class="text-center my-5">@lang('messages.gameAllImages')</h3>

  <div class="d-flex flex-wrap">

    @foreach ($viewData['images'] as $image)
      @if ($image->getFilename() == $viewData['game']->getImage())
        @continue
      @endif

      <div class="col-md-4">
        <div class="card">
          <img width="100%" height="200" style="object-fit:cover;"
            src="./../../../image/games/{{ $viewData['game']->getId() }}/{{ $image->getFilename() }} " alt=""
            srcset="">
          <div class="card-body">
            <a href="{{ route('admin.gameDeleteImage', $viewData['game']->getId() . ' $- ' . $image->getFilename()) }}"
              class="btn btn-outline-danger stretched-link">
              @lang('messages.gameDelete')
              <i class="fas fa-trash"></i>
            </a>
          </div>
        </div>
      </div>
    @endforeach

  </div>

@endsection
