@extends('director.director_dashboard')
@section('director')


<div class="page-content">
    <div class="row profile-body">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('all.managers') }}" class="btn btn-inverse-info"> All Managers</a>
            </ol>
        </nav>
        
        <div class="col-md-8 col-xl-8 middle-wrapper">
          <div class="card">
              <div class="card-body">

                <h3 class="text-primary mb-3">Add Manager</h3>

	<form class="forms-sample" method="POST" action="{{route('store.manager')}}">
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
            <label for="exampleInputUsername1" class="form-label">Duty Station</label>
            <input type="text" name="duty_station" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Role Name</label>
            <select name="roles" class="form-select" id="exampleFormControlSelect">
                <option selected="" disabled="">Select Role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id}}">{{ $role->name}}</option>  
                @endforeach
            </select>
        </div>

    <button type="submit" class="btn btn-primary me-2">Save Changes</button>
	</form>
     </div>
    </div>
   </div>
  </div>
</div>

@endsection