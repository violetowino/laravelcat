<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Neighbours'<span>Parking</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a href="{{route('manager.dashboard')}}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item nav-category">Profile</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="director">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">My Profile</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="emails">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{route('manager.profile')}}" class="nav-link">Update Profile</a>
            </li>
            <li class="nav-item">
              <a href="{{route('manager.change.password')}}" class="nav-link">Change Password</a>
            </li>
          </ul>
        </div>
      </li>


      <li class="nav-item nav-category">Users</li>  
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">Clients</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="emails">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('all.clients') }}" class="nav-link">All Clients</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('add.client') }}" class="nav-link">Add Client</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('client.trashed') }}" class="nav-link">Client Bin</a>
            </li>
          </ul>
        </div>
      </li>
  
      <li class="nav-item nav-category">Parking Information</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
          <i class="link-icon" data-feather="bookmark"></i>
          <span class="link-title">Parking Bookings</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="emails">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('all.parkings')}}" class="nav-link">All Parkings</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('add.parking')}}" class="nav-link">Add Parking</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('parking.trashed')}}" class="nav-link">Bin</a>
            </li>
          </ul>
        </div>
      </li>
     
      <li class="nav-item">
        <a href="{{ route('calender.index') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Calendar</span>
        </a>
      </li>

      <br><br>

      <div>
      <li class="dropdown-item py-2">
          <a href="{{route('manager.logout')}}" class="text-body ms-0">
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