@extends('manager.manager_dashboard')
@section('manager')

<div class="page-content">

  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <a href="{{route('add.parking')}}" class="btn btn-inverse-info me-4">+ Add Parking Booking</a>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h3 class="text-primary mb-3 h-font text-center">All Booked Parking Spaces </h3>
          <hr>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th class="text-danger">#</th>
                  <th class="text-danger">Full Name</th>
                  <th class="text-danger">ID Number</th>
                  <th class="text-danger">Number Plate</th>
                  <th class="text-danger">County</th>
                  <th class="text-danger">Phone Number</th>
                  <th class="text-danger">Address</th>
                  <th class="text-danger">Time-in</th>
                  <th class="text-danger">Time-out</th>
                  <th class="text-danger">Action</th>
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
                      <a href="{{ route('edit.parking', $item->id)}}" class="btn btn-inverse-warning" title="Edit"><i data-feather="edit"></i></a>
                      <a href="{{ route('softdelete.parking', $item->id)}}" class="btn btn-inverse-info" title="Delete" id="delete"><i data-feather="trash-2"></i></a>
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