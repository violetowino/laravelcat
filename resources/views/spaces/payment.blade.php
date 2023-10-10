@extends('client.client_dashboard')
@section('client')

    <div class="page-content">

        <h1>Payment</h1>
        <hr>

        <h4 class="h-font text-primary mb-2 ">Space Type: <span class="text-info fw-bold fs-4">{{ $space->space_type }}</span></h4>
        <br>
        <h4 class="h-font text-primary mb-2 ">Space Number: <span class="text-info fw-bold fs-4">{{ $space->space_number }}</span></h4>
        <br>
        <h4 class="h-font text-primary">Price per hour:  <span class="text-info fw-bold fs-4"> KES: {{ $space->price }}</span></h4>
        <br>
        <h4 class="h-font text-primary">Total Hours Booked:  <span class="text-info fw-bold fs-4"> {{ $quantity }}</span></h4>
        <br>
        <h4 class="h-font text-primary">Total Amount to be Paid:  <span class="text-info fw-bold fs-4"> KES: {{ $totalPrice }}</span></h4>
        <br>


        <div class="text-center">
            <h4 id="payUsingText" class="h-font mb-3 text-danger">Pay using:</h4>

            <a href="" class="me-4" data-bs-toggle="modal" data-bs-target="#mpesaModal">
                <button class="btn btn-outline-primary" id="mpesaButton">
                    M-Pesa
                </button>
            </a>

           
        </div>

        <form id="finishForm" action="{{ route('payment.confirm', $space) }}" method="POST" style="display: none;">
            @csrf
            <input type="hidden" name="space_id" value="{{ $space->id }}">
            <div class="col-1 mx-auto">
                <button type="submit" class="mt-3 btn btn-outline-primary">
                    Finish
                </button>
            </div>
        </form>


        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Check if the 'showFinishButton' is set to true
                if (localStorage.getItem('showFinishButton') === 'true') {
                    // Show the "Finish" form
                    document.getElementById('finishForm').style.display = 'block';
                    
                    // Hide the M-Pesa button
                    document.getElementById('mpesaButton').style.display = 'none';

                    // Hide the "Pay using:" text
                    document.getElementById('payUsingText').style.display = 'none';

                    // Clear the session variable to avoid showing the button on subsequent visits
                    localStorage.removeItem('showFinishButton');
                }
            });
        </script>
    
    </div>





    {{-- MPESA MODAL --}}
    <div class="modal fade" id="mpesaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('stk.push') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-3"></i>User Details
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="text-center text-danger mb-4">Pay KES: {{ $totalPrice }} to Neighbours' Parking</h5>
                        
                        <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <input type="text" name="amount" class="form-control shadow-none"
                            value="{{ $totalPrice }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Enter Phone Number</label>
                            <input type="text" name="phone_number" class="form-control shadow-none">
                        </div>

                        <input type="text" name="user" value="{{ auth()->user()}}" hidden>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button class="btn btn-outline-primary">Proceed</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
