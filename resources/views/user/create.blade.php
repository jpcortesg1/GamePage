@extends('adminlte::page') @section('title', $viewData['title'])
@section('content_header')
  <h1>@lang('messages.userCreateUser')</h1>
  @stop @section('content')

  <form action="{{ route('admin.userStore') }}" enctype="multipart/form-data" method="POST">
    @method('POST')
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.userName')</label>
      <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
          value="{{ old('name') }}" autocomplete="name" autofocus>
        @error('name')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.userEmail')</label>
      <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
          value="{{ old('email') }}" autocomplete="email">
        @error('email')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.userPassword')</label>
      <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
          autocomplete="new-password">
        @error('password')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.userPasswordConfirm')</label>
      <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
          autocomplete="new-password">
      </div>
      @error('confirm password')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">@lang('messages.userRole')</label>
      <div class="col-md-6">
        <input id="rol" name="rol" type="text" class="form-control" tabindex="2" />
      </div>
      @error('rol')
        <span class="invalid-feedback d-block" role="alert">
          <strong>*{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <a href="{{ route('admin.user') }}" class="btn btn-secondary" tabindex="5">@lang('messages.userCancel')</a>
    <button type="submit" class="btn bg-dark text-white">{{ __('Register') }}</button>
  </form>
@stop
@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css" />
@stop
@section('js')
@stop
