@extends('client.client_dashboard')
@section('client')

<div class="page-content">

    <h1>Payment</h1>
    <hr>
    <h4 class="h-font text-center text-primary mb-2 ">Space Number: <span class="text-info fw-bold fs-4">{{ $space->space_number }}</span></h4>
        <br>
        <h4 class="h-font text-center text-primary">Price:  <span class="text-info fw-bold fs-4"> KES: {{ $space->price }}</span></h4>
        <br>
    <form action="{{ route('payment.confirm') }}" method="POST">
        @csrf
        <input type="hidden" name="space_id" value="{{ $space->id }}">

        <div>
        <h3 class="mb-3 h-font text-center text-danger">Proceed to pay with: </h3>
        {{-- <div>
            <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 me-4 mb-md-0">M-PESA</button>
            <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">PayPal</button>
        </div> --}}
        <div class="col-3 mx-auto">
            <button class="mt-3 btn btn-outline-primary me-4">
                <a class="" href="{{ url('/stk/push/simulation') }}">
                    {{ __('M-PESA') }}
                </a>
            </button>

            <button class="mt-3 btn btn-outline-primary">
                <a class="" href="{{ route('payment.index') }}">
                    {{ __('PayPal') }}
                </a>
            </button>
        </div>

        {{-- <div class="col-4 mx-auto">
            <button type="submit" class="btn btn-outline-primary btn-icon-text mt-3 mb-md-0">Confirm Payment</button>
        </div> --}}

        <div class="col-3 mx-auto">
            <button type="submit" class=" mt-3 btn btn-outline-primary">
                Confirm Payment
            </button>
        </div>
        <br><br><br><br><br>
    </form>
</div>
@endsection
