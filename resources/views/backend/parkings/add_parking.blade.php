@extends('manager.manager_dashboard')
@section('manager')



<div class="page-content">
  <div class="row profile-body">
    <div class="col-md-8 col-xl-8 middle-wrapper">
      <div class="card">
        <div class="card-body">
          <h3 class="text-primary text-center h-font mb-4">Parking Booking Details</h3> 
          <hr>

          <form class="forms-sample" method="POST" action="{{route('store.parking')}}">
            @csrf
            <div class="container-fluid">
              <div class="row">

                <div class="col-md-12 ps-0 mb-3">
                  <label for="exampleInputUsername1" class="form-label">Full Name</label>
                  <input type="name" name="name" class="form-control @error('name') is-invalid @enderror">
                      @error('name')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
  
                <div class="col-md-6 ps-0 mb-3">
                  <label for="exampleInputUsername1" class="form-label">ID Number</label>
                  <input type="number" name="id_number" class="form-control @error('id_number') is-invalid @enderror">
                      @error('id_number')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="col-md-6 ps-0 mb-3">
                  <label for="exampleInputUsername1" class="form-label">Number Plate</label>
                  <input type="text" name="number_plate" class="form-control  @error('number_plate') is-invalid @enderror" >
                    @error('number_plate')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
   
                <div class="col-md-6 ps-0 mb-3">                 
                  <label for="county" class="form-label">County</label>
                  <select name="county" id="county" class="form-select">
                    <option selected="" disabled="">Select County</option>
                      @foreach($counties as $county)
                          <option value="{{ $county->county_code }}">{{ $county->county_name }}</option>
                      @endforeach
                  </select>
                </div>

                <div class="col-md-6 ps-0 mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <select name="country_code" id="country_code" class="form-control">
                              <option value="+254">+254</option>
                          </select>
                      </div>
                      <input type="text" name="phone" id="phone" class="form-control">
                  </div>
                </div>

                <div class="col-md-12 ps-0 mb-3">
                  <label for="exampleInputUsername1" class="form-label"> Address</label>
                  <input type="textarea" name="address" class="form-control  @error('address') is-invalid @enderror">
                    @error('address')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              
                <div class=" col-md-6 ps-0 mb-3">
                  <label for="exampleInputUsername1" class="form-label">Time-in</label>
                  <input type="datetime-local" name="time_in" id="time_in" class="form-control  @error('time_in') is-invalid @enderror" >
                    @error('time_in')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class=" col-md-6 ps-0 mb-3">
                  <label for="exampleInputUsername1" class="form-label">Time Out</label>
                  <input type="datetime-local" name="time_out" id="time_out" class="form-control  @error('time_out') is-invalid @enderror" >
                    @error('time_out')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

			          <button type="submit" class="btn btn-primary me-2">Save Booking</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const today = new Date();
    const formattedToday = today.toISOString().slice(0, 16);
  
    document.getElementById('time_in').min = formattedToday;
    document.getElementById('time_out').min = formattedToday;
</script>

@endsection