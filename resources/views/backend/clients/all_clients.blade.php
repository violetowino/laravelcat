@extends('manager.manager_dashboard')
@section('manager')

<div class="page-content">

  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <a href="{{ route('add.client')}}" class="btn btn-inverse-info me-4">+ Add Client</a>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h3 class="text-primary text-center h-font mb-3">All Clients</h3>
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
                        url('upload/client_images/'.$item->photo) : 
                        url('upload/no_image.jpg') }}" alt="profile">
                    </td>
                    
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->id_number }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->address }}</td>
                    <td>
                        <a href="{{ route('edit.client', $item->id)}}" class="btn btn-inverse-warning" title="Edit"><i data-feather="edit"></i></a>
                        <a href="{{ route('softdelete.client', $item->id)}}" class="btn btn-inverse-info" title="Delete" id="delete"><i data-feather="trash-2"></i></a>
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