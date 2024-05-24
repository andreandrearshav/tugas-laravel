<nav class="navbar navbar-expand-lg bg-gray-25">
  <div class="container">
    <img src="{{ asset('img/amandemy.png') }}" height="60" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                    <a class="nav-link" href="{{ ('dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ ('products') }}">Products</a>
                </li>
                @if(auth()->check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="{{ url('profile') }}">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ url('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-warning">Register</a>
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                      </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

{{-- <nav class="navbar navbar-expand-lg bg-gray-25 ">
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
            <a class="btn btn-primary " href="">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}