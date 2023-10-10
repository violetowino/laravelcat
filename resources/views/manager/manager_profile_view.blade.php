@extends('manager.manager_dashboard')
@section('manager')


<div class="page-content">

  <div class="row profile-body">
    <!-- left wrapper start -->
    <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
      <div class="card rounded">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between mb-2">            
            <div>
              <img class="wd-80 rounded-circle" src="{{ (!empty($profileData->photo)) ? 
                url('upload/manager_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="profile">
            </div>
          </div>
              
          <div class="mt-3">
            <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
            <p class="text-muted">{{$profileData->name}}</p>
          </div>

          <div class="mt-3">
            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
            <p class="text-muted">{{$profileData->email}}</p>
          </div>

          <div class="mt-3">
            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
            <p class="text-muted">{{$profileData->phone}}</p>
          </div>

          <div class="mt-3">
            <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
            <p class="text-muted">{{$profileData->address}}</p>
          </div>
        </div>
      </div>
    </div>
    <!-- left wrapper end -->
  
    <div class="col-md-8 col-xl-8 middle-wrapper">
      <div class="card">
        <div class="card-body">
          <h3 class="text-primary text-center h-font mb-3">Update Profile</h3>
          <hr>

          <form class="forms-sample" enctype="multipart/form-data" method="POST" 
            action="{{route('manager.profile.store')}}">
            @csrf

            <div class="mb-3">
              <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputUsername1" 
                  autocomplete="off" value="{{$profileData->username}}">
            </div>

            <div class="mb-3">
              <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputUsername1" 
                  autocomplete="off" value="{{$profileData->name}}">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" style="color: #fb039c;">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                  autocomplete="off" value="{{$profileData->email}}">
            </div>

            <div class="mb-3">
              <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">Phone</label>
              <input type="number" name="phone" class="form-control" id="exampleInputUsername1" 
                autocomplete="off" value="{{$profileData->phone}}">
            </div>

            <div class="mb-3">
              <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">Address</label>
              <input type="text" name="address" class="form-control" id="exampleInputUsername1" 
                autocomplete="off" value="{{$profileData->address}}">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" style="color: #fb039c;">Photo</label>
              <input type="file" name="photo" class="form-control" id="formFile" 
                autocomplete="off" value="{{$profileData->photo}}">
            </div>

            <button type="submit" class="btn btn-primary me-2">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection