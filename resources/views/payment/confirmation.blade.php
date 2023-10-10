@extends('client.client_dashboard')
@section('client')

<div class="page-content">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <h1 class="h-font text-center" style="color: #d6fb03;">Payment Confirmed</h1>
    <hr>
    <p class="h-font text-center fs-5">Thank you for your payment. Your space has been Reserved!</p>
    <div class="text-center">
        <button class="mt-3 btn btn-outline-primary d-block mx-auto">
            <a href="{{ route('payment.receipt', $space) }}" 
               target="_blank">Generate Receipt</a>
        </button>
    </div>
    
    <hr>
    <br>
     <h3 class="h-font text-center text-danger mb-3">Booked Space Information:</h4>
    <h4 class="text-center text-primary mb-2 ">Space Type: <span class="text-info fw-bold fs-4">{{ $space->space_type }}</span></h4>
    <h4 class="text-center text-primary mb-2 ">Space Number: <span class="text-info fw-bold fs-4">{{ $space->space_number }}</span></h4>
    <h4 class="text-center text-primary">Amount Paid:  <span class="text-info fw-bold fs-4"> KES: {{ $totalPrice }}</span></h4>

    <hr>
    
        <input type="hidden" name="service_id" value="">
        <div class="text-center rating mb-4 pt-2">
            <h6 class="mb-2 h-font" style="color: #d6fb03;">Rate Your Experience using our Services:</h6>
            <span class="star" data-rating="1">☆</span>
            <span class="star" data-rating="2">☆</span>
            <span class="star" data-rating="3">☆</span>
            <span class="star" data-rating="4">☆</span>
            <span class="star me-3" data-rating="5">☆</span>
            <input type="hidden" name="rating" id="rating" value="1">
            <button type="submit" id="submitRating" class="mt-3 btn btn-outline-primary btn-sm">Submit Rating</button>
        </div> 
        <div class="text-center" id="thankYouMessage" style="display: none; color: #fb039c;">
            Thank you for your rating!
        </div>   
    

    <br>
    <div class="text-center">
       
        <button class="mt-3 btn btn-outline-primary me-4">
            <a class="" href="{{ route('client.dashboard') }}">
                {{ __('Finish') }}
            </a>
        </button>
   
    </div>
    
</div>

<script>
    const stars = document.querySelectorAll('.star');
    const ratingInput = document.getElementById('rating');

    stars.forEach(star => {
        star.addEventListener('click', () => {
            const ratingValue = star.getAttribute('data-rating');
            ratingInput.value = ratingValue;

            stars.forEach(s => {
                if (s.getAttribute('data-rating') <= ratingValue) {
                    s.classList.add('selected');
                } else {
                    s.classList.remove('selected');
                }
            });
        });

        star.addEventListener('mouseover', () => {
            const ratingValue = star.getAttribute('data-rating');
            stars.forEach(s => {
                if (s.getAttribute('data-rating') <= ratingValue) {
                    s.classList.add('hover');
                } else {
                    s.classList.remove('hover');
                }
            });
        });

        star.addEventListener('mouseout', () => {
            stars.forEach(s => {
                s.classList.remove('hover');
            });
        });
    });


    document.addEventListener("DOMContentLoaded", function() {
        const submitButton = document.getElementById('submitRating');
        const thankYouMessage = document.getElementById('thankYouMessage');

        submitButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the form from submitting (optional)

            // Hide the stars and submit button
            submitButton.style.display = 'none';
            document.querySelectorAll('.star').forEach(function(star) {
                star.style.display = 'none';
            });

            // Display the thank you message
            thankYouMessage.style.display = 'block';
        });
    });
</script>




@endsection


