@extends('client.client_dashboard')
@section('client')


<div class="page-content">
    <h1>Available Spaces</h1>
    <hr>

    <span class="badge bg-danger fs-6 mb-3">Kindly note that the Prices indicated are on per-hour basis...</span>
    <div class="key">
        <strong>KEY:</strong>
        <ul class="showcase">
            <li>
                <h5>R: Rooftop</h5>
            </li>
            <li>
                 <h5>B: Basement</h5>
            </li>
            <li>
                <h5>R: Rooftop</h5>
            </li>
        </ul>  
    </div>

<hr>
    <div class="seat-container">
        @foreach($spaces as $space)
            <div class="seat-item">
                <strong>Space: {{ $space->space_number }}</strong> | Hourly Price: KES {{ $space->price }}

                {{-- @if(!$space->is_booked)
                <form action="{{ route('spaces.book', $space) }}" method="POST" style="display: inline;">
                    @csrf
                    <label for="booking_hours">Booking Hours:</label>
                    <input type="number" name="booking_hours" min="1" value="1"> <!-- Input field for the number of hours -->
                    <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">Book</button>
                </form>
            @else
                <span class="booked">Booked</span>
            @endif --}}
                @if(!$space->is_booked)
                    <form action="{{ route('spaces.book', $space) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">Book</button>
                    </form>
                @else
                    <span class="booked">Booked</span>
                @endif
            </div>
        @endforeach
    </div>

</div>

@endsection
