@extends("layouts.app")
@section("title", $viewData["title"])
@section("content")

<div class="bg-dark text-light">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 3rem);">
      <div class="col-md-6">
        <h1 class="text-center">{{ $viewData["subTitle"] }}</h1>
        <p class="card-text">
          Description of game Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa debitis maxime, recusandae perspiciatis dolor voluptatem, nisi repellendus doloremque aperiam animi tempore placeat dolorem nihil nostrum, facere quibusdam similique. Perspiciatis, fugit.
        </p>

        <ul class="list-group list-group-flush rounded">
          <li class="list-group-item d-flex bg-dark text-light">
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
          <li class="list-group-item d-flex bg-dark text-light">
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
          <li class="list-group-item d-flex bg-dark text-light">
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
      <div class="col-md-6">
        <img src="https://cdn.pixabay.com/photo/2015/12/23/22/36/minecraft-1106252_960_720.jpg" class="card-img-top" alt="...">
      </div>
    </div>
  </div>
</div>

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

    <div class="comment ps-2 my-5" style="border-left: 2px solid #fff;">
      <div class="d-flex align-items-center">
        <div class="photo">
          <img class="rounded-circle" src="https://images.pexels.com/photos/11438375/pexels-photo-11438375.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" style="width: 3rem; height: 3rem; object-fit: cover;">
        </div>
        <div class="name mx-3 fs-5">Jane</div>
        <span class="date"> <i class="fa-solid fa-calendar"></i> 13 agus</span>
      </div>

      <div class="center">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nihil quae sapiente eos eius blanditiis a et omnis laudantium architecto! Molestias fugiat laudantium perferendis. Molestias alias molestiae dolorem enim omnis.
      </div>

      <div class="bottom ms-3">
        <i class="fa-solid fa-comment"></i>
      </div>

      <div class="responses">
        <div class="comment ps-2 my-5" style="border-left: 2px solid #fff;">
          <div class="d-flex align-items-center">
            <div class="photo">
              <img class="rounded-circle" src="https://images.pexels.com/photos/11438375/pexels-photo-11438375.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" style="width: 3rem; height: 3rem; object-fit: cover;">
            </div>
            <div class="name mx-3 fs-5">Jane</div>
            <span class="date"> <i class="fa-solid fa-calendar"></i> 13 agus</span>
          </div>

          <div class="center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nihil quae sapiente eos eius blanditiis a et omnis laudantium architecto! Molestias fugiat laudantium perferendis. Molestias alias molestiae dolorem enim omnis.
          </div>

          <div class="bottom ms-3">
            <i class="fa-solid fa-comment"></i>
          </div>

          <div class="responses">
            
          </div>
        </div>

        <div class="comment ps-2 my-5" style="border-left: 2px solid #fff;">
          <div class="d-flex align-items-center">
            <div class="photo">
              <img class="rounded-circle" src="https://images.pexels.com/photos/11438375/pexels-photo-11438375.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" style="width: 3rem; height: 3rem; object-fit: cover;">
            </div>
            <div class="name mx-3 fs-5">Jane</div>
            <span class="date"> <i class="fa-solid fa-calendar"></i> 13 agus</span>
          </div>

          <div class="center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nihil quae sapiente eos eius blanditiis a et omnis laudantium architecto! Molestias fugiat laudantium perferendis. Molestias alias molestiae dolorem enim omnis.
          </div>

          <div class="bottom ms-3">
            <i class="fa-solid fa-comment"></i>
          </div>

          <div class="responses">
          
          <div class="comment ps-2 my-5" style="border-left: 2px solid #fff;">
            <div class="d-flex align-items-center">
              <div class="photo">
                <img class="rounded-circle" src="https://images.pexels.com/photos/11438375/pexels-photo-11438375.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" style="width: 3rem; height: 3rem; object-fit: cover;">
              </div>
              <div class="name mx-3 fs-5">Jane</div>
              <span class="date"> <i class="fa-solid fa-calendar"></i> 13 agus</span>
            </div>

            <div class="center">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nihil quae sapiente eos eius blanditiis a et omnis laudantium architecto! Molestias fugiat laudantium perferendis. Molestias alias molestiae dolorem enim omnis.
            </div>

            <div class="bottom ms-3">
              <i class="fa-solid fa-comment"></i>
            </div>

            <div class="responses">
              
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>

    <div class="comment ps-2 my-5" style="border-left: 2px solid #fff;">
      <div class="d-flex align-items-center">
        <div class="photo">
          <img class="rounded-circle" src="https://images.pexels.com/photos/11438375/pexels-photo-11438375.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" style="width: 3rem; height: 3rem; object-fit: cover;">
        </div>
        <div class="name mx-3 fs-5">Jane</div>
        <span class="date"> <i class="fa-solid fa-calendar"></i> 13 agus</span>
      </div>

      <div class="center">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nihil quae sapiente eos eius blanditiis a et omnis laudantium architecto! Molestias fugiat laudantium perferendis. Molestias alias molestiae dolorem enim omnis.
      </div>

      <div class="bottom ms-3">
        <i class="fa-solid fa-comment"></i>
      </div>

      <div class="responses">
        <div class="comment ps-2 my-5" style="border-left: 2px solid #fff;">
          <div class="d-flex align-items-center">
            <div class="photo">
              <img class="rounded-circle" src="https://images.pexels.com/photos/11438375/pexels-photo-11438375.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" style="width: 3rem; height: 3rem; object-fit: cover;">
            </div>
            <div class="name mx-3 fs-5">Jane</div>
            <span class="date"> <i class="fa-solid fa-calendar"></i> 13 agus</span>
          </div>

          <div class="center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nihil quae sapiente eos eius blanditiis a et omnis laudantium architecto! Molestias fugiat laudantium perferendis. Molestias alias molestiae dolorem enim omnis.
          </div>

          <div class="bottom ms-3">
            <i class="fa-solid fa-comment"></i>
          </div>

          <div class="responses">
            
          </div>
        </div>

        <div class="comment ps-2 my-5" style="border-left: 2px solid #fff;">
          <div class="d-flex align-items-center">
            <div class="photo">
              <img class="rounded-circle" src="https://images.pexels.com/photos/11438375/pexels-photo-11438375.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" style="width: 3rem; height: 3rem; object-fit: cover;">
            </div>
            <div class="name mx-3 fs-5">Jane</div>
            <span class="date"> <i class="fa-solid fa-calendar"></i> 13 agus</span>
          </div>

          <div class="center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nihil quae sapiente eos eius blanditiis a et omnis laudantium architecto! Molestias fugiat laudantium perferendis. Molestias alias molestiae dolorem enim omnis.
          </div>

          <div class="bottom ms-3">
            <i class="fa-solid fa-comment"></i>
          </div>

          <div class="responses">
          
          <div class="comment ps-2 my-5" style="border-left: 2px solid #fff;">
            <div class="d-flex align-items-center">
              <div class="photo">
                <img class="rounded-circle" src="https://images.pexels.com/photos/11438375/pexels-photo-11438375.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" style="width: 3rem; height: 3rem; object-fit: cover;">
              </div>
              <div class="name mx-3 fs-5">Jane</div>
              <span class="date"> <i class="fa-solid fa-calendar"></i> 13 agus</span>
            </div>

            <div class="center">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nihil quae sapiente eos eius blanditiis a et omnis laudantium architecto! Molestias fugiat laudantium perferendis. Molestias alias molestiae dolorem enim omnis.
            </div>

            <div class="bottom ms-3">
              <i class="fa-solid fa-comment"></i>
            </div>

            <div class="responses">
              
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection