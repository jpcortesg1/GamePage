@extends("layouts.app") @section('title', $viewData['title'])
@section('content')

  <div class="bg-dark text-light">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 3rem)">
        <div class="col-md-6">
          <h1 class="text-center">{{ $viewData['game']->getName() }}</h1>
          <p class="card-text">{{ $viewData['game']->getDescription() }}</p>

          <ul class="list-group list-group-flush rounded">
            <li class="list-group-item d-flex bg-dark text-light">
              <p class="w-100">
                <i class="fas fa-user"></i>
                <span class="font-weight-bold">Developer: </span>
                {{ $viewData['game']->getDeveloper() }}
              </p>
              <p class="w-100">
                <i class="fas fa-tag"></i>
                <span class="font-weight-bold">Category: </span>
                {{ $viewData['category']->getName() }}
              </p>
            </li>
            <li class="list-group-item d-flex bg-dark text-light">
              <p class="w-100">
                <i class="fas fa-dollar-sign"></i>
                <span class="font-weight-bold">Price: </span>
                {{ $viewData['game']->getPrice() }}
              </p>
              <p class="w-100">
                <i class="fas fa-id-badge"></i>
                <span class="font-weight-bold">Age Rating: </span>
                {{ $viewData['game']->getAgerating() }}
              </p>
            </li>
            <li class="list-group-item d-flex bg-dark text-light">
              <p class="w-100">
                <i class="fas fa-abacus"></i>
                <span class="font-weight-bold">Buy quantity: </span>
                {{ $viewData['game']->getBuyquantity() }}
              </p>
              <p class="w-100">
                <i class="fas fa-calendar-plus"></i>
                <span class="font-weight-bold">Release Data: </span>
                {{ $viewData['game']->getReleasedate() }}
              </p>
            </li>
            <li class="list-group-item d-flex bg-dark text-light">
              <p class="w-100">
                <i class="fas fa-calendar"></i>
                <span class="font-weight-bold">Date update: </span>
                {{ $viewData['game']->getUpdateAt() }}
              </p>
              <p class="w-100">
                <i class="fas fa-calendar-check"></i>
                <span class="font-weight-bold">Date create: </span>
                {{ $viewData['game']->getCreateAt() }}
              </p>
            </li>
          </ul>

          <div class="card-body d-flex justify-content-evenly">
            <a class="btn btn-outline-light" href="{{ route('cart.add', $viewData['game']->getId()) }}">
              Add To Cart
              <i class="fa-solid fa-cart-arrow-down"></i>
            </a>
            <a href="{{ route('game.buy', $viewData['game']->getId()) }}" class="btn btn-outline-light">
              Buy now
              <i class="fa-solid fa-money-bill"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <img 
          src="{{ URL::to('/') }}/image/games/{{ $viewData['game']->getId() }}/{{ $viewData['game']->getImage() }}"
            class="card-img-top" alt="..." style="max-height: 80vh; object-fit:cover;" ; />
        </div>
      </div>
    </div>
  </div>

  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      @for ($i = 0; $i < count($viewData['images']); $i += 2)
        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
          @if ($i + 1 < count($viewData['images']))
            <div class="d-flex">
              <img
                src="{{ URL::to('/') }}/image/games/{{ $viewData['games'][$i]->getId() }}/{{ $viewData['games'][$i]->getImage() }}"
                style="height: 50vh; object-fit: cover" class="d-block w-100" alt="..." />
              <img
                src="{{ URL::to('/') }}/image/games/{{ $viewData['games'][$i + 1]->getId() }}/{{ $viewData['games'][$i + 1]->getImage() }}"
                style="height: 50vh; object-fit: cover" class="d-block w-100" alt="..." />
            </div>
          @else
            <img
              src="{{ URL::to('/') }}/image/games/{{ $viewData['games'][$i]->getId() }}/{{ $viewData['games'][$i]->getImage() }}"
              style="width: 100%; height: 50vh; object-fit: cover" class="d-block w-100" alt="..." />
          @endif
        </div>
      @endfor
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Comments -->
  <div class="bg-dark text-light py-5">
    <div class="container">
      <div class="d-flex justify-content-center align-items-center">
        <p class="fs-3">
          <i class="fa-solid fa-comments fs-1"></i>
          <span class="fw-bold">Comments: </span>
          294
        </p>
      </div>

      <form class="form" action="{{ route('comment.store', $viewData['game']->getId()) }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-floating">
          <textarea class="form-control bg-dark text-light" placeholder="Leave a comment here" id="floatingTextarea"
            name="comment"></textarea>
          <label for="floatingTextarea">Create new comment</label>
          @error('comment')
            <div class="alert alert-danger mt-2">The field must be full</div>
          @enderror
          <button type="submit" class="btn btn-outline-light mt-2">Create</button>
        </div>
      </form>

      @foreach ($viewData['comments'] as $comment)
        <x-comment-item :comment="$comment" />
      @endforeach

    </div>
  </div>

@endsection
