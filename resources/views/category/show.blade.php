@extends("layouts.app")
@section("title", $viewData["title"])
@section("content")

<div class="container">
  <h1 class="text-center">{{ $viewData["subtitle"] }}</h1>

  <p>
    Description of category Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quibusdam architecto sit facilis repudiandae magni nulla fuga quam minus dicta!
  </p>

  <h3 class="text-center my-5">News</h3>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://cdn.pixabay.com/photo/2021/09/07/07/11/game-console-6603120_960_720.jpg" style="height: 50vh; object-fit:cover;" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdn.pixabay.com/photo/2021/09/07/07/11/game-console-6603120_960_720.jpg" style="height: 50vh; object-fit:cover;" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdn.pixabay.com/photo/2021/09/07/07/11/game-console-6603120_960_720.jpg" style="height: 50vh; object-fit:cover;" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <h3 class="text-center my-5">Highlights</h3>

  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <div class="d-flex" style="flex-wrap:wrap;">
          <img style="width: 33%; height: 50vh; object-fit:cover;" src="https://images.pexels.com/photos/1174746/pexels-photo-1174746.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block" alt="...">
          <img style="width: 33%; height: 50vh; object-fit:cover;" src="https://images.pexels.com/photos/1174746/pexels-photo-1174746.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block" alt="...">
          <img style="width: 33%; height: 50vh; object-fit:cover;" src="https://images.pexels.com/photos/1174746/pexels-photo-1174746.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block" alt="...">
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <div class="d-flex" style="flex-wrap:wrap;">
          <img style="width: 33%; height: 50vh; object-fit:cover;" src="https://images.pexels.com/photos/1174746/pexels-photo-1174746.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block" alt="...">
          <img style="width: 33%; height: 50vh; object-fit:cover;" src="https://images.pexels.com/photos/1174746/pexels-photo-1174746.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block" alt="...">
          <img style="width: 33%; height: 50vh; object-fit:cover;" src="https://images.pexels.com/photos/1174746/pexels-photo-1174746.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block" alt="...">
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex" style="flex-wrap:wrap;">
          <img style="width: 33%; height: 50vh; object-fit:cover;" src="https://images.pexels.com/photos/1174746/pexels-photo-1174746.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block" alt="...">
          <img style="width: 33%; height: 50vh; object-fit:cover;" src="https://images.pexels.com/photos/1174746/pexels-photo-1174746.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block" alt="...">
          <img style="width: 33%; height: 50vh; object-fit:cover;" src="https://images.pexels.com/photos/1174746/pexels-photo-1174746.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block" alt="...">
        </div>
      </div>
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

  <div class="row">
    <h2 class="text-center my-5">{{ $viewData["subtitle"] }}</h2>

    <div class="row">
      <div class="list-group my-2 col-md-6">
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
      <div class="list-group my-2 col-md-6">
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

    <div class="row">
      <div class="list-group my-2 col-md-6">
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
      <div class="list-group my-2 col-md-6">
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

    <div class="row">
      <div class="list-group my-2 col-md-6">
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
      <div class="list-group my-2 col-md-6">
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

    <div class="row">
      <div class="list-group my-2 col-md-6">
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
      <div class="list-group my-2 col-md-6">
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

</div>

@endsection