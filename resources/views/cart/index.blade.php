@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

  <div class="bg-dark text-light" style="min-height: 100vh;">
    <div class="container pt-5">
      <div class="row">
        <h1>@lang('messages.cartTitle')</h1>

        <!-- Buttons -->
        <div class="mb-3" role="group" aria-label="Basic example">
          <a href="{{ route('cart.checkOut') }}" class="btn btn-outline-light">@lang('messages.cartCheckout')</a>
          <a href="{{ route('cart.removeAll') }}" class="btn btn-outline-light">@lang('messages.cartDelete')</a>
        </div>

        <!-- All items -->
        <div class="d-flex flex-wrap justify-content-around">

          @foreach ($viewData['games'] as $game)
            <div class="card m-1 bg-dark border border-light" style="width: 30%;">
              <div class="card-body">
                <h5 class="card-title">{{ $game->getName() }}</h5>
                <img src="./../../image/games/{{ $game->getId() }}/{{ $game->getImage() }}" alt=""
                  style="width: 100%; max-height: 10rem;">
                <a href="{{ route('cart.remove', $game->getId()) }}" class="btn btn-outline-light mt-3">@lang('messages.cartRemove')</a>
              </div>
            </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
@endsection
