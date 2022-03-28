@extends("layouts.app")
@section('title', $viewData['title'])
@section('content')

  {{-- Banner --}}
  <div class="bg-dark text-light d-flex justify-content-around align-items-center" style="height: calc(100vh - 3rem);">
    <div class="container d-flex justify-content-around align-items-center">
      <div class="col-md-5">
        <h1>Game Store</h1>
        <h2>Why?</h2>
        <p class="fs-3">Because is the best page to search, buy and review games.</p>

        <h3 class="text-center">You Can:</h3>
        <div class="row">
          <div class="col-md-4 d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-money-bill fs-5 mb-1 me-2"></i>
            <h3>Buy</h3>
          </div>
          <div class="col-md-4 d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-magnifying-glass fs-5 mb-1 me-2"></i>
            <h3>Search</h3>
          </div>
          <div class="col-md-4 d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-comment fs-5 mb-1 me-2"></i>
            <h3>Comment</h3>
          </div>
          @guest
            <a href="{{ route('register') }}" class="btn btn-outline-light mt-5">Get Started</a>
          @else
            <a href="{{ route('category.index') }}" class="btn btn-outline-light mt-5">See Categories</a>
          @endguest
        </div>

      </div>

      <div class="col-md-5">
        <img src="./img/logo1.png" alt="">
      </div>
    </div>
  </div>

  {{-- Main content --}}
  <div class="container pt-5">
    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @for ($i = 0; $i < min(count($viewData['lastGames']), 5); $i++)
          <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
            <a href="{{ route('game.index', $viewData['lastGames'][$i]->getId()) }}">
              <img
                src="{{ URL::to('/') }}/image/games/{{ $viewData['lastGames'][$i]->getId() }}/{{ $viewData['lastGames'][$i]->getImage() }}"
                style="height: 50vh; object-fit: cover" class="d-block w-100" alt="..." />
            </a>
          </div>
        @endfor
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- List -->
    <div class="row">
      <div class="list-group my-5 col-md-6">
        <h2 class="text-center">Last Games</h2>

        @foreach ($viewData['bestsellers'] as $game)
          <div class="col-md-12 bg-dark text-light d-flex p-1">
            <a href="{{ route('game.index', $game->getId()) }}"
              class="list-group-item mb-2 list-group-item-action bg-dark text-light">
              <div class="d-flex w-100">
                <img src="{{ URL::to('/') }}/image/games/{{ $game->getId() }}/{{ $game->getImage() }}"
                  class="" alt="..." style="width: 30%; max-height: 8rem" />
                <div class="d-flex flex-column justify-content-center ms-2">
                  <h5 class="mb-1">{{ $game->getName() }}</h5>
                  <p class="mb-1" style="
                                display: -webkit-box;
                                -webkit-line-clamp: 2;
                                -webkit-box-orient: vertical;
                                overflow: hidden;
                              ">
                    {{ $game->getDescription() }}
                  </p>
                </div>
              </div>
            </a>
            <div class="actions d-flex flex-column justify-content-around align-items-center">
              <a class="btn btn-outline-light" href="{{ route('cart.add', $game->getId()) }}">
                <i class="fa-solid fa-cart-arrow-down"></i>
              </a>
              <a href="{{ route('game.buy', $game->getId()) }}" class="btn btn-outline-light">
                ${{ $game->getPrice() }}
              </a>
            </div>
          </div>
        @endforeach

      </div>
      <div class="list-group my-5 col-md-6">
        <h2 class="text-center">Cheaps</h2>

        @foreach ($viewData['cheapsGame'] as $game)
          <div class="col-md-12 bg-dark text-light d-flex p-1">
            <a href="{{ route('game.index', $game->getId()) }}"
              class="list-group-item mb-2 list-group-item-action bg-dark text-light">
              <div class="d-flex w-100">
                <img src="{{ URL::to('/') }}/image/games/{{ $game->getId() }}/{{ $game->getImage() }}"
                  class="" alt="..." style="width: 30%; max-height: 8rem" />
                <div class="d-flex flex-column justify-content-center ms-2">
                  <h5 class="mb-1">{{ $game->getName() }}</h5>
                  <p class="mb-1" style="
                                  display: -webkit-box;
                                  -webkit-line-clamp: 2;
                                  -webkit-box-orient: vertical;
                                  overflow: hidden;
                                ">
                    {{ $game->getDescription() }}
                  </p>
                </div>
              </div>
            </a>
            <div class="actions d-flex flex-column justify-content-around align-items-center">
              <a class="btn btn-outline-light" href="{{ route('cart.add', $game->getId()) }}">
                <i class="fa-solid fa-cart-arrow-down"></i>
              </a>
              <a href="{{ route('game.buy', $game->getId()) }}" class="btn btn-outline-light">
                ${{ $game->getPrice() }}
              </a>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </div>

@endsection
