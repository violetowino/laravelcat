@extends('director.director_dashboard')
@section('director')


<div class="page-content">
	<div class="row profile-body">
     	<div class="col-md-8 col-xl-8 middle-wrapper">
          <div class="card">
              <div class="card-body">

		<h6 class="card-title">Add Booking</h6>

	<form class="forms-sample" method="POST" action="{{route('store.booking')}}">
        @csrf

		<div class="mb-3">
			<label for="exampleInputUsername1" class="form-label">Full Name</label>
			<input type="text" name="name" class="form-control">
		</div>

		<div class="mb-3">
			<label for="exampleInputUsername1" class="form-label">ID Number</label>
			<input type="text" name="id_number" class="form-control">
		</div>

		<div class="mb-3">
			<label for="exampleInputUsername1" class="form-label">Phone Number</label>
			<input type="text" name="phone" class="form-control">
		</div>

		<div class="mb-3">
			<label for="exampleInputUsername1" class="form-label">Number Plate</label>
			<input type="text" name="number_plate" class="form-control"> 
		</div>

		<div class="mb-3">
			<label for="exampleInputUsername1" class="form-label">Space Type</label>
			<input type="text" name="space_type" class="form-control"> 
		</div>

		<div class="mb-3">
			<label for="exampleInputUsername1" class="form-label">Space Number</label>
			<input type="text" name="space_number" class="form-control"> 
		</div>

		<div class="mb-3">
			<label for="exampleInputUsername1" class="form-label">Amount Paid</label>
			<input type="text" name="amount_paid" class="form-control"> 
		</div>

		<div class="mb-3">
			<label for="exampleInputUsername1" class="form-label">Payment Code</label>
			<input type="text" name="payment_code" class="form-control"> 
		</div>

		<div class="mb-3">
			<label for="exampleInputUsername1" class="form-label">Time in</label>
			<input type="datetime-local" name="time_in" class="form-control"> 
		</div>

		<div class="mb-3">
			<label for="exampleInputUsername1" class="form-label">Time Out</label>
			<input type="datetime-local" name="time_out" class="form-control"> 
		</div>

		<button type="submit" class="btn btn-primary me-2">Save Changes</button>

	</form>

              </div>
            </div>
        </div>
    </div>
</div>

@endsection