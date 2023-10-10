<nav class="navbar">

  <div class="navbar-content">
    <ul class="navbar-nav">

      @php
      $id = Auth::user()->id;
      $profileData =APP\Models\User::find($id);

      @endphp

      <li class="nav-item dropdown">
        <p class="tx-16 fw-bolder h-font me-4" style="color: #fb039c;">{{ $profileData->name }}</p>
          <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="wd-30 ht-30 rounded-circle" src="{{ (!empty($profileData->photo)) ? 
              url('upload/client_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="profile">
          </a>
        <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
          <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
            <div class="mb-3">
              <img class="wd-80 ht-80 rounded-circle" src="{{ (!empty($profileData->photo)) ? 
                  url('upload/client_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="">
            </div>
            <div class="text-center">
              <p class="tx-16 fw-bolder">{{ $profileData->name }}</p>
              <p class="tx-12 text-muted">{{ $profileData->email }}</p>
            </div>
          </div>
          <ul class="list-unstyled p-1">
            <li class="dropdown-item py-2">
              <a href="{{route('client.profile')}}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="user"></i>
                <span>Profile</span>
              </a>
            </li>
            <li class="dropdown-item py-2">
              <a href="{{route('client.change.password')}}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="edit"></i>
                <span>Change Password</span>
              </a>
            </li>
            <li class="dropdown-item py-2">
              <a href="{{route('password.confirm')}}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="repeat"></i>
                <span>Book a Space</span>
              </a>
            </li>
            <li class="dropdown-item py-2">
              <a href="{{route('client.logout')}}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="log-out"></i>
                <span>Log Out</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>
    