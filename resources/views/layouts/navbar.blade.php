
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold text-primary text-decoration-underline fs-3 h-font" href="#">NEIGHBOURS' PARKING</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-3" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="{{url('about')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="{{url('services')}}">Our Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="{{url('contacts')}}">Contact Us</a>
        </li>
      </ul>

      @if (Auth::check()) <!-- Check if the user is logged in -->
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
            <a class="nav-link me-3" href="{{ route('client.logout') }}">Logout</a>
          </button>
        </div>

      @else <!-- User is not logged in -->
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
            <a class="nav-link me-3" href="{{ route('login') }}" style="color: #f92770;">Login</a>
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3">
            <a class="nav-link me-3" href="{{ route('register') }}" style="color: #f92770;">Register</a>
          </button>
        </div>
      @endif
    </div>
  </div>
</nav>
<span><p class="h-font text-primary text-center pt-3 fw-bolder fst-italic fs-6"> "Park Smart, Park Safe." </p></span>
<hr>