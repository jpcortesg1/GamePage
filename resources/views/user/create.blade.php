@extends('adminlte::page') @section('title', $viewData["title"])
@section('content_header')
<h1>Create User</h1>
@stop @section('content')

<form
  action="{{ route('admin.userStore') }}"
  enctype="multipart/form-data"
  method="POST"
>
  @method('POST')
  @csrf
    <div class="mb-3">
        <label for="" class="form-label">{{ __('Name') }}</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">{{ __('Email Address') }}</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">{{ __('Password') }}</label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">{{ __('Confirm Password') }}</label>
        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Role</label>
        <div class="col-md-6">
            <input id="rol" name="rol" type="text" class="form-control" tabindex="2"/>
        </div>
    </div>
    <a href="{{ route('admin.user') }}" class="btn btn-secondary" tabindex="5">Cancel</a>
    <button type="submit" class="btn bg-dark text-white">{{ __('Register') }}</button>
</form>
@stop 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css" />
@stop 
@section('js') 
@stop