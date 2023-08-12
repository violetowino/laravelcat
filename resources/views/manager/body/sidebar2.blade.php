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
        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title"></i>My Profile</span>
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

      <li class="nav-item nav-category">Space Updates</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Space info</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="emails">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="" class="nav-link">All Spaces</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">Add Space</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">Edit Space</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item nav-category">Users</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="director">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">Managers</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="emails">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="" class="nav-link">All Managers</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">Add Manager</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Edit Manager</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">Clients</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="emails">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="" class="nav-link">All Clients</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">Add Client</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Edit Client</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item nav-category">Booking Information</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Total Bookings</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="emails">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="" class="nav-link">All Booked Spaces</a>
            </li>
            <li class="nav-item">
              <a href="pages/email/read.html" class="nav-link">Amount Collected</a>
            </li>
            <li class="nav-item">
              <a href="pages/email/read.html" class="nav-link">Edit Bookings</a>
            </li>
          </ul>
        </div>
      </li>
     
      <li class="nav-item">
        <a href="pages/apps/calendar.html" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Calendar</span>
        </a>
      </li>

      <li class="nav-item nav-category">Roles & Permission</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
          <i class="link-icon" data-feather="feather"></i>
          <span class="link-title">Roles & Permission</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="uiComponents">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('all.permissions')}}" class="nav-link">All Permissions</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('all.roles') }}" class="nav-link">All Roles</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('add.role.permission') }}" class="nav-link">Role in Permission</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('all.role.permission') }}" class="nav-link">All Role in Permission</a>
            </li>
            
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
          <i class="link-icon" data-feather="anchor"></i>
          <span class="link-title">Advanced UI</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="advancedUI">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
            </li>
            <li class="nav-item">
              <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
            </li>
          </ul>
        </div>
      </li>

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