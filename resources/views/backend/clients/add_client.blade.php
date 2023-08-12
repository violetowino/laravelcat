@extends('director.director_dashboard')
@section('director')


<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
          <div class="card">
              <div class="card-body">

		<h3 class="text-primary mb-3">Add Client</h3>

	<form class="forms-sample" method="POST" action="{{route('store.client')}}">
         @csrf

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control 
            @error('name') is-invalid @enderror">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control 
            @error('email') is-invalid @enderror">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">ID Number</label>
            <input type="text" name="id_number" class="form-control 
            @error('id_number') is-invalid @enderror">
            @error('id_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control 
            @error('phone') is-invalid @enderror">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Address</label>
            <input type="text" name="address" class="form-control 
            @error('address') is-invalid @enderror">
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary me-2">Save Changes</button>
	</form>

            </div>
         </div>
        </div>
    </div>
</div>

@endsection