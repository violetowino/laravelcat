@extends('director.director_dashboard')
@section('director')

<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
            <a href="{{route('add.booking')}}" class="btn btn-inverse-info me-4">+ Add Booking</a>
            <a href="{{route('import.bookings')}}" class="btn btn-inverse-warning me-4">Import Bookings</a>
            <a href="{{route('import.bookings')}}" class="btn btn-inverse-danger">Export Bookings</a>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Bookings</h6>
                
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
                            <a href="{{ route('edit.booking', $item->id)}}" class="btn btn-inverse-warning" title="Edit"><i data-feather="edit"></i></a>
                            <a href="{{ route('softdelete.booking', $item->id)}}" class="btn btn-inverse-info" title="Delete" id="delete"><i data-feather="trash-2"></i></a>
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