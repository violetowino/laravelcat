@extends('client.client_dashboard')
@section('client')

    <div class="page-content">
        <span class="fs-4">
            <a class="text-danger" href="{{ route('spaces.index') }}"><i class="bi bi-arrow-clockwise me-1"></i>Back</a>
        </span>
        <br>
   
        <h1 class="text-center h-font" style="color: #d6fb03;">Available Rooftop Parking Spaces</h1>
        <hr>
      

        <div class="text-center">
            <span class="badge fs-6 mt-3 h-font mb-3" style="color: #03d2fb;">Kindly note that the Prices indicated are on hourly basis... <br>(Minimum booking period is 30mins = 0.5)</span>
        </div>
        
        <div class="row profile-body">
            <div class="col-md-12 col-xl-12 middle-wrapper">
              <div class="card">
                <div class="card-body">
                  
                  <form>
                    @csrf
                    <div class="container-fluid">
                      <div class="row">
      
                        

                        <div class=" col-md-5 ps-0 mb-3">
                          <label for="exampleInputUsername1" class="form-label text-danger">Time-in</label>
                          <input type="datetime-local" id="time_in" name="time_in" class="form-control  @error('time_in') is-invalid @enderror" >
                            @error('time_in')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
      
                        <div class="col-md-5 ps-0 mb-3">
                          <label for="exampleInputUsername1" class="form-label text-danger">Time Out</label>
                          <input type="datetime-local"  id="time_out" name="time_out" class="form-control  @error('time_out') is-invalid @enderror" >
                            @error('time_out')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="col-md-2 ps-0 mb-3">
                          <label for="total_time" class="form-label text-danger">Total Time</label>
                          <input type="text" name="total_time" id="total_time" class="form-control"readonly>
                        </div>
      
                      </div>
                    </div>
                  </form>
                </div> 
              </div>
            </div>
          </div>
          <hr>
 
        <br>
        <div class="space-container">
        
            
            @php
            $rooftopSpaces = $spaces->where('space_type', 'Rooftop');
            @endphp


            @foreach($rooftopSpaces as $index => $space)
                <div class="space-item">
                    
                    <strong><h3 style="color: #fb039c;">Space: {{ $space->space_number }}</h3></strong>  Space Location: {{ $space->space_location }}<br> Hourly Price: KES {{ $space->price }} <br>

                    @if(!$space->is_booked)
                        <form action="{{ route('spaces.book', $space) }}" method="POST" style="display: inline;">
                            @csrf                            
                            <input type="text" name="quantity" id="quantity_{{ $space->id }}" class="form-control mt-2 mb-1"readonly>
                            <button type="submit" class="btn btn-outline-primary btn-icon-text btn-sm mb-2 mb-md-0">Book</button>
                        </form>
                    @else
                        <span class="booked">Booked</span>
                    @endif
                </div>
            @endforeach
        </div>


        <hr>
        <h3 class="text-center h-font mb-3" style="color: #d6fb03;">View Other Spaces</h3>

        <div class="text-center">
            <button class="mt-3 me-4 btn btn-outline-primary">
                <a href="{{ url('/basement') }}">
                    Basement Spaces
                </a>
            </button>
            
            <button class=" mt-3 btn btn-outline-primary me-4">
                <a class="" href="{{ url('/outdoorspace') }}">
                    {{ __('Outdoor Spaces') }}
                </a>
            </button>
        </div>
        <br>

    </div>


   
    <script>
      //Calculating total time
      document.getElementById('time_in').addEventListener('input', calculateTotalTime);
      document.getElementById('time_out').addEventListener('input', calculateTotalTime);
    
      function calculateTotalTime() {
          const timeIn = document.getElementById('time_in').value;
          const timeOut = document.getElementById('time_out').value;
    
          if (timeIn && timeOut) {
              const startTime = new Date(timeIn);
              const endTime = new Date(timeOut);
    
              const timeDifference = endTime - startTime;
              const hours = Math.floor(timeDifference / (1000 * 60 * 60));
              const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
    
              const totalTime = `${hours} hours ${minutes} minutes`;
    
              @foreach($rooftopSpaces as $space)
                document.getElementById('quantity_{{ $space->id }}').value = parseFloat(hours) + parseFloat(minutes / 60);
            @endforeach
              document.getElementById('total_time').value = totalTime;
    
            //   document.getElementById('quantity').value = parseFloat(hours) + parseFloat(minutes / 60);
          } else {
              document.getElementById('total_time').value = '';
          }
      }
    
    
      //disable previous dates
      const today = new Date();
      const formattedToday = today.toISOString().slice(0, 16);
    
      document.getElementById('time_in').min = formattedToday;
      document.getElementById('time_out').min = formattedToday;
    </script>

@endsection