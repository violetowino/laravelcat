@extends('director.director_dashboard')
@section('director')

<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
            <a href="{{ route('add.manager')}}" class="btn btn-inverse-info me-4">+ Add Manager</a>
            <a href="{{route('import.managers')}}" class="btn btn-inverse-warning me-4">Import Managers</a>
            <a href="" class="btn btn-inverse-danger">Export Managers</a>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h3 class="text-primary mb-3">All Managers</h3>
                
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
                        <th>Duty Station</th>
                        <th>Role</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($allmanagers as $key => $item)
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
                        <td>{{ $item->duty_station }}</td>
                        <td>
                          @foreach($item->roles as $role)
                          <span class="badge badge-pill bg-danger">{{ $role->name }}</span>
                          @endforeach
                        </td>
                        <td>
                            <a href="{{ route('edit.manager', $item->id)}}" class="btn btn-inverse-warning" title="Edit"><i data-feather="edit"></i></a>
                            <a href="{{ route('softdelete.manager', $item->id)}}" class="btn btn-inverse-info" title="Delete" id="delete"><i data-feather="trash-2"></i></a>
                            {{-- <a href="{{ route('forcedelete.manager', $item->id)}}" class="btn btn-inverse-danger" title="Delete" id="delete"><i data-feather="trash-2"></i></a> --}}
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