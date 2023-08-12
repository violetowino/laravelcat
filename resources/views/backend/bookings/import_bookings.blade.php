@extends('director.director_dashboard')
@section('director')


<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{route('export.booking')}}" class="btn btn-inverse-danger">Download Xlsx</a>
        </ol>
    </nav>

    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
           <div class="card">
              <div class="card-body">

	<h6 class="text-primary mb-3">Import Booking</h6>

	<form class="forms-sample" method="POST" action="{{route('import.bookingfile')}}" 
    class="forms-sample" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Xlsx File Import</label>
            <input type="file" name="import_file" class="form-control">
        </div>
	
		<button type="submit" class="btn btn-inverse-warning me-2">Upload</button>
	</form>
</div>
</div>
</div>
</div>
</div>

@endsection