@extends('director.director_dashboard')
@section('director')

<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
            <a href="{{route('add.role.permission')}}" class="btn btn-inverse-info">+ Add Role-Permission</a>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Role Permission</h6>
                
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Role Name</th>
                        <th>Permission</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $key => $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            @foreach ($item->permissions as $prem)
                            <span class="badge bg-danger">{{ $prem->name }} </span>  
                            @endforeach
                        </td> 
                        <td>
                            <a href="{{ route('edit.role.permission', $item->id)}}" class="btn btn-inverse-warning">Edit</a>
                            <a href="{{ route('delete.role.permission', $item->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
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