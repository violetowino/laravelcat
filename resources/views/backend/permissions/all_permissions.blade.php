@extends('director.director_dashboard')
@section('director')

<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
            <a href="{{route('add.permission')}}" class="btn btn-inverse-info me-4">+ Add Permission</a>
            <a href="{{route('import.permission')}}" class="btn btn-inverse-warning me-4">Import</a>
            <a href="{{route('add.permission')}}" class="btn btn-inverse-danger">Export</a>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Permission All</h6>
                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Permission Name</th>
                        <th>Group Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($permissions as $key => $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->group_name }}</td>
                        <td>
                            <a href="{{ route('edit.permisssion', $item->id)}}" class="btn btn-inverse-warning">Edit</a>
                            <a href="{{ route('delete.permission', $item->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
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