@extends('layouts.app')
@section("title", $viewData["title"])
@section("subtitle", $viewData["subtitle"])
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Available games</h1>
            <ul>
                @foreach($viewData["games"] as $key => $game)
                    <li>
                    Id: {{ $key }} -
                    Name: {{ $game["name"] }} -
                    Price: {{ $game["price"] }} -
                    <a href="{{ route('cart.add', ['id'=> $key]) }}">Add to cart</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Products in cart</h1>
            <ul>
                @foreach($viewData["gamesInCart"] as $key => $game)
                    <li>
                    Id: {{ $key }} -
                    Name: {{ $game["name"] }} -
                    Price: {{ $game["price"] }}
                    </li>
                @endforeach
            </ul>
            <a href="{{ route('cart.removeAll') }}">Remove all games from cart</a>
        </div>
    </div>
</div>
@endsection