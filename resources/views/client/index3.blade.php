@extends('client.client_dashboard')
@section('client')


<div class="page-content">

  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>      
      <h2 class="mb-md-4 h-font">Welcome to your Dashboard</h2>
      <a href="{{ route('client.profile')}}">
      <span class="badge fs-6" style="color: #fb039c;">Complete your Profile first to continue ---></span>
      </a>
    </div>

    <div class="d-flex align-items-center flex-wrap text-nowrap">
      <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
        <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
        <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow-1">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Basement Parking</h6>
                <div class="dropdown mb-2">
                  <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="bookmark" class="icon-sm me-2"></i> <span class="">Book</span></a>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                  <div class="d-flex align-items-baseline">
                    <p class="text-success">
                      <span>KES 150 PER HOUR</span>
                    </p>
                  </div>
                </div>              
              </div>

            </div>
          </div>
        </div>
        
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Rooftop Parking</h6>
                <div class="dropdown mb-2">
                  <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="bookmark" class="icon-sm me-2"></i> <span class="">Book</span></a>  
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">                  
                  <div class="d-flex align-items-baseline">
                    <p class="text-success">
                      <span>KES 100 PER HOUR</span>                      
                    </p>
                  </div>
                </div>      
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Outdoor Parking</h6>
                <div class="dropdown mb-2">
                  <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="bookmark" class="icon-sm me-2"></i> <span class="">Edit</span></a>                    
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">                 
                  <div class="d-flex align-items-baseline">
                    <p class="text-success">
                      <span>KES 100 PER HOUR</span>                
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div> <!-- row -->

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="{{asset('images/undgrnd.webp')}}" class="card-img-top">

          <div class="card-body">
            <h5 class="card-title fw-bold mb-4">Basement Parking</h5>
              <div class="features mb-4">
                <h5 class="mb-2 text-primary h-font">Features</h5>
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
                <a href="{{route('password.confirm')}}" class="btn btn-sm text-white custom-bg shadow-none me-4">Book</a>
                <a href="{{url('basement')}}" class="btn btn-sm text-white custom-bg shadow-none">View more</a>
              </div>  
          </div>
        </div> 
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="{{asset('images/rooftopp.avif')}}" class="card-img-top">

          <div class="card-body">
            <h5 class="card-title fw-bold mb-4">Rooftop Parking</h5>
              <div class="features mb-4">
                <h5 class="mb-2 text-primary h-font">Features</h5>
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
                <a href="{{route('password.confirm')}}" class="btn btn-sm text-white custom-bg shadow-none me-4">Book</a>
                <a href="{{url('rooftop')}}" class="btn btn-sm text-white custom-bg shadow-none">View more</a>
              </div>
          </div>
        </div> 
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="{{asset('images/outdoorpark.avif')}}" class="card-img-top">

          <div class="card-body">
            <h5 class="card-title fw-bold mb-4">Outdoor Parking</h5>
              <div class="features mb-4">
                <h5 class="mb-2 text-primary h-font">Features</h5>
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
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <a href="{{route('password.confirm')}}" class="btn btn-sm text-white custom-bg shadow-none me-4">Book</a>
                <a href="{{url('outdoor')}}" class="btn btn-sm text-white custom-bg shadow-none">View more</a>
              </div>
          </div>
        </div> 
      </div>
    </div>
  </div>

</div>


@endsection