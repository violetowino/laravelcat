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
          background-image:url(images/car6.webp) no-repeat;
          
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
       /*.... contact us....*/

        .containers {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }
        .containers .contactInfo {
            width: 50%;
            display: flex;
            flex-direction: column;
        }
        .containers .contactInfo .box {
            position: relative;
            padding: 12px 0;
            display: flex;
        }
        .containers .contactInfo .icon {
            min-width: 60px;
            height: 60px;
            background: lightblue;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 15px;
        }
        .containers .contactInfo .box .text {
            display: flex;
            margin-left: 20px;
            font-size: 14px;
            color: black;
            flex-direction: column;
            font-weight: 300;
        }
        .containers .contactInfo .box .text h5{
            font-weight: 100;
            color: brown;
        }
        .itemm {
            background-color: blanchedalmond;
        }
        h5{
            font-weight: 100;
            color: brown;
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
      <h2 class="text-center ab-5 display-3 shadow-sm p-3">Contact Us</h2>
    </div>
    
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-8 col-md-6 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100 rounded"  height="360px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127649.12286490899!2d37.002073358037904!3d-1.1353063261187792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4616a21d035d%3A0xd46c6efa3589f45f!2sJuja!5e0!3m2!1sen!2ske!4v1688729411760!5m2!1sen!2ske" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-lg-4 col-md-3">
            <div class="bg-white p-4 rounded mb-4">
                <!---contacts info---->
                <div class="col-md-5">
                    <div>
                    <div class="containers">
                        <div class="contactInfo">
                            <div class="box">
                                <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
                                <div class="text">
                                    <h5>Address</h5>
                                    <p>Juja, next to Juja main stage</p>
                                    
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon"><i class="bi bi-telephone-fill"></i></div>
                                <div class="text">
                                    <h5>Phone</h5>
                                    <a href="tel: +254712345678" class="d-inline-block mb-2 text-decoration-none text-dark">
                                        +254733345678</a>
                        
                                        <a href="tel: +254712345678" class="d-inline-block mb-2 text-decoration-none text-dark">
                                         +254722345678</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon"><i class="bi bi-envelope-fill"></i></div>
                                <div class="text">
                                    <h5>Email</h5>
                                    <p>info@neighbourspark.co.ke</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
      </div>  
    </div>
</div>
</div>

<br>

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-8 col-md-6 p-4 mb-lg-0 mb-3 bg-white rounded">
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

        <div class="col-lg-4 col-md-3">
            <div class="bg-white p-4 rounded mb-4">
                <!---contacts info---->
                <div class="col-md-5">
                    <div>
                    <div class="containers">
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
                
            </div>
        </div>
      </div>  
    </div>
</div>
</div>

</div>
</div>
</div>

<footer class="text-center bg-dark text-white p-3 m-0">
  <p>&#9733;Copyright &copy; 2023 All rights reserved.&#9733;</p>
</footer>


</body>
</html>