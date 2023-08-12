@extends('director.director_dashboard')
@section('director')


<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
           <div class="card">
              <div class="card-body">

		<h3 class="text-primary mb-3">Edit Client</h3>

	<form class="forms-sample" method="POST" action="{{ url('/update/client/{id}')}}">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}"> 
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" value="{{$user->email}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">ID Number</label>
            <input type="text" name="id_number" class="form-control" value="{{$user->id_number}}"> 
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" value="{{$user->phone}}"> 
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" value="{{$user->address}}"> 
        </div>

        <button type="submit" class="btn btn-primary me-2">Save Changes</button>

    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection