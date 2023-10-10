@extends('manager.manager_dashboard')
@section('manager')


<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-primary text-center h-font mb-3">Edit Booking Details</h3>
                    <hr>

                    <form class="forms-sample" method="POST" action="{{ route('update.parking') }}">
                        @csrf

                        <input type="hidden" name="id" value="{{ $bookings->id}}">

                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">Full Name</label>
                            <input type="text" name="name" class="form-control 
                            @error('name') is-invalid @enderror" value="{{$bookings->name}}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">ID Number</label>
                            <input type="text" name="id_number" class="form-control 
                            @error('id_number') is-invalid @enderror" value="{{$bookings->id_number}}">
                            @error('id_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">Number Plate</label>
                            <input type="text" name="number_plate" class="form-control 
                            @error('number_plate') is-invalid @enderror" value="{{$bookings->number_plate}}">
                            @error('number_plate')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 ps-0 mb-3">
                            <label for="county" style="color: #fb039c;">County</label>
                            <select name="county" class="form-select" id="county">
                                <option selected disabled>{{ $bookings->county}}</option>
                                @foreach($counties as $county)
                                    <option value="{{ $county->county_name }}" {{ $bookings->county === $county->county_code ? 'selected' : '' }}>
                                        {{ $county->county_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label" style="color: #fb039c;">Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select name="country_code" id="country_code" class="form-control">
                                        <option value="+254">+254</option>
                                    </select>
                                </div>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ str_replace('+254', '', $bookings->phone) }}">
                            </div>
                        </div>

                        <div class="col-md-12 ps-0 mb-3">
                            <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;"> Address</label>
                            <input type="textarea" name="address" class="form-control" value="{{$bookings->address}}">
                        </div>

                        <div class="row">
      
                        

                            <div class=" col-md-6 ps-0 mb-3">
                              <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">Time-in</label>
                              <input type="datetime-local" id="time_in" name="time_in" class="form-control  @error('time_in') is-invalid @enderror" >
                                @error('time_in')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
          
                            <div class="col-md-6 ps-0 mb-3">
                              <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">Time Out</label>
                              <input type="datetime-local"  id="time_out" name="time_out" class="form-control  @error('time_out') is-invalid @enderror" >
                                @error('time_out')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                          </div>

                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>
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