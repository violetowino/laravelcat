@extends('director.director_dashboard')
@section('director')

<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
            <a href="{{ route('add.client')}}" class="btn btn-inverse-info me-4">+ Add Client</a>
            <a href="{{route('import.clients')}}" class="btn btn-inverse-warning me-4">Import Clients</a>
            <a href="{{route('import.clients')}}" class="btn btn-inverse-danger">Export Clients</a>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h3 class="text-primary mb-3">All Clients</h3>
                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Image</th>
                        <th>email</th>
                        <th>ID Number</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($allclients as $key => $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <img class="wd-100 rounded-circle" src="{{ (!empty($item->photo)) ? 
                            url('upload/client_images'.$item->photo) : 
                            url('upload/no_image.jpg') }}" alt="profile">
                        </td>
                        
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->id_number }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <a href="{{ route('edit.client', $item->id)}}" class="btn btn-inverse-warning" title="Edit"><i data-feather="edit"></i></a>
                            <a href="{{ route('softdelete.client', $item->id)}}" class="btn btn-inverse-danger" title="Delete" id="info"><i data-feather="trash-2"></i></a>
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