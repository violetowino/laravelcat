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
<div class="text-center">
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"></h2>
    <p>
    Our parking lot facilities are located in spacious places <br> with ambient 
    environment that offers customers an unforgattable experience.<br>  They are designed
     to accommodate vehicles, providing a convenient and space-efficient 
     solution for <br>  parking  in areas  with limited surface space.
    These car parks are located in easily accessible<br>  places and are privately 
    managed.  They are secure parking spots that are well guarded.</p>


<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOFTOP PARKING SPACES</h2>
<div class="container">
  <div class="row">
     

<div class="card mb-3">
  <img src="images/rooftopp.avif" class="card-img-top" height="520px" alt="...">
  <div class="card-body">
    <h5 class="card-title h-font text-danger mt-5 pt-4 mb-4 fs-4 text-center fw-bold">Rooftop Parking</h5>
    <p class="card-text">Our Rooftop parking facilities are located on the rooftops of  <br>buildings
       or structures. They are an alternative parking solution for areas where space  <br> is limited or where 
       traditional ground-level or basement parking is not feasible. These parking lots  <br>are commonly 
       found in urban settings, particularly in densely populated cities with limited surface space for parking.</p>
                <div>
                  <p class="h-font text-danger mt-5 pt-4 mb-4 text-center fs-4 fw-bold">Advantages</p>
                  <ul class="list-inline">
                    <li><i class="bi bi-dot"></i> Panoramic Views</li>
                    <li><i class="bi bi-dot"></i> Aesthetic Benefits</li>
                    <li><i class="bi bi-dot"></i> Enhanced Security</li>
                    <li><i class="bi bi-dot"></i> Convenient Access</li>
                    <li><i class="bi bi-dot"></i> Space Optimization</li>
                    <li><i class="bi bi-dot"></i> Environmental Benefits</li>
                    <li><i class="bi bi-dot"></i> Utilization of Unused Space</li>
                    <li><i class="bi bi-dot"></i> Uninterrupted Open Spaces</li>
                    <li><i class="bi bi-dot"></i> Reduced Environmental Impact</li>
                  </ul>
                </div>
    <p class="card-text">
    <div class="rating mb-4">
        <h6 class="mb-1 h-font text-danger mt-5 pt-4 mb-4 fs-4 text-center fw-bold">Spaces Locations</h6>
               
              <span class="badge rounded-pill bg-light text-dark text-wrap me-2">
                <a class="fs-8 text-decoration-none text-dark" href="https://goo.gl/maps/TbNYPKvidvSPgoSE8">Thika Road Mall</a>
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap">
                <a class="fs-8 text-decoration-none text-dark" href=https://goo.gl/maps/gNCZU7CvCtt6PrSEA>KAPS Parking</a>
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap">
                <a class="fs-8 text-decoration-none text-dark" href=https://goo.gl/maps/ZviY7n8nZuvnv7Dh9>City Hall Annex Parking lot</a>
               </span>
            </div>
    </p>

    <div class="d-flex">
              <a href="{{route('login')}}" class="btn btn-sm text-white custom-bg shadow-none d-grid mx-auto">Book</a>
            </div>
  </div>
</div>

<h3 class="h-font text-danger mt-5 pt-4 mb-4 text-center fw-bold">Parking Instructions</h3>
 <div>
    <ul class="list-unstyled">
        <li><i class="bi bi-check"></i>Book the space online and make payment. <br><i class="bi bi-check"></i>You can as well book at the parking place,
            and is subject to availability.</li>
        <li><i class="bi bi-check"></i>The ticket is collected at the entry point</li>
        <li><i class="bi bi-check"></i>Make sure you retain the ticket to exit</li>
        <li><i class="bi bi-check"></i>Replacement for a lost ticket is Ksh 500</li>
        <li><i class="bi bi-check"></i>Exit the car park within 15 minutes after the payment.</li>
    </ul>  
</div>

<p><em><strong>NOTE: </strong> All vehicles and content are left at the owner's risk. The management does 
    not accept responsibility for any damage, accident or losses.</em></p>
</div>

<footer class="text-center bg-dark text-white p-3 m-0">
  <p>&#9733;Copyright &copy; 2023 All rights reserved.&#9733;</p>
</footer>

</body>
</html>