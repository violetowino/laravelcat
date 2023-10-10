@extends('client.client_dashboard')
@section('client')



  <div class="page-content">
    <div class="row profile-body">
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="card">
          <div class="card-body">
            <h2 class="text-primary text-center h-font mb-4">Booking Details</h2>
            <hr> 
            <a href="{{ route('spaces.instructions')}}">
              <span class=" text-center badge bg-danger fs-6 mb-4">Read Parking Instructions here...</span>
            </a>
            <p class="text-warning text-center">Ensure your details match your Identification document details</p>
            <hr>
            <form class="forms-sample" method="POST" action="{{route('booking.store')}}">
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

                  <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                    Proceed
                  </button>
                </div>
              </div>
            </form>
          </div> 
        </div>
      </div>
    </div>
  </div>


@endsection