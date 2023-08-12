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
 {{-- <marquee width="100%" behavior="alternate" direction="left to right"  bgcolor ="black">
   <p class= "fw-bolder fs-1 color-primary text-danger"><i class="bi bi-balloon-heart-fill"></i>  WELCOME TO OUR SITE  <i class="bi bi-balloon-heart-fill"></i></p>
 </marquee>
</div> --}}


    <!-- Carousel -->
<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/car6.webp" class="w-100 d-block" />
          </div>
          {{-- <div class="swiper-slide">
            <img src="images/park4.jpeg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/car4.webp" class="w-100 d-block" />
          </div> --}}
          <div class="swiper-slide">
            <img src="images/park2.jpg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/park1.avif" class="w-100 d-block"/>
          </div>
        </div>
    </div>
</div>


   <!-- Booking space availability -->

   <div class="container">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Space Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-in</label>
              <input type="datetime-local" class="form-control">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-Out</label>
              <input type="datetime-local" class="form-control">
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Number of Spaces</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Vehicle Category</label>
              <select class="form-select shadow-none">
                <option value="1">B(small cars/ mini-bus)</option>
                <option value="2">C(Light Truck)</option>
                <option value="3">D(PSV)</option>
                <option value="3">E(Heavy Truck)</option>
                <option value="3">F(Persons with Disability.)</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <a class="btn text-white shadow-none custom-bg" href="{{ route('register')}}">Book</a>
            </div>
          </div>
        </form>
      </div>
    </div>
   </div>

<!-- Our Parking Spaces -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR SPACES</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/undgrnd.webp" class="card-img-top">

        <div class="card-body">
          <h5 class="card-title fw-bold mb-4">Underground Parking</h5>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
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
            <div class="d-flex">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book</a>
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
              <h6 class="mb-1">Features</h6>
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
            <div class="d-flex">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book</a>
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
              <h6 class="mb-1">Features</h6>
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
            <div class="d-flex">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book</a>
            </div>
        </div>
      </div> 
    </div>

    <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Spaces >>></a>
    </div>
  </div>
</div>


<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded"  height="360px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127649.12286490899!2d37.002073358037904!3d-1.1353063261187792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4616a21d035d%3A0xd46c6efa3589f45f!2sJuja!5e0!3m2!1sen!2ske!4v1688729411760!5m2!1sen!2ske" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel: +254712345678" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +254722345678</a>
            <br>
            <a href="tel: +254712345678" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +254733345678</a>
        </div>

        <div class="bg-white p-4 rounded mb-4">
          <h5>Talk to Us</h5>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" required>
              <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" required>
              <label for="floatingInput">Email Address</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" id="floatingTextarea" required></textarea>
              <label for="floatingTextarea">Your Message....</label>
            </div>
            <div class="d-flex">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Submit</a>
            </div>
              
        </div>

      </div>
  </div>
</div>


<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2"> Neighbours Parking</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga 
        minus fugiat itaque, ut tempore ullam architecto magnam nostrum</p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Home</a><br>
      <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">About Us</a><br>
      <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Our Services</a><br>
      <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">FAQ's</a>
    </div>
    <div class="col-lg-4 p-4">
      <h5>Follow Us</h5>
      <a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter me-2"></i>  Twitter
        </span>
      </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-2"></i> Instagram
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-linkedin me-2"></i> LinkedIn
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-2"></i> Facebook
          </span>
        </a>

      </a><br>
    </div>
  </div>
</div>

<footer class="text-center bg-dark text-white p-3 m-0">
  <p>&#9733;Copyright &copy; 2023 All rights reserved.&#9733;</p>
</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <script>
       var swiper = new Swiper(".swiper-container", {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
      }
        });
      </script>
</body>
</html>

