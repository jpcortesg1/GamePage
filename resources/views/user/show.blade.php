@if (Auth::user()->getRol() == 'admin')
  @extends('adminlte::page') @section('title', 'Admin panel')
  @section('content_header')
  <h1>Admin Account</h1>
  @stop
@else
  @extends("layouts.app")
  @section('title',"pagina")
  
@endif
@section('content')
  <div class="d-flex justify-content-around">
    <div class="bg-dark text-light pt-3" style="min-height: 100vh;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            @if ($viewData['current'])
              <form action="{{ route('user.update', $viewData['user']->getId()) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">@lang('messages.userName'):</label>
                  <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                    value="{{ $viewData['user']->getName() }}">
                  @error('name')
                    <span class="invalid-feedback d-block" role="alert">
                      <strong>*{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">@lang('messages.userEmail'):</label>
                  <input type="email" class="form-control" id="email" name="email"
                    value="{{ $viewData['user']->getEmail() }}">
                  @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                      <strong>*{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">@lang('messages.userPassword'):</label>
                  <input type="password" class="form-control" id="password" name="password"
                    placeholder="writte your new password">
                  @error('password')
                    <span class="invalid-feedback d-block" role="alert">
                      <strong>*{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-check-label" for="image">@lang('messages.userImage')</label>
                  <input type="file" class="" id="image" name="image">
                  @error('image')
                    <span class="invalid-feedback d-block" role="alert">
                      <strong>*{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="image">
                  <img src="{{ URL::to('/') }}/image/user/{{ $viewData['user']->getImage() }}" alt=""
                    style="max-width: 10rem; max-height: 10rem; object-fit: cover;">
                </div>
                <button type="submit" class="btn btn-outline-light">@lang('messages.userUpdate')</button>
              </form>
            @else
              <div class="image d-flex justify-content-center">
                <img src="{{ URL::to('/') }}/image/user/{{ $viewData['user']->getImage() }}" alt=""
                  style="max-width: 10rem; max-height: 10rem; object-fit: cover;">
              </div>
              <div class="group d-flex flex-column justify-content-center align-items-center">
                <span class="fw-bold">@lang('messages.userName'): </span>
                <p class="fw-light">{{ $viewData['user']->getName() }}</p>
              </div>
              <div class="group d-flex flex-column justify-content-center align-items-center">
                <span class="fw-bold">@lang('messages.userEmail'): </span>
                <p class="fw-light">{{ $viewData['user']->getEmail() }}</p>
              </div>
              <div class="group d-flex flex-column justify-content-center align-items-center">
                <span class="fw-bold">@lang('messages.userCreatedAt'): </span>
                <p class="fw-light">{{ $viewData['user']->getCreateAt() }}</p>
              </div>
            @endif
          </div>
          <div class="col-md-6 d-flex justify-content-around flex-wrap"
            style="max-height: calc(100vh - 5rem); overflow-y: scroll;">
            @foreach ($viewData['user']['comments'] as $comment)
              <div class="card bg-dark border border-light my-1" style="width: 15rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $comment['game'][0]->getName() }}</h5>
                  <p class="card-text">{{ $comment->getComment() }}</p>
                  <div class="deleteAndDate d-flex">
                    <p> {{ $comment->getCreateAt() }} </p>
                    @if ($viewData['current'])
                      <a href="{{ route('comment.delete', $comment->getId()) }}" class="btn btn-outline-danger ms-2"><i class="fa-solid fa-trash-can"></i></a>
                    @endif
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
