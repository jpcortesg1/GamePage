<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d0753c10f6.js" crossorigin="anonymous"></script>
  <style>
    ::-webkit-scrollbar {
      width: 5px;
    }

    ::-webkit-scrollbar-track {
      background: #f1f1f1
    }

    ::-webkit-scrollbar-thumb {
      background: rgb(179, 179, 179);
    }

  </style>
  <title>@yield("title", "CRUD")</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home.index') }}"><img src="{{ URL::to('/') }}/img/logo1.png"
          style="height: 3rem;" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <div class="container-fluid">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('home.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home.about') }}">About</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('home.support') }}" class="nav-link">Support</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
    @guest
      <a class="btn btn-outline-light mx-3" href="{{ route('login') }}">Login</a>
      <a class="btn btn-outline-light mx-3" href="{{ route('register') }}">Register</a>
    @else
      <div class="d-flex">
        <li class="nav-item d-flex">
          <a class="btn btn-outline-light mx-3" href="{{ route('cart.index') }}">
            <i class="fa-solid fa-cart-shopping"></i>
          </a>
        </li>
        <li class="nav-item d-flex">
          <a class="btn btn-outline-light mx-3" href="{{ route('user.show', Auth::id()) }}">Account</a>
        </li>
        @if (Auth::user()->getRol() == 'admin')
          <li class="nav-item d-flex">
            <a class="btn btn-outline-light mx-3" href="{{ route('admin.index', Auth::id()) }}">Admin</a>
          </li>
        @endif
        <form id="logout" action="{{ route('logout') }}" method="POST" class="d-flex">
          @csrf
          @method('POST')
          <button class="btn btn-outline-light mx-3 ml-15" type="submit">Logout</button>
        </form>
      </div>
      @csrf
    @endguest
    </div>
  </nav>

  <div style="margin-top: 3.5rem; min-height: calc(100vh - 3rem);">
    @yield("content")
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-center text-white absolute-bottom">
    <div class="container p-4">
      <section class="mb-4">
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
      </section>
      <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio
          earum repellat quaerat voluptatibus placeat nam, commodi optio pariatur
          est quia magnam eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
      </section>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2022 Copyright:
      <div class="d-flex flex-column">
        <a class="text-white" href="https://mdbootstrap.com/">Juan Pablo Cortes</a>
        <a class="text-white" href="https://mdbootstrap.com/">Sebastian Velez</a>
      </div>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>
