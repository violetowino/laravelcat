@extends('director.director_dashboard')
@section('director')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{route('space.restoreall')}}" class="btn btn-inverse-info me-4">Restore All</a>
            <a href="{{route('all.spaces')}}" class="btn btn-inverse-info">All Spaces</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-primary text-center h-font mb-4">Deleted Parking Spaces</h3>
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
                                            <a href="{{ route('space.restore', $item->id)}}" class="btn btn-inverse-warning" title="Edit">Restore</a>
                                            <a href="{{ route('space.forcedelete', $item->id)}}" class="btn btn-inverse-danger" title="Edit">Force Delete</a>
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