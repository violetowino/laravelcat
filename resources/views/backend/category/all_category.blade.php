@extends('director.director_dashboard')
@section('director')

<div class="page-content">

  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <a href="{{route('add.category')}}" class="btn btn-inverse-info me-4">+ Add Category</a>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="text-primary text-center h-font mb-4">All Categories</h2>
						<hr>
              
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-danger">#</th>
                  <th class="text-danger">Space Category</th>
                  <th class="text-danger">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $key => $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->space_category }}</td>
                    <td>
                      <a href="{{route('edit.category', $item->id)}}" class="btn btn-inverse-warning" title="Edit"><i data-feather="edit"></i></a>
                      <a href="{{route('delete.category', $item->id)}}" class="btn btn-inverse-danger" title="Delete" id="delete"><i data-feather="trash-2"></i></a>
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