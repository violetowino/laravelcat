@extends('director.director_dashboard')
@section('director')


<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
           <div class="card">
              <div class="card-body">

	<h3 class="text-primary mb-3">Add Permission</h3>

	<form class="forms-sample" method="POST" action="{{route('store.permission')}}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Permission Name</label>
            <input type="text" name="name" class="form-control 
            @error('name') is-invalid @enderror">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Group Name</label>
            <select name="group_name" class="form-select" id="exampleFormControlSelect">
                <option selected="" disabled="">Select Group</option>
                <option value="managers">Managers</option>
                <option value="clients">Clients</option>
                <option value="spaces">Spaces</option>
                <option value="bookings">Bookings</option>
                <option value="reports">Reports</option>
                <option value="analysis">Analysis</option>
                <option value="calender">Calender</option>
                <option value="role">Role and Permission</option>
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