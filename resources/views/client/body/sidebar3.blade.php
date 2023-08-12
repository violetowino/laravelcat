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
        <a href="{{route('client.dashboard')}}" class="nav-link">
          <span class="link-title"><i class="bi bi-speedometer2 me-2"></i>Dashboard</span>
        </a>
      </li>

      <li class="nav-item nav-category">Profile</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
          <span class="link-title"><i class="bi bi-person me-3"></i>My Profile</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="emails">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{route('client.profile')}}" class="nav-link">Update Profile</a>
            </li>
            <li class="nav-item">
              <a href="{{route('client.change.password')}}" class="nav-link">Change Password</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item nav-category">Parking Spaces</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
          <span class="link-title"><i class="bi bi-eye me-3"></i>View Spaces</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="emails">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('basement')}}" class="nav-link">Basement Parking</a>
            </li>
            <li class="nav-item">
              <a href="{{url('rooftop')}}" class="nav-link">Rooftop Parking</a>
            </li>
            <li class="nav-item">
              <a href="{{url('outdoor')}}" class="nav-link">Outdoor Parking</a>
            </li>
          </ul>
        </div>
      </li>
     
      <li class="nav-item">
        <a href="{{route('map.index')}}" class="nav-link">
          <span class="link-title"><i class="bi bi-geo-alt me-3"></i>Direction</span>
        </a>
      </li>

      <li class="nav-item nav-category">Booking</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
          <span class="link-title"><i class="bi bi-bookmark me-2"></i>Book a Space</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="uiComponents">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{route('password.confirm')}}" class="nav-link">Book a Space</a>
            </li>
            <li class="nav-item">
              <a href="{{route('manage.booking')}}" class="nav-link">View bookings</a>
            </li>
            
        </div>
      </li>
    </ul>

    <div>
    <li class="dropdown-item py-2">
        <a href="{{route('client.logout')}}" class="text-body ms-0">
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
  </div>
</nav>