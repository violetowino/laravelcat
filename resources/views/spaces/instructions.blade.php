@extends('client.client_dashboard')
@section('client')

<div class="page-content">

    <link rel="stylesheet" href="css/main.css">
    
    <h1 class="text-center text-primary">Booking Instructions</h1>
    <hr>
    <p class="h-font text-center text-danger fs-5">Read the following Instructions Carefully before proceeding with the booking!</p>
    <hr>
    <p class="text-center fonts fs-5">
        Our parking lot facilities are located in spacious places <br> with ambient 
        environment that offers customers an unforgattable experience.<br>  They are designed
         to accommodate vehicles, providing a convenient and space-efficient<br>  
         solution for parking in areas with limited surface space.
        These car parks are <br> located in  easily accessible places and are privately 
        managed.<br> They are secure parking spots that are well guarded.
    </p>

    <h3 class="h-font text-danger mt-4 pt-4 mb-4 text-center fw-bold">Parking Instructions</h3>
    <div class="text-center fs-5">
        <ul class="list-unstyled">
            <li class="fonts"><i class="bi bi-check"></i>Book the space online and make payment. </li>
            <li class="fonts"><i class="bi bi-check"></i>Carry your official identification document.</li>
            <li class="fonts"><i class="bi bi-check"></i>The ticket is collected at the entry point</li>
            <li class="fonts"><i class="bi bi-check"></i>Make sure you retain the ticket to exit</li>
            <li class="fonts"><i class="bi bi-check"></i>Replacement for a lost ticket is Ksh 500</li>
            <li class="fonts"><i class="bi bi-check"></i>Exit the car park within 15 minutes after the payment.</li>
            <li class="fonts"><i class="bi bi-check"></i>Cancellation of booked space 15 minutes to time will attract a 10% fee.</li><br>
            <li class="fonts"><span class="h-font text-primary">NOTE </span> <br>You can as well book and pay at the parking place <br> All bookings are subject to availability. <br>
                All vehicles and content are left at the owner's risk. <br> The management does not accept responsibility for any damage, accident or losses.</li>
        </ul>  
    </div>
    
</div>

@endsection