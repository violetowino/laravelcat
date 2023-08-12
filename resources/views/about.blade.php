<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
     <link rel="stylesheet" href="style.css">
     <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <style>
        /*---about....*/
        *{
          font-family: 'Poppins', sans-serif;
          background:"";
        }
        .h-font{
            font-family: 'Merienda', cursive;
        }
        #about-2{
            background-color: antiquewhite;
        }
        .about-item {
            margin-bottom: 20px;
            margin-top: 20px;
            background-color: aliceblue;
            padding: 80px 30px;
            box-shadow: 0 0 9px black;
        }
        .about-item i{
            font-size: 50px;
            margin: 0;
        }
        .about-item h2 {
            font-size: 28px;
            margin-bottom: 10px;
            color: brown;
        }
        .about-item hr {
            width: 70px;
            height: 3px;
            background-color: blue;
            border: none;
            margin: auto;
        }
        .about-item p{
            margin-top: 22px;
        }
        .about-item:hover {
            background-color: aqua;
            cursor: pointer;
        }
        .about-item:hover i,
        .about-item:hover h2,
        .about-item:hover hr {
            transition: 500ms ease-in-out;
        }
        .about-item:hover i{
            transform: translateY(-25px);
        }
        footer {
            background: black;
            color: whitesmoke;
            padding: 20px;
        }
        .card-body i{
            font-size: 50px;
            margin: 0;
        }
    </style>
</head>
  <body>
   <!----navbar-->
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
<!-----navbar ends-->
<hr>
<div>
 <marquee width="100%" behavior="alternate" direction="left to right"  bgcolor ="black">
   <p class= "fw-bolder fs-1 color-primary text-danger"><i class="bi bi-balloon-heart-fill"></i>  WELCOME TO OUR SITE  <i class="bi bi-balloon-heart-fill"></i></p>
 </marquee>
</div>

<hr>

    <div class="contents">
      <h2 class="text-center ab-5 display-3 shadow-sm p-3">About Us</h2>
    </div>
<!-----page title-->

<!---contents----->

<section>
<div id="about-2">
       <div class="content-box-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="about-item text-center">
                        <i class="fa fa-book"></i>
                        <h2>MISSION</h2>
                        <hr>
                        <p> To provide efficient and reliable car parking solutions that enhance convenience and accessibility for our customers, while prioritizing safety, sustainability, and exceptional service.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about-item text-center">
                        <i class="fa fa-globe"></i>
                        <h2>VISION</h2>
                        <hr>
                        <p> To become the leading car parking service provider, recognized for our innovation, customer-centric approach, and commitment to creating seamless parking experiences that positively impact urban mobility</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about-item text-center">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <h2>CORE VALUES</h2>
                        <hr>
                        <p> Our Guiding Core Values are;
                            <li>Integrity</li>
                            <li>Innovation</li>
                            <li>Sustainability</li>
                            <li>Safety and Security</li>
                            <li>Customer-Centricity</li>
                            <li>Teamwork and Respect</li>
                            <li>Community Engagement</li>
                          </p>
                    </div>
                </div>
            </div>
        </div>
       </div>

    </div>
<!----contents end-->

</section>
<footer class="text-center">
    <p>&#9733;Copyright &copy; 2022 All rights reserved.&#9733;</p>
</footer>
</body>
</html>