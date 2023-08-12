<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEIGHBOURS' PARKING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <style>
        *{
          font-family: 'Poppins', sans-serif;
          background:"";
        }
        .h-font{
            font-family: 'Merienda', cursive;
        }
        .custom-bg{
          background-color: #f92770;
        }
        .custom-bg:hover{
          background-color: #f927715b;
        }
    </style>
</head>
<body class="bg-light">
       <!-- Navbar -->

       <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#">NEIGHBOURS PARKING</a>
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
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
            <a class="nav-link me-3" href="{{route('login')}}">Login</a>
        </button>
         <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3">
         <a class="nav-link me-3" href="{{route('register')}}">Register</a>
        </button>
      </div>
    </div>
  </div>
</nav>

<hr>
<div>
 <marquee width="100%" behavior="alternate" direction="left to right"  bgcolor ="black">
   <p class= "fw-bolder fs-1 color-primary text-danger"><i class="bi bi-balloon-heart-fill"></i>  WELCOME TO OUR SITE  <i class="bi bi-balloon-heart-fill"></i></p>
 </marquee>
</div>

<hr>
<div class="contents">
      <h2 class="text-center ab-5 display-3 shadow-sm p-3 mb-3">Our Services</h2>
    </div>

<p class="text-center fst-italic">We offer Parking services that are safe and affordable.<br> Our parking spaces are 
  fitted with 24hours, 360&#176 fully functioning cctv cameras all over the place to
ensure maximum security.<br> Besides, our trained security personnell also ensures
maximum safety for your vehicle. You can therefore leave your car with us and <br> 
continue with your activities without much worry.</p>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR PARKING SPACES</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/undgrnd.webp" class="card-img-top">

        <div class="card-body">
          <h5 class="card-title fw-bold mb-4">Basement Parking</h5>
            <div class="features mb-4">
              <h6 class="mb-1 h-font">Features</h6>
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
              <h6 class="mb-1 h-font">Features</h6>
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
              <h6 class="mb-1 h-font">Features</h6>
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

<footer class="text-center bg-dark text-white p-3 m-0">
  <p>&#9733;Copyright &copy; 2023 All rights reserved.&#9733;</p>
</footer>

</body>
</html>