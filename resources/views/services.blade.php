<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')
  @include('layouts.navbar')
  <body class="bg-light">

    <div class="contents">
      <h2 class="text-center ab-5 display-3 shadow-sm p-3 mb-3" style="color: brown;">Our Services</h2>
    </div>

    <p class="text-center fonts" >
      Welcome to our premier car parking lot booking service,<br> where convenience meets peace 
      of mind. We understand the challenges of finding a safe <br> and secure parking 
      spot, which is why we've designed a hassle-free solution for your parking 
      needs.<br> With our user-friendly platform, you can effortlessly reserve parking
       spaces in advance, ensuring a stress-free experience <br> every time you hit the
        road. Say goodbye to the frustration of searching for parking, and say 
        hello to effortless and reliable car parking with us.
    </p>

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font" style="color: brown;">OUR PARKING SPACES</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/undgrnd.webp" class="card-img-top">

            <div class="card-body">
              <h5 class="card-title fw-bold mb-4">Basement Parking</h5>
                <div class="features mb-4">
                  <h6 class="mb-1 text-primary h-font">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Spacious space
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Free Wi-Fi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Cctv Cameras
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Security guards
                  </span>
                </div>
                <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <a href="{{route('login')}}" class="btn btn-sm text-white custom-bg shadow-none me-md-2">Book</a>
                  <a href="{{url('basement')}}" class="btn btn-sm text-white custom-bg shadow-none">View more</a>
                </div>                
            </div>
          </div> 
        </div>


        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooftopp.avif" class="card-img-top">

            <div class="card-body">
              <h5 class="card-title fw-bold mb-4">Rooftop Parking</h5>
                <div class="features mb-4">
                  <h6 class="mb-1 text-primary h-font">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Spacious space
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Free Wi-Fi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Cctv Cameras
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Security guards
                  </span>
                </div>
                
                <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-half text-warning"></i>
                  </span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <a href="{{route('login')}}" class="btn btn-sm text-white custom-bg shadow-none me-4">Book</a>
                  <a href="{{url('rooftop')}}" class="btn btn-sm text-white custom-bg shadow-none">View more</a>
                </div>
            </div>
          </div> 
        </div>



        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/outdoorpark.avif" class="card-img-top">

            <div class="card-body">
              <h5 class="card-title fw-bold mb-4">Outdoor Parking</h5>
                <div class="features mb-4">
                  <h6 class="mb-1 text-primary h-font">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Spacious space
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Cctv Cameras
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Security guards
                  </span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <a href="{{route('login')}}" class="btn btn-sm text-white custom-bg shadow-none me-4">Book</a>
                  <a href="{{url('outdoor')}}" class="btn btn-sm text-white custom-bg shadow-none">View more</a>
                </div>
            </div>
          </div> 
        </div>

        <div class="col-lg-12 text-center mt-5 mb-3">
          <a href="{{route('register')}}" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Spaces >>></a>
        </div>
      </div>
    </div>

    @include('layouts.footer')

  </body>
</html>