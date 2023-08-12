@extends('director.director_dashboard')
@section('director')

<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
            <a href="{{ route('booking.restoreall') }}" class="btn btn-inverse-info me-4">+ Restore All</a>
            <a href="{{ route('all.bookings') }}" class="btn btn-inverse-info"> All Bookings</a>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Trashed Bookings</h6>
                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>ID Number</th>
                        <th>Phone Number</th>
                        <th>Number Plate</th>
                        <th>Space Type</th>
                        <th>Space Number</th>
                        <th>Amount Paid</th>
                        <th>Payment Code</th>
                        <th>Time in</th>
                        <th>Time Out</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $key => $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->id_number }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->number_plate }}</td>
                        <td>{{ $item->space_type }}</td>
                        <td>{{ $item->space_number }}</td>
                        <td>{{ $item->amount_paid }}</td>
                        <td>{{ $item->payment_code }}</td>
                        <td>{{ $item->time_in }}</td>
                        <td>{{ $item->time_out }}</td>
                        <td>
                            <a href="{{ route('booking.restore', $item->id)}}" class="btn btn-inverse-warning" title="Edit"><i data-feather="edit"></i></a>
                            <a href="{{ route('booking.forcedelete', $item->id)}}" class="btn btn-inverse-danger" title="Delete" id="delete"><i data-feather="trash-2"></i></a>
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

@endsection