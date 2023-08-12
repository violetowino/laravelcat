@extends('director.director_dashboard')
@section('director')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<div class="page-content">
    <style>
        .form-check-label{
            text-transform: capitalize;
        }
    </style>

    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
           <div class="card">
              <div class="card-body">

			<h3 class="text-primary mb-3">Add Roles in Permission</h3>
            <hr>

	<form class="forms-sample" method="POST" action="{{route('role.permission.store')}}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Role Name</label>
            <select name="role_id" class="form-select" id="exampleFormControlSelect">
                <option selected="" disabled="">Select Role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id}}">{{ $role->name}}</option>  
                @endforeach
            </select>
        </div>

        <div class="form-checkbox mb-2">
            <input type="checkbox" name="" class="form-check-input" id="checkDefaultmain">
            <label class="form-check-label" for="checkDefaultmain">All Permissions</label>
        </div>

        <hr>

        @foreach ($permission_groups as $group)
        <div class="row">
            <div class="col-3">
                <div class="form-checkbox mb-2">
                    <input type="checkbox" name="" class="form-check-input" id="checkDefault">
                    <label class="form-check-label" for="checkDefault">{{ $group->group_name}}</label>
                </div>
            </div>

        <div class="col-5">

        @php
            $permissions = App\Models\User::getpermissionByGroupName($group->group_name);   
        @endphp

        @foreach ($permissions as $permission)
       <div class="form-checkbox mb-2">
            <input type="checkbox" name="permission[]" class="form-check-input" id="checkDefault{{ $permission->id}}" value="{{ $permission->id}}">
            <label class="form-check-label" for="checkDefault{{ $permission->id}}">{{ $permission->name}}</label>
        </div>
        @endforeach
            <br>
        </div>
    </div>
    @endforeach
	
	<button type="submit" class="btn btn-primary me-2">Save Changes</button>
	</form>
        </div>
       </div>
      </div>
     </div>
    </div>

<script>
    $('#checkDefaultmain').click(function(){
        if ($(this).is(':checked')) {
            $('input[ type= checkbox ]').prop('checked',true);
        }else{
            $('input[ type= checkbox ]').prop('checked',false);
        }
    })
</script>
@endsection