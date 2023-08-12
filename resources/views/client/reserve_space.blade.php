@extends('client.client_dashboard')
@section('client')


<style>
    *{
        box-sizing: border-box;
    }
    body1{
        background-color: #242333;
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }
    .parking-container select{
        background-color: #fff;
        border: 0;
        border-radius: 5px;
        font-size: 16px;
        margin-left: 10px;
        padding: 5px 15px 5px 15px;
        -moz-appearance: none;
        appearance: none;
    }
    .space{
        background-color: blueviolet;
        height: 30px;
        width: 40px;
        margin: 3px;
        font-size:50px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .space.selected{
        background-color: blue;
    }
    .space.booked{
        background-color: red;
    }
    .space:nth-of-type(2){
        margin-right: 18px;
    }
    .space:nth-last-of-type(2){
        margin-left: 18px;
    }
    .space:not(.booked):hover {
        cursor: pointer;
        transform: scale(1.2);
    }
    .showcase .space:not(.booked):hover {
        cursor: default;
        transform: scale(1);
    }
    .showcase{
        background: rgba(0,0,0,0.1);
        padding: 5px 10px;
        border-radius: 5px;
        color: #777;
        list-style-type: none;
        display: flex;
        justify-content: space-between;
    }
    .showcase li{
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 10px;
    }
    .showcase li small{
        margin-left: 2px;
    }
    .row1{
        display: flex;
    }
    .row1 input{
        font-size: 1rem;
    }
    p.text{
        margin: 5px 0;
    }
    p.text span{
        color: greenyellow;
    }
    .custom-bg{
      background-color: #f92770;
    }
    .custom-bg:hover{
      background-color: #f927715b;
    }
  </style>

<div class="page-content">
    <div class="row profile-body">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
          <h2 class="mb-3 text-primary  mb-md-3">Reserve a Space</h2>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
          <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
            <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
            <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
          </div>
        </div>
    </div>

    

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">


        <div class="parking-container">
            <label>Select a space: </label>
            <select id="parking">
                <option value="100">Outdoor(KES100)</option>
                <option value="200">Basement(KES200)</option>
                <option value="150">Roofrop(KES150)</option>
            </select>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        
        <ul class="showcase">
            <li>
                <div class="space"></div>
                <small>Available</small>
            </li>
            <li>
                <div class="space selected"></div>
                <small>Selected</small>
            </li>
            <li>
                <div class="space booked"></div>
                <small>Booked</small>
            </li>
        </ul>
    </div>

   

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div class="container1">
        @for ($row = 1; $row <= $totalRows; $row++)
            <div class="row1">
                @for ($column = 1; $column <= $seatsPerRow; $column++)
                    @php
                        $seatNumber = ($row - 1) * $seatsPerRow + $column;
                    @endphp
                    <input
                        type="button"
                        class="space @if(in_array($seatNumber, $bookedSeats)) booked @endif"
                        value="{{ 'O' . $seatNumber }}"
                    >
                @endfor
            </div>
        @endfor
    </div>
</div>



    <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
        <form action="{{ route('store.booking') }}" method="post">
            @csrf
            <h5>Booking Details</h5>
        
            <h4>Selected Space/s (<span id="count">0</span>):</h4>
            <ul id="selected-seats"></ul>
        
            {{-- <input type="text" name="space_number" class="mb-3" placeholder="Space Number">
            <input type="text" name="amount" class="mb-3" placeholder="Amount"> --}}
        
            <h4>Total: <b>KES <span id="total">0</span></b></h4>

            <div class="mt-2">
                <i data-feather="shopping-cart"></i>
            </div>
        
            <button type="submit" class="mt-2" id="checkout-button">Submit Booking</button>
        </form>
        
    </div>

   
    
        </div>
    </div>
        
    </div>
</div>

<script>
    const container = document.querySelector(".container1");
    const spaces = document.querySelectorAll(".row1 .space:not(.booked)");
    const count = document.getElementById("count");
    const total = document.getElementById("total");
    const parkingSelect = document.getElementById("parking");

    // Initialize ticketPrice based on the default selected option of the parking select dropdown
    let ticketPrice = +parkingSelect.value;

    // Function to set the parking data in localStorage
    function setParkingData(parkingIndex, parkingPrice) {
        localStorage.setItem("selectedParkingIndex", parkingIndex);
        localStorage.setItem("selectedParkingPrice", parkingPrice);
    }

    function updateSelectedSpacesDisplay() {
        const selectedSpaces = document.querySelectorAll(".row1 .space.selected");
        const selectedSpaceNumbers = [...selectedSpaces].map(space => space.value).join(', ');
        document.getElementById("selectedSpacesDisplay").value = selectedSpaceNumbers;
    }

    // Function to update the selected count and total price
    function updateSelectedCount() {
        const selectedSpaces = document.querySelectorAll(".row1 .space.selected");
        const spacesIndex = [...selectedSpaces].map(space => [...spaces].indexOf(space));

        localStorage.setItem("selectedSpaces", JSON.stringify(spacesIndex));

        const selectedSpacesCount = selectedSpaces.length;
        count.innerText = selectedSpacesCount;
        total.innerText = selectedSpacesCount * ticketPrice;

        setParkingData(parkingSelect.selectedIndex, parkingSelect.value);
    }

    // Function to populate the UI based on the stored data
    function populateUI() {
        const selectedSpaces = JSON.parse(localStorage.getItem("selectedSpaces"));

        if (selectedSpaces !== null && selectedSpaces.length > 0) {
            spaces.forEach((space, index) => {
                if (selectedSpaces.indexOf(index) > -1) {
                    space.classList.add("selected");
                }
            });
        }

        const selectedParkingIndex = localStorage.getItem("selectedParkingIndex");
        if (selectedParkingIndex !== null) {
            parkingSelect.selectedIndex = selectedParkingIndex;
            ticketPrice = +parkingSelect.value; // Update ticketPrice with the selected option value
        }
    }

    // Add event listener for the parking select dropdown to update the ticket price and count
    parkingSelect.addEventListener('change', e => {
        ticketPrice = +e.target.value;
        setParkingData(e.target.selectedIndex, e.target.value);
        updateSelectedCount();
        updateSelectedSpacesDisplay(); 
    });

    // Add click event listener to the container to toggle the selected class for spaces
    container.addEventListener('click', e => {
        if (e.target.classList.contains("space") && !e.target.classList.contains("booked")) {
            e.target.classList.toggle("selected");
            updateSelectedCount();
        }
    });

    populateUI(); // Call this function to populate the UI on page load
</script>




@endsection