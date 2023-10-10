@extends('director.director_dashboard')
@section('director')

<div class="page-content">

  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h2 class="mb-md-4 h-font">Welcome to your Dashboard</h2>
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
                <h4 class="card-title mb-0" style="color: #fb039c;">TOTAL USERS</h4>
                <div class="dropdown mb-2">
                  <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('all.managers') }}"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View Managers</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('add.manager') }}"><i data-feather="plus-circle" class="icon-sm me-2"></i> <span class="">Add Manager</span></a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">                  
                  <div class="d-flex align-items-baseline">
                    <p class="text-success">
                      <span>MANAGERS: {{ $managers }} </span><br>
                      <span>CLIENTS: {{ $clients }} </span>
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
                <h6 class="card-title mb-0" style="color: #fb039c;">parking Spaces</h6>
                <div class="dropdown mb-2">
                  <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('all.spaces')}}"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View All spaces</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('all.bookings')}}"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View All Bookings</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('all.bookings')}}"><i data-feather="bookmark" class="icon-sm me-2"></i> <span class="">Booking Space</span></a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">                
                  <div class="d-flex align-items-baseline">
                    <p class="text-success">
                      <span>TOTAL SPACES: {{ $spaces }}</span>
                      <span>TOTAL BOOKINGS: {{  $bookings }}</span>  
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
                <h6 class="card-title mb-0" style="color: #fb039c;">amount collected</h6>
                <div class="dropdown mb-2">
                  <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                  
                  <div class="d-flex align-items-baseline">
                    <p class="text-success">
                      <span>{{ $amounts }} </span>
                      
                    </p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        
  <div class="col-lg-12 col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title h-font text-primary text-center fs-3">Monthly User Registration</h3>
        <hr>
        <canvas id="chartjsBar"></canvas>
      </div>
    </div>
  </div>

  <div class="col-lg-12 col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h2 class="text-primary mb-4 h-font">Neighbours' Parking Managers</h2>
        </div>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th class="text-danger">#</th>
                  <th class="text-danger">Full Name</th>
                  <th class="text-danger">Image</th>
                  <th class="text-danger">email</th>
                  <th class="text-danger">Phone Number</th>
                  <th class="text-danger">Duty Station</th>
                </tr>
              </thead>
              <tbody>
                @foreach($manager as $manager)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $manager->name }}</td>
                    <td>
                      <img class="wd-100 rounded-circle" src="{{ (!empty($manager->photo)) ? 
                        url('upload/manager_images/'.$manager->photo) : 
                        url('upload/no_image.jpg') }}" alt="profile">
                    </td>
                    <td>{{ $manager->email }}</td>
                    <td>{{ $manager->phone }}</td>
                    <td>{{ $manager->duty_station }}</td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div> 
  </div>
  

  <div class="col-lg-12 col-xl-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h2 class="text-primary mb-4 h-font">Neighbours' Parking Spaces</h2>
        </div>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th class="text-danger">#</th>
                  <th class="text-danger">Space Location</th>
                  <th class="text-danger">Space Category</th>
                  <th class="text-danger">Space Quantity</th>
                  <th class="text-danger">Space Price</th>
                </tr>
              </thead>
              <tbody>
                @foreach($parkings as $parkings)
                    <tr>
                        <td>{{ $parkings->id }}</td>
                        <td>{{ $parkings->location }}</td>
                        <td>{{ $parkings->category }}</td>
                        <td>{{ $parkings->quantity }}</td>
                        <td>{{ $parkings->price }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
          </div>
        </div>
      </div> 
    </div>
</div>
    
  <script>
    var ctx = document.getElementById('chartjsBar').getContext('2d');
    var userChart = new Chart(ctx,{
        type:'line',
        data:{
            labels: {!! json_encode($labels) !!},
            datasets: {!! json_encode($datasets) !!}
        },
    });
</script>
    
@endsection