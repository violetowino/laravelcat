@extends('director.director_dashboard')
@section('director')


<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="card">
              <div class="card-body">

	<h6 class="card-title">Edit Booking Details</h6>

	<form class="forms-sample" method="POST" action="{{ route('update.booking') }}">
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
            <label for="exampleInputUsername1" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control 
            @error('phone') is-invalid @enderror" value="{{$bookings->phone}}">
            @error('phone')
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

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Space Type</label>
            <input type="text" name="space_type" class="form-control 
            @error('space_type') is-invalid @enderror" value="{{$bookings->space_type}}">
            @error('space_type')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label"> Space Number</label>
            <input type="text" name="space_number" class="form-control 
            @error('space_number') is-invalid @enderror" value="{{$bookings->space_number}}">
            @error('space_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Amount Paid</label>
            <input type="text" name="amount_paid" class="form-control 
            @error('amount_paid') is-invalid @enderror" value="{{$bookings->amount_paid}}">
            @error('amount_paid')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Payment Code</label>
            <input type="text" name="payment_code" class="form-control 
            @error('payment_code') is-invalid @enderror" value="{{$bookings->payment_code}}">
            @error('payment_code')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Time In</label>
            <input type="datetime-local" name="time_in" class="form-control 
            @error('time_in') is-invalid @enderror" value="{{$bookings->time_in}}">
            @error('time_in')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Time Out</label>
            <input type="datetime-local" name="time_out" class="form-control 
            @error('time_out') is-invalid @enderror" value="{{$bookings->time_out}}">
            @error('time_out')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary me-2">Save Changes</button>

    </form>

                </div>
            </div>  
        </div>
    </div>
</div>

@endsection