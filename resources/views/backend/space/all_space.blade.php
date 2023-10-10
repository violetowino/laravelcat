@extends('director.director_dashboard')
@section('director')

<div class="page-content">

  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <a href="{{route('add.space')}}" class="btn btn-inverse-info">+ Add Space</a>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h3 class="text-primary text-center h-font mb-4">Parking Spaces Update</h3>
            <hr>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th class="text-danger">#</th>
                  <th class="text-danger">Location</th>
                  <th class="text-danger">Category</th>
                  <th class="text-danger">Quantity</th>
                  <th class="text-danger">Price</th>
                  <th class="text-danger">Action</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($spaces as $item)
                  <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->location}}</td>
                    <td>{{ $item->category}}</td>
                    <td>{{ $item->quantity}}</td>
                    <td>{{ $item->price}}</td>
                    <td>
                        <a href="{{ route('edit.space', $item->id)}}" class="btn btn-inverse-warning"><i data-feather="edit"></i></a>
                        <a href="{{ route('softdelete.space', $item->id)}}" class="btn btn-inverse-info" id="delete"><i data-feather="trash-2"></i></a>
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