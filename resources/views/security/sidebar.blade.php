<nav class="sidebar">
    <div class="sidebar-header p-1">
      <a href="#" class="sidebar-brand">
        Neighbours'<span>Parking</span>
        <p class="fs-6" id="emailLink" style="color: #fb039c;"><i class="bi bi-envelope-at me-2"></i>info@neighbourspark.co.ke</p>
      </a>
    
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <hr>
  
    <div class="sidebar-body">
      
      <ul class="nav">
        @php
        $id = Auth::user()->id;
        $profileData =APP\Models\User::find($id);
  
        @endphp

          <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
            <div class="mb-3">
              <img class="wd-80 ht-80 rounded-circle" src="{{ (!empty($profileData->photo)) ? 
                  url('upload/client_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="">
                  <div class="edit-icon">
                    <i class="icon-md text-success" data-feather="edit-2" aria-hidden="true"></i>
                </div>
            </div>
            <div class="text-center">
              <p class="tx-16 fw-bolder">{{ $profileData->name }}</p>
              <p class="tx-12 text-muted">{{ $profileData->duty_station }}</p>
            </div>
          </div>
          <div>
            <li class="dropdown-item py-2">
              <a href="{{route('security.logout')}}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="log-out"></i>
                <span>Log Out</span>
              </a>
            </li>
          </div>
    
          <div>
            <li class="dropdown-item py-2">
              <a href="{{route('profile.destroy')}}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="trash-2"></i>
                <span>Delete Account</span>
              </a>
            </li>
          </div>
      </ul>

    </div>
  </nav>

  <script>
    $(document).ready(function() {
        $('.edit-icon').on('click', function() {
            // Handle the click event, e.g., show a modal for image upload
            // You can use a library like Bootstrap Modal or create a custom solution
            // Example using Bootstrap Modal:
            $('#imageUploadModal').modal('show');
        });
    });
</script>

<!-- Add this to your HTML body -->
<div class="modal fade" id="imageUploadModal" tabindex="-1" role="dialog" aria-labelledby="imageUploadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageUploadModalLabel">Edit Profile Picture</h5>
            </div>
            <div class="modal-body">
              <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('security.profile.store')}}">
                @csrf
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color: #fb039c;">Photo</label>
                <input type="file" name="photo" class="form-control" id="formFile" 
                    autocomplete="off" value="{{$profileData->photo}}">
              </div>
              <button type="submit" class="btn btn-outline-primary me-2">Save</button>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
           
          </form>
        </div>
    </div>
</div>






