@extends('director.director_dashboard')
@section('director')


<div class="page-content">
	<div class="row profile-body">
		<div class="col-md-8 col-xl-8 middle-wrapper">
			<div class="card">
				<div class="card-body">

					<h2 class="text-primary text-center h-font mb-4">Add Category</h2>
						<hr>
					<form class="forms-sample" method="POST" action="{{route('store.category')}}">
						@csrf

						<div class="mb-3">
							<label for="exampleInputUsername1" class="form-label">Space Category</label>
							<input type="text" name="space_category" class="form-control">
						</div>

						<button type="submit" class="btn btn-primary me-2">Save Changes</button>
					</form>
				</div>
			</div>
		</div>
    </div>
</div>

@endsection