@extends("layouts.app")
@section("title", $viewData["title"])
@section("content")

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
        <a href="#" class="btn btn-outline-light mt-5">Get Started</a>
      </div>

    </div>

    <div class="col-md-5">
      <img src="./img/logo1.png" alt="">
    </div>
  </div>
</div>

<div class="container pt-5">
  <!-- Carousel -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.pexels.com/photos/442576/pexels-photo-442576.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" style="height: 80vh; object-fit :cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://images.pexels.com/photos/163036/mario-luigi-yoschi-figures-163036.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" style="height: 80vh; object-fit :cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://images.pexels.com/photos/1111597/pexels-photo-1111597.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" style="height: 80vh; object-fit :cover;" alt="...">
      </div>
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
      <h2 class="text-center">Recomendados</h2>
      <a href="#" class="list-group-item list-group-item-action bg-dark text-light" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="https://images.pexels.com/photos/194511/pexels-photo-194511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="..." style="width: 20%;">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1">List group item heading</h5>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </div>
          <small>3 days ago</small>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action bg-dark text-light" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="https://images.pexels.com/photos/194511/pexels-photo-194511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="..." style="width: 20%;">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1">List group item heading</h5>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </div>
          <small>3 days ago</small>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action bg-dark text-light" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="https://images.pexels.com/photos/194511/pexels-photo-194511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="..." style="width: 20%;">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1">List group item heading</h5>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </div>
          <small>3 days ago</small>
        </div>
      </a>
    </div>
    <div class="list-group my-5 col-md-6">
    <h2 class="text-center">Mas vendidos</h2>
      <a href="#" class="list-group-item list-group-item-action bg-dark text-light" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="https://images.pexels.com/photos/194511/pexels-photo-194511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="..." style="width: 20%;">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1">List group item heading</h5>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </div>
          <small>3 days ago</small>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action bg-dark text-light" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="https://images.pexels.com/photos/194511/pexels-photo-194511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="..." style="width: 20%;">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1">List group item heading</h5>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </div>
          <small>3 days ago</small>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action bg-dark text-light" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="https://images.pexels.com/photos/194511/pexels-photo-194511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="..." style="width: 20%;">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1">List group item heading</h5>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </div>
          <small>3 days ago</small>
        </div>
      </a>
    </div>
  </div>

  <!-- Category -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img style="height: 50vh; object-fit :cover;" src="https://images.pexels.com/photos/1111597/pexels-photo-1111597.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img style="height: 50vh; object-fit :cover;" src="https://images.pexels.com/photos/1111597/pexels-photo-1111597.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img style="height: 50vh; object-fit :cover;" src="https://images.pexels.com/photos/1111597/pexels-photo-1111597.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- List -->
  <div class="row">
    <div class="list-group my-5 col-md-6">
      <h2 class="text-center">Recomendados</h2>
      <a href="#" class="list-group-item list-group-item-action bg-dark text-light" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="https://images.pexels.com/photos/194511/pexels-photo-194511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="..." style="width: 20%;">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1">List group item heading</h5>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </div>
          <small>3 days ago</small>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action bg-dark text-light" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="https://images.pexels.com/photos/194511/pexels-photo-194511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="..." style="width: 20%;">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1">List group item heading</h5>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </div>
          <small>3 days ago</small>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action bg-dark text-light" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="https://images.pexels.com/photos/194511/pexels-photo-194511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="..." style="width: 20%;">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1">List group item heading</h5>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </div>
          <small>3 days ago</small>
        </div>
      </a>
    </div>
    <div class="list-group my-5 col-md-6">
    <h2 class="text-center">Mas vendidos</h2>
      <a href="#" class="list-group-item list-group-item-action bg-dark text-light" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="https://images.pexels.com/photos/194511/pexels-photo-194511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="..." style="width: 20%;">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1">List group item heading</h5>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </div>
          <small>3 days ago</small>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action bg-dark text-light" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="https://images.pexels.com/photos/194511/pexels-photo-194511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="..." style="width: 20%;">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1">List group item heading</h5>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </div>
          <small>3 days ago</small>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action bg-dark text-light" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="https://images.pexels.com/photos/194511/pexels-photo-194511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="..." style="width: 20%;">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="mb-1">List group item heading</h5>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </div>
          <small>3 days ago</small>
        </div>
      </a>
    </div>
  </div>
</div>

@endsection