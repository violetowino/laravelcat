@extends('client.client_dashboard')
@section('client')

<div class="page-content">
    <h1>Available Spaces</h1>
    <hr>

    <h3 class="h-font text-danger mb-2 mt-4">Select Parking Space Category:</h3>

    <ul style="font-size: 25px;" class="text-primary">
        <li><a class="h-font" href="{{ url('/basementspace') }}">Basement</a></li>
        <li><a class="h-font" href="{{ url('/rooftopspace') }}">Rooftop</a></li>
        <li><a class="h-font" href="{{ url('/outdoorspace') }}">Outdoor</a></li>
    </ul>
</div>
@endsection
