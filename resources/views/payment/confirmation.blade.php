@extends('client.client_dashboard')
@section('client')

<div class="page-content">

    <h1>Payment Confirmed</h1>
    <hr>
    <p>Thank you for your payment. Your space has been booked!</p>
    <hr>

     <h3 class="h-font text-center text-danger mb-3">Booked Space Information:</h4>
    <h4 class="h-font text-center text-primary mb-2 ">Space Number: <span class="text-info fw-bold fs-4">{{ $space->space_number }}</span></h4>
    <h4 class="h-font text-center text-primary">Amount Paid:  <span class="text-info fw-bold fs-4"> KES: {{ $space->price }}</span></h4>

    <div class="col-1 mx-auto">
    <button class=" mt-3 btn btn-outline-primary">
        <a class="" href="{{ route('client.dashboard') }}">
            {{ __('Finish') }}
        </a>
    </button>
    </div>
    
</div>



@endsection


