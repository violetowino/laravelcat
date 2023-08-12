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
                <h6 class="card-title">Parking Spaces Update</h6>
                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Location</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Space Number</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach ($spaces as $item)
                  
                      <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->location}}</td>
                        <td>{{ $item->category}}</td>
                        <td>{{ $item->quantity}}</td>
                        <td>{{ $item->space_number}}</td>
                        <td>{{ $item->price}}</td>
                        <td>
                            <a href="{{ route('edit.space', $item->id)}}" class="btn btn-inverse-warning">Edit</a>
                            <a href="{{ route('delete.space', $item->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
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