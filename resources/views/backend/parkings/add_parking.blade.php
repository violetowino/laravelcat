@extends('director.director_dashboard')
@section('director')


<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
          <div class="card">
              <div class="card-body">

                <h6 class="card-title">Add Parking Space</h6>

	<form class="forms-sample" method="POST" action="{{route('store.space')}}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Location</label>
            <input type="text" name="location" class="form-control 
            @error('location') is-invalid @enderror">
            @error('location')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Category</label>
            <select name="group_name" class="form-select" id="exampleFormControlSelect">
                <option selected="" disabled="">Select Category</option>

                @foreach ($category as $category)
                    <option>{{ $category->space_category }}</option>
                @endforeach
                
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control 
            @error('quantity') is-invalid @enderror">
            @error('quantity')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Space Number</label>
            <input type="text" name="space_number" class="form-control 
            @error('space_number') is-invalid @enderror">
            @error('space_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Price</label>
            <input type="number" name="price" class="form-control 
            @error('price') is-invalid @enderror">
            @error('price')
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