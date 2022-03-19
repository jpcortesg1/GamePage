@extends("layouts.app")
@section("title", $viewData["title"])
@section("content")

<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="card col-md-10 p-5 bg-dark text-light">
      <img src="https://cdn.pixabay.com/photo/2015/12/23/22/36/minecraft-1106252_960_720.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h1 class="text-center">{{ $viewData["subTitle"] }}</h1>
        <p class="card-text">
          Description of game Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa debitis maxime, recusandae perspiciatis dolor voluptatem, nisi repellendus doloremque aperiam animi tempore placeat dolorem nihil nostrum, facere quibusdam similique. Perspiciatis, fugit.
        </p>
      </div>
      <ul class="list-group list-group-flush rounded">
        <li class="list-group-item d-flex">
          <p class="w-100">
            <i class="fa-solid fa-calendar-check"></i>
            <span class="fw-bold mx-1">Release date:</span> 
            23 agu
          </p>
          <p class="w-100">
            <i class="fa-solid fa-align-left"></i>
            <span class="fw-bold mx-1">Comments:</span> 
            30
          </p>
        </li>
        <li class="list-group-item d-flex">
          <p class="w-100">
            <i class="fa-solid fa-clock"></i>
            <span class="fw-bold mx-1">Last Update:</span> 
            30 dec
          </p>
          <p class="w-100">
            <i class="fa-solid fa-person"></i>
            <span class="fw-bold mx-1">Developer:</span> 
            Carlos Aguirre
          </p>
        </li>
        <li class="list-group-item d-flex">
          <p class="w-100">
            <i class="fa-solid fa-tag"></i>
            <span class="fw-bold mx-1">Category:</span> 
            Carlos Aguirre
          </p>
          <p class="w-100">
            <i class="fa-solid fa-list"></i>
            <span class="fw-bold mx-1">Top:</span> 
            Carlos Aguirre
          </p>
        </li>
      </ul>
      <div class="card-body d-flex justify-content-evenly">
        <button href="#" class="btn btn-outline-light">
          add to cart 
          <i class="fa-solid fa-cart-arrow-down"></i>
        </button>
        <a href="#" class="btn btn-outline-light">
          Buy now
          <i class="fa-solid fa-cart-arrow-down"></i>
        </a>
      </div>
    </div>
  </div>
</div>

@endsection