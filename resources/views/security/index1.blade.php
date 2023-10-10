@extends('dashboard')
@section('security')

<div class="page-content">

  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>     
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
      <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
        <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
        <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
      </div>
    </div>
  </div>


    <div class="row">
        <div class="col-lg-12 col-xl-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h2 class="text-primary text-center mb-4 h-font">Neighbours' Parking Clients</h2>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th style="color: #fb039c;">#</th>
                                    <th style="color: #fb039c;">Full Name</th>
                                    <th style="color: #fb039c;">ID Number</th>
                                    <th style="color: #fb039c;">Phone Number</th>
                                    <th style="color: #fb039c;">Number Plate</th>
                                    <th style="color: #fb039c;">Time in</th>
                                    <th style="color: #fb039c;">Time Out</th>
                                    <th style="color: #fb039c;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $key => $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->id_number}}</td>
                                        <td>{{ $item->phone}}</td>
                                        <td>{{ $item->number_plate}}</td>
                                        <td>{{ $item->time_in}}</td>
                                        <td>{{ $item->time_out}}</td>
                                        <td>
                                            <div class="form-check form-check-sm">
                                                <input type="checkbox" class="form-check-input complete-checkbox" data-booking-id="{{ $item->id }}">
                                                <label class="form-check-label" for="{{ $item->id }}">
                                                    Out
                                                </label>
                                            </div>
                                            <div class="form-check form-check-sm">
                                                <input type="checkbox" class="form-check-input" id="persistentCheckbox">
                                                <label for="persistentCheckbox">In</label>   
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Select all checkboxes with the class 'complete-checkbox'
    var checkboxes = document.querySelectorAll('.complete-checkbox');

    checkboxes.forEach(function(checkbox) {
        var bookingId = checkbox.dataset.bookingId;
        var row = checkbox.closest('tr');

        // Check the localStorage to determine the initial state of the checkbox
        var isStoredAsChecked = localStorage.getItem('booking_' + bookingId) === 'checked';

        // Set the initial state of the checkbox
        checkbox.checked = isStoredAsChecked;

        // Apply styles based on the initial state
        if (isStoredAsChecked) {
            row.classList.add('text-decoration-line-through', 'text-danger');
            checkbox.disabled = true;
        }

        checkbox.addEventListener('change', function() {
            // Check if the checkbox is checked
            if (this.checked) {
                // Apply a crossed-out style with red color to the row
                row.classList.add('text-decoration-line-through', 'text-danger');

                // Disable the checkbox
                this.disabled = true;

                // Save the checked state to localStorage
                localStorage.setItem('booking_' + bookingId, 'checked');

                // Send an Ajax request to mark the booking as completed in the backend
                // You need to define a route and a controller method to handle this request
                // Example using fetch API:
                fetch('/mark-as-complete/' + bookingId, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ _method: 'PATCH' })
                })
                .then(response => response.json())
                .then(data => console.log(data)) // Handle the response as needed
                .catch(error => console.error('Error:', error));
            } else {
                // If the checkbox is unchecked, remove the crossed-out style and color
                row.classList.remove('text-decoration-line-through', 'text-danger');

                // Disable the checkbox if the initial state was checked
                checkbox.disabled = isStoredAsChecked;

                // Remove the item from localStorage
                localStorage.removeItem('booking_' + bookingId);

                // Send an Ajax request to mark the booking as not completed in the backend
                // (You need to define a route and a controller method to handle this request)
                // Example using fetch API:
                fetch('/mark-as-not-complete/' + bookingId, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ _method: 'PATCH' })
                })
                .then(response => response.json())
                .then(data => console.log(data)) // Handle the response as needed
                .catch(error => console.error('Error:', error));
            }
        });
    });
});

    document.addEventListener('DOMContentLoaded', function () {
        // Retrieve the checkbox status from local storage
        const isChecked = localStorage.getItem('persistentCheckboxChecked') === 'true';

        // Set the initial checkbox state
        document.getElementById('persistentCheckbox').checked = isChecked;

        // Add an event listener to the checkbox
        document.getElementById('persistentCheckbox').addEventListener('change', function () {
            // Update local storage when the checkbox is changed
            localStorage.setItem('persistentCheckboxChecked', this.checked);
        });
    });

</script>





@endsection


