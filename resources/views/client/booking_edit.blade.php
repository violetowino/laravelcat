@extends('client.client_dashboard')
@section('client')


<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="card">
              <div class="card-body">

	<h6 class="card-title">Edit Booking Details</h6>

	<form class="forms-sample" method="POST" action="{{ route('booking.update') }}">
        @csrf

	<input type="hidden" name="id" value="{{ $bookings->id}}">

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control 
            @error('name') is-invalid @enderror" value="{{$bookings->name}}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">ID Number</label>
            <input type="text" name="id_number" class="form-control 
            @error('id_number') is-invalid @enderror" value="{{$bookings->id_number}}">
            @error('id_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        
        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Number Plate</label>
            <input type="text" name="number_plate" class="form-control 
            @error('number_plate') is-invalid @enderror" value="{{$bookings->number_plate}}">
            @error('number_plate')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-12 ps-0 mb-3">
            <label for="county">County</label>
            <select name="county" class="form-select" id="county">
                <option selected="" disabled="">Select County</option>
                <option value="Mombasa" {{ $bookings->county === 'Mombasa' ? 'selected' : '' }}>Mombasa</option>
                <option value="Nairobi" {{ $bookings->county === 'Nairobi' ? 'selected' : '' }}>Nairobi</option>
                <option value="Kiambu" {{ $bookings->county === 'Kiambu' ? 'selected' : '' }}>Kiambu</option>
                <!-- Add other county options as needed -->
            </select>
        </div>


        <div class="col-md-12 ps-0 mb-3">
            <label for="phone">Phone</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <select name="country_code" id="country_code" class="form-control">
                        <option value="+1" {{ $bookings->phone_code === '+1' ? 'selected' : '' }}>+1 (USA)</option>
                        <option value="+44" {{ $bookings->phone_code === '+44' ? 'selected' : '' }}>+44 (UK)</option>
                        <!-- Add other country codes as needed -->
                    </select>
                </div>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $bookings->phone}}">
            </div>
        </div>

          <div class="col-md-12 ps-0 mb-3">
            <label for="exampleInputUsername1" class="form-label"> Address</label>
            <input type="textarea" name="address" class="form-control" value="{{$bookings->address}}">
        </div>

        <div class=" col-md-6 ps-0 mb-3">
            <label for="exampleInputUsername1" class="form-label">Time-in</label>
            <input type="datetime-local" name="time_in" class="form-control" value="{{$bookings->time_in}}">
          </div>

          <div class=" col-md-6 ps-0 mb-3">
              <label for="exampleInputUsername1" class="form-label">Time Out</label>
              <input type="datetime-local" name="time_out" class="form-control" value="{{$bookings->time_out}}">
            </div>

        <button type="submit" class="btn btn-primary me-2">Save Changes</button>

    </form>

                </div>
            </div>  
        </div>
    </div>
</div>

@endsection