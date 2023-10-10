@extends('manager.manager_dashboard')
@section('manager')

<div class="page-content">

  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <a href="{{ route('client.restoreall') }}" class="btn btn-inverse-info me-4">+ Restore All</a>
      <a href="{{ route('all.clients') }}" class="btn btn-inverse-info"> All Clients</a>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h3 class="text-primary text-center h-font mb-3">Trashed Clients</h3>
          <hr>
          
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th class="text-danger">#</th>
                  <th class="text-danger">Full Name</th>
                  <th class="text-danger">Image</th>
                  <th class="text-danger">email</th>
                  <th class="text-danger">ID Number</th>
                  <th class="text-danger">Phone Number</th>
                  <th class="text-danger">Address</th>
                  <th class="text-danger">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allclients as $key => $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <img class="wd-100 rounded-circle" src="{{ (!empty($item->photo)) ? 
                        url('upload/manager_images'.$item->photo) : 
                        url('upload/no_image.jpg') }}" alt="profile">
                    </td>
                    
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->id_number }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->address }}</td>
                    <td>
                        <a href="{{ route('client.restore', $item->id)}}" class="btn btn-inverse-warning" title="Edit">Restore</a>
                        <a href="{{ route('client.forcedelete', $item->id)}}" class="btn btn-inverse-danger" title="Delete" id="delete">Delete Permanently</a>
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