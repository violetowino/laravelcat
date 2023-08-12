@extends('director.director_dashboard')
@section('director')


<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
           <div class="card">
              <div class="card-body">

		<h3 class="text-primary mb-3">Edit Permission</h3>

	<form class="forms-sample" method="POST" action="{{route('update.permission')}}">
        @csrf
        <input type="hidden" name="id" value="{{ $permission->id }}">

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Permission Name</label>
            <input type="text" name="name" class="form-control" value="{{ $permission->name}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Group Name</label>
            <select name="group_name" class="form-select" id="exampleFormControlSelect">
                <option selected="" disabled="">Select Group</option>
                <option value="managers" {{ $permission->group_name == 'managers' ? 'selected' : ''}}>Managers</option>
                <option value="clients" {{ $permission->group_name == 'clients' ? 'selected' : ''}}>Clients</option>
                <option value="spaces" {{ $permission->group_name == 'spaces' ? 'selected' : ''}}>Spaces</option>
                <option value="bookings" {{ $permission->group_name == 'bookings' ? 'selected' : ''}}>Bookings</option>
                <option value="reports" {{ $permission->group_name == 'reports' ? 'selected' : ''}}>Reports</option>
                <option value="analysis" {{ $permission->group_name == 'analysis' ? 'selected' : ''}}>Analysis</option>
                <option value="calender" {{ $permission->group_name == 'calender' ? 'selected' : ''}}>Calender</option>
                <option value="role" {{ $permission->group_name == 'role' ? 'selected' : ''}}>Role $ Permission</option>
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