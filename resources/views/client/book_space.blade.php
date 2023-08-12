@extends('client.client_dashboard')
@section('client')



<div class="page-content">
  <div class="row profile-body">
    <div class="col-md-8 col-xl-8 middle-wrapper">
      <div class="card">
        <div class="card-body">
          <h2 class="text-primary mb-4">Booking Details</h2> 

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
              <label for="exampleInputEmail1" class="form-label">County</label>
						    <select name="county" class="form-select" id="exampleFormControlSelect">
                    <option selected="" disabled="">Select County</option>
                    <option value="mombasa">Mombasa</option>
                    <option value="nairobi">Nairobi</option>
                    <option value="kiambu">Kiambu</option>
                </select>
						</div>


            <div class="col-md-6 ps-0 mb-3">
              <label for="phone" class="form-label">Phone</label>
              <div class="input-group">
                  <div class="input-group-prepend">
                      <select name="country_code" id="country_code" class="form-control">
                          <option value="+1">+1 (USA)</option>
                          <option value="+44">+44 (UK)</option>
                          <!-- Add other country codes as needed -->
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
              <input type="datetime-local" name="time_in" class="form-control  @error('time_in') is-invalid @enderror" >
                @error('time_in')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class=" col-md-6 ps-0 mb-3">
                <label for="exampleInputUsername1" class="form-label">Time Out</label>
                <input type="datetime-local" name="time_out" class="form-control  @error('time_out') is-invalid @enderror" >
                  @error('time_out')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

                <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                  Proceed
              </form>
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




@endsection