<!DOCTYPE html>
<html lang="en">
  @include('layouts.header')

  <body class="bg-light">

    @include('layouts.navbar')

    <div class="text-center">
      <h3 class="h-font text-danger mt-5 pt-4 mb-4 text-center fw-bold">Neighbours' Parking Spaces</h3>
          <p class="fonts">
          Our parking lot facilities are located in spacious places <br> with ambient 
          environment that offers customers an unforgattable experience.<br>  They are designed
          to accommodate vehicles, providing a convenient and space-efficient 
          solution for parking in areas <br>  with limited surface space.
          These car parks are located in easily accessible places and are privately 
          managed.<br>  They are secure parking spots that are well guarded.</p>


      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR BASEMENT PARKING SPACES</h2>
      <div class="container">
        <div class="row">
          <div class="card mb-3">
            <img src="images/undgrnd.webp" class="card-img-top" height="460px" alt="...">
            <div class="card-body">
              <h5 class="card-title h-font text-danger mt-5 pt-4 mb-4 fs-4 text-center fw-bold">Basement Parking</h5>
              <p class="card-text fonts">Our Basement parking facilities are located underground <br> or partially below 
                ground level of a building or structure. They are designed to <br>accommodate vehicles, providing a 
                convenient and space-efficient solution for parking in areas with <br> limited surface space.
                These parking lots are commonly found in commercial buildings,<br> residential complexes, 
                shopping malls, and other locations where <br> space is at a premium.
              </p>

              <div>
                <p class="h-font text-danger mt-5 pt-4 mb-4 text-center fs-4 fw-bold">Advantages</p>
                <ul class="list-inline">
                  <li class="fonts"><i class="bi bi-dot"></i> Traffic Flow</li>
                  <li class="fonts"><i class="bi bi-dot"></i> Convenience</li>
                  <li class="fonts"><i class="bi bi-dot"></i> Noise Reduction</li>
                  <li class="fonts"><i class="bi bi-dot fw-bold"></i> Aesthetic Benefits</li>
                  <li class="fonts"><i class="bi bi-dot"></i> Enhanced Security</li>
                  <li class="fonts"><i class="bi bi-dot"></i> Weather Protection</li>
                  <li class="fonts"><i class="bi bi-dot"></i> Space Optimization</li>
                  <li class="fonts"><i class="bi bi-dot"></i> Increased Property Value</li>
                  <li class="fonts"><i class="bi bi-dot"></i> Uninterrupted Open Spaces</li>
                </ul>
              </div>

              <p class="card-text">
                <div class="rating mb-4">
                  <h6 class="mb-1 h-font text-danger mt-5 pt-4 mb-4 fs-4 text-center fw-bold">Spaces Locations</h6>         
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-2">
                    <a class="fs-8 text-decoration-none text-dark" href=https://goo.gl/maps/Y2inS2RhSjTskPvy6>KAPS Parking</a>
                  </span>

                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    <a class="fs-8 text-decoration-none text-dark" href=https://goo.gl/maps/Pfvktctg9vgrRLQJ7>City Hall Annex</a>
                  </span>

                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    <a class="fs-8 text-decoration-none text-dark" href=https://goo.gl/maps/FQd61Evc5Rb8nvXv6>Holy Family Basillica Parking</a>
                  </span>
                </div>
              </p>

              <div class="d-flex">
                <a href="{{route('password.confirm')}}" class="btn btn-sm text-white custom-bg shadow-none d-grid mx-auto">Book</a>
              </div>
            </div>
          </div>

          <h3 class="h-font text-danger mt-3 mb-4 text-center fw-bold">Parking Instructions</h3>
          <div>
            <ul class="list-unstyled">
              <li class="fonts"><i class="bi bi-check"></i>Book the space online and make payment. </li>
              <li class="fonts"><i class="bi bi-check"></i>Cash payments are not accepted. </li> 
              <li class="fonts"><i class="bi bi-check"></i>Provide Official Identification document at the entry point</li>
              <li class="fonts"><i class="bi bi-check"></i>Make sure you retain the ticket to exit</li>
              <li class="fonts"><i class="bi bi-check"></i>Replacement for a lost ticket is Ksh 500</li>
              <li class="fonts"><i class="bi bi-check"></i>Exit the car park within 15 minutes after the payment.</li>
              <li class="fonts"><i class="bi bi-check"></i>You can as well book at the parking place,
                and is subject to availability.</li>
            </ul>  
          </div>

          <p><em class="fonts text-warning fw-bold mb-3"><strong>NOTE: </strong> All vehicles and content are left at the owner's risk. <br> The management does 
            not accept responsibility for any damage, accident or losses.</em>
          </p>
        </div>
      </div>

      <div class="card mb-3">
        <div class="rating mb-4">
          <h6 class="mb-1 h-font text-danger mt-3 mb-4 fs-4 text-center fw-bold">View Other Spaces</h6>         
          <span class="badge rounded-pill bg-light text-dark text-wrap me-2">
            <a class="fs-8 text-decoration-none text-dark" href="{{url('/outdoor')}}">Outdoor</a>
          </span>

          <span class="badge rounded-pill bg-light text-dark text-wrap">
            <a class="fs-8 text-decoration-none text-dark" href="{{url('/rooftop')}}">Rooftop</a>
          </span>
        </div>
      </div>
    </div>

    

    @include('layouts.footer')

  </body>
</html>