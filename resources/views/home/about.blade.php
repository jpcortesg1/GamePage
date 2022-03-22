@extends("layouts.app")
@section("title", $viewData["title"])
@section("content")

<div class="d-flex justify-content-around align-items-center" style="height: calc(100vh - 3rem);">
  <div class="container d-flex justify-content-around align-items-center">
    <div class="col-md-6">
      <h1 class="text-center">Game Store</h1>
        <p class="fs-3">This is the ultimate destination for buying, discussing, and everything game related.</p>
        <div class="d-flex p-4 justify-content-between">
          <p>
            <i class="fa-solid fa-gamepad"></i>
            <span class="fw-bold mx-1">Quantiy:</span>13.450
          </p>

          <p>
            <i class="fa-solid fa-user"></i>
            <span class="fw-bold mx-1">Quantiy:</span>1.245
          </p>
        </div>
      </div>

    </div>

    <div class="col-md-5">
      <img src="./img/logo2.png" alt="">
    </div>
  </div>
</div>

  <div class="container">

    <div class="row justify-content-center my-5">
      <div class="col-md-6 bg-dark text-light p-5 rounded shadow-lg">
        <h2 class="text-center">You can get all games</h2>
        <p class="fs-4">With nearly every games from Action to indie and everything in-between. Enjoy our comment section, game updates, and great game content.</p>
        <a href="{{ route('category.index') }}" class="btn btn-outline-light">Explore <i class="fa-solid fa-right-long"></i></a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <h1 class="text-center">Community</h1>
        <p class="fs-3">Meet new people to play you favorite games, show and talk about you experiences! the fun never stops.</p>
        <div class="d-flex p-4 justify-content-center">
          <p>
            <i class="fa-solid fa-people-group"></i>
            <span class="fw-bold mx-1">Quantiy:</span>13.450
          </p>
        </div>
        <div class="d-flex justify-content-center align-items-center">
          <a href="{{ route('register') }}" class="btn btn-outline-dark">Get Started <i class="fa-solid fa-right-long"></i></a>
        </div>
      </div>
      <div class="col-md-6">
        <img src="https://cdn.pixabay.com/photo/2018/11/29/21/51/social-media-3846597_960_720.png" style="width: 100%; height: 50vh; object-fit:cover;" alt="">
      </div>
    </div>
    </div>

    <div class="bg-dark text-light w-100">  
      <div class="container p-5 d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-6">
          <h3 class="text-center">Features</h3>
          <p class="fs-5">We are allways trying to improve and add new features for all gamers such as:</p>
        </div>

        <div class="col-md-8 row my-5">
          <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-people-group fs-1"></i>
            <h3>Community</h3>
            <p class="">A fast growing community, new comments and discussions in every game for any topic you can imagine!</p>
          </div>
          <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-plus fs-1"></i>
            <h3>Variety</h3>
            <p class="">Adding games every day to improve and grow our catalog, and constantly updating allready added games!</p>
          </div>
          <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-leaf fs-1"></i>
            <h3>easiness</h3>
            <p class="">Easy design that anyone can understand, consumer friendly and multilingual!</p>
          </div>
        </div>

        <div class="col-md-8 row my-5">
          <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-ranking-star fs-1"></i>
            <h3>Default Access</h3>
            <p class="">Easy access, have your entire catalog of games in a single place, no needs for other apps or sites!</p>
          </div>
          <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-star fs-1"></i>
            <h3>status</h3>
            <p class="">Game status displayed, with how many people are currently playing and allways updating most recomended games for you!</p>
          </div>
          <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-face-laugh-beam fs-1"></i>
            <h3 class="text-center">Experience</h3>
            <p class="">Awesome experience, connect with your friends and enjoy everything game related!</p>
          </div>
        </div>
      </div>
    </div>

@endsection