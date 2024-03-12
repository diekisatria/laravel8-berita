  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
          <a class="navbar-brand fw-bold" href="{{ route('index') }}"><img src="{{ url('/assets/images/logo.png') }}"
                  alt="" height="70" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ms-auto font-1 font-18">

                  @auth
                      <a class="nav-link text-dark me-md-4" href="/dashboard/posts">Posts</a>
                  @else
                      <a class="nav-link text-dark me-md-4" href="{{ route('posts') }}">News</a>
                      <a class="nav-link text-dark me-md-4" href="{{ route('categories') }}">Categories</a>
                  @endauth


                  {{-- kalau sudah login @auth --}}
                  @auth
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              Hallo, {{ auth()->user()->name }}
                          </a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                              <li>
                                  <hr class="dropdown-divider">
                              </li>
                              <li>
                                  <form action="/logout" method="post">
                                      @csrf
                                      <button type="submit" class="dropdown-item">Logout</button>
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @else
                      {{-- kalau belum login @guest --}}
                      <a class="nav-link text-dark me-md-4" href="/login">Login</a>
                  @endauth
              </div>
          </div>
      </div>
  </nav>

  {{-- cek active link lewat directive  || Request::is('dashboard') ? active : ''  --}}
  <!-- End Navbar -->
