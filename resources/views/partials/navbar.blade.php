<nav class="navbar navbar-expand-lg bg-gray-25 ">
    <div class="container">
    <img src="{{ asset('img/amandemy.png') }}" height="60" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav  ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ ('dashboard') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ ('products') }}">Products</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary " href="#">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>