<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')
  <body class="bg-light">

    @include('layouts.navbar')

    <p class="text-center fs-3 state" style="color: brown;">Welcome to Neighbours' car parking booking services, <br> where convenience meets peace 
      of mind.</p> <hr>
    <div class="container-fluid px-lg-4 mt-4">
      <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/car6.webp" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/park2.jpg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/park1.avif" class="w-100 d-block"/>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Parking Spaces -->

    <h2 class="mt-2 mb-4 text-center fw-bold h-font">OUR SPACES</h2>
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
                <div class="d-flex">
                  <a href="{{ url('basement')}}" class="btn btn-sm text-white custom-bg shadow-none">View More</a>
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
                <div class="d-flex">
                  <a href="{{ url('rooftop')}}" class="btn btn-sm text-white custom-bg shadow-none">View More</a>
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
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>
                <div class="d-flex">
                  <a href="{{ url('outdoor')}}" class="btn btn-sm text-white custom-bg shadow-none">View More</a>
                </div>
            </div>
          </div> 
        </div>
      </div>
    </div>


    


    <div class="container-fluid bg-white mt-5">
      <div class="row">
        <div class="col-lg-4 p-4">
          <h5 class="h-font fw-bold fs-3 mb-2"> Neighbours Parking</h5>
          <p class="fonts" style="font-size: 14px">  We offer Parking services that are safe and <br> affordable. Our parking spaces are 
            fitted with <br> 360&#176 fully functioning cctv cameras all over the <br> place to
            ensure maximum security. Besides, our <br> trained security personnell also ensures
            maximum <br> safety for your vehicle. Park Smart, Park Safe Everyday </p><br>
            <h5 class="mb-3 h-font">Links</h5>
          <a href="#" class="d-inline-block mb-2 text-decoration-none fonts text-dark">Home</a><br>
          <a href="{{url('about')}}" class="d-inline-block mb-2 text-decoration-none fonts text-dark">About Us</a><br>
          <a href="{{url('services')}}" class="d-inline-block mb-2 text-decoration-none fonts text-dark">Our Services</a><br>
        </div>
        
        <div class="col-lg-5 p-4">
          
          <h5 class="fw-bold h-font fs-3 mb-2"> FAQ's</h5>
          <div class="accordion accordion-flush" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <span style="font-size: 14px" class="fonts">How do I make a parking reservation?</span>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p style="font-size: 12px">Making a parking reservation is easy! Simply visit our website or mobile app,
                    enter your desired location, date, and time of arrival and departure, and the 
                    available parking options will be displayed. Choose the one that suits you 
                    best, provide your vehicle information, and complete the booking by making a 
                    payment.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <span style="font-size: 14px" class="fonts">Can I change or cancel my parking reservation?</span>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p style="font-size: 12px">Yes, you can change or cancel your reservation. Log in
                    to your account on our website or app, locate your reservation under the 
                    "View Bookings" section, and follow the provided options to modify the 
                    details or cancel the reservation. Please note that cancellation policies
                      and fees may apply depending on the timing of the cancellation.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <span style="font-size: 14px" class="fonts">What payment methods are accepted for booking a parking space?</span>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p style="font-size: 12px">We accept a variety of payment methods, including M-PESA and
                    digital payment services such as PayPal. This ensures a convenient and secure
                      payment process for all users. Cash payments are not accepted.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <span style="font-size: 14px" class="fonts">What happens if I arrive late for my reserved parking time?</span>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p style="font-size: 12px">If you arrive later than your reserved time, your 
                    parking spot might be released to accommodate other users. However, most reservations
                    have a grace period or a predefined window for late arrivals. If you think you
                      might be delayed, it's a good idea to contact our customer support to inform 
                      them about the situation and explore potential solutions.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <span style="font-size: 14px" class="fonts">Is my personal and vehicle information secure when using your parking booking system?</span>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p style="font-size: 12px">Yes, we take your privacy and security seriously. Our 
                    booking system employs encryption and follows industry best practices to safeguard 
                    your personal and vehicle information. Your data is used solely for the purpose
                    of processing your reservation, and we do not share it with third parties unless 
                    required by law.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        
        <div class="col-lg-3 p-4">
          <h5 class="h-font fw-bold fs-3 mb-4">Follow Us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-3">
              <i class="bi bi-twitter me-2 text-primary"></i>  Twitter
            </span>
          </a>
            <br>
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-3 mr-3">
                <i class="bi bi-instagram me-2 text-danger"></i> Instagram
              </span>
            </a>
            <br>
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-3">
                <i class="bi bi-linkedin me-2 text-primary"></i> LinkedIn
              </span>
            </a>
            <br>
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-3">
                <i class="bi bi-facebook me-2 text-primary"></i> Facebook
              </span>
            </a>

          </a><br>
        </div>
      </div>
    </div>

    @include('layouts.footer')


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

