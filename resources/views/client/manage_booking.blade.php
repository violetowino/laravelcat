@extends('client.client_dashboard')
@section('client')


<div class="page-content">

        <nav class="page-breadcrumb">
					<ol class="breadcrumb d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="{{route('book.space')}}" class="btn btn-inverse-info">+ Book a Space</a>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">My Bookings</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>ID Number</th>
                        <th>Number Plate</th>
                        <th>County</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Time-in</th>
                        <th>Time-out</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $key => $item)
                      <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->id_number}}</td>
                        <td>{{ $item->number_plate}}</td>
                        <td>{{ $item->county}}</td>
                        <td>{{ $item->phone}}</td>
                        <td>{{ $item->address}}</td>
                        <td>{{ $item->time_in}}</td>
                        <td>{{ $item->time_out}}</td>
                        <td>
                            <a href="{{ route('booking.edit', $item->id)}}" class="btn btn-inverse-warning">Edit</a>
                            <a href="{{ route('booking.delete', $item->id)}}" class="btn btn-inverse-danger">Delete</a>
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
@endsection