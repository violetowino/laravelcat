@extends('director.director_dashboard')
@section('director')


<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
           <div class="card">
              <div class="card-body">

		<h3 class="text-primary mb-3">Add Role</h3>
        

	<form class="forms-sample" method="POST" action="{{route('store.role')}}">
         @csrf

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Role Name</label>
            <input type="text" name="name" class="form-control 
            @error('name') is-invalid @enderror">
            @error('name')
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