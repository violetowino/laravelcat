@extends('director.director_dashboard')
@section('director')


<div class="page-content">
	<div class="row profile-body">
     	<div class="col-md-8 col-xl-8 middle-wrapper">
          <div class="card">
              <div class="card-body">

		<h6 class="card-title">Edit Category</h6>

	<form class="forms-sample" method="POST" action="{{route('update.category')}}">
        @csrf

		<input type="hidden" name="id" value="{{ $category->id }}">

		<div class="mb-3">
			<label for="exampleInputUsername1" class="form-label">Space Category</label>
			<input type="text" name="space_category" class="form-control"  value="{{ $category->space_category }}">
		</div>

		<button type="submit" class="btn btn-primary me-2">Save Changes</button>

	</form>

              </div>
            </div>
        </div>
    </div>
</div>

@endsection