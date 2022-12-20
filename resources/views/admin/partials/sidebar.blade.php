
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('admin/assets/images/logo.svg')}}" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('admin/assets/images/logo-mini.svg')}}" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="{{asset('admin/assets/images/faces/face15.jpg')}}" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">{{$user->name}}</h5>
            <span>Gold Member</span>
          </div>
        </div>
        <a href="{{route('profile.edit')}}" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <a href="{{route('profile.edit')}}" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Edit your profile</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <form method="POST" action="{{route('logout')}}" class="dropdown-item preview-item">
          @csrf
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-calendar-today text-success"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <input type="submit" value="Logout"  class="preview-subject ellipsis mb-1 text-small">
            </div>
          </form>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('dashboard')}}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Agency</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('agency.view')}}">Your All Agencies</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('agency.create')}}">Create new Agency</a></li>
        </ul>
      </div>
    </li>

       


    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('land.view')}}">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Lands</span>
      </a>
    </li> 

    <li class="nav-item menu-items">
      <a class="nav-link" href="#">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
        <span class="menu-title">Diagrams</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="#">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Fronts</span>
      </a>
    </li> 
  </ul>
</nav>