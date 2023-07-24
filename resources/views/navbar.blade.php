<div class="container-fluid bg-primary p-2">
    <div class="text-center text-light">
        <span class="fw-normal">Get free delivery on orders over &#8369;200!</span>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home.index') }}"><i class="bi bi-tropical-storm"></i> Fancy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @if(Auth::user())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{auth()->user()->firstname}} {{auth()->user()->lastname}}
                </a>
                <ul class="dropdown-menu">
                    <li class="text-center"><span class="text-muted">User | Customer</span></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('home.index') }}">Cart</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </li>
        @else
            <li class="nav-item">
                <ul class="navbar-nav">
                    <li>
                        <a href="{{ route('signin') }}" class="text-dark">Sign In</a> | <a href="{{ route('signup') }}" class="text-dark">Sign Up</a>
                    </li>
                </ul>
            </li>
        @endif
      </ul>
    </div>
  </div>
</nav>