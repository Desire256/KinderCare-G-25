<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="bg-dar">
    <img src="{{ asset('dash/KINDERCARE_logo.png' ) }}" alt="KINDERCARE_logo" width="220" height="110"> 			
    </div>
    <div class="navbar-menu-wrapper navbar-dark d-flex align-items-top" style="background: violet;">
      <ul class="navbar-nav">
        <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
          <h1 class="welcome-text text-light" id="greetings"></h1>
          <h3 class="welcome-sub-text"></h3>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
          <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="text-light fw-bold" style = "text-transform:capitalize";>{{Auth::user()->name}}</span>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
              <img class="img-md rounded-circle" src="{{ asset('dash/KINDERCARE_logo.png' ) }}" alt="Profile image" height="60" width="60">
              <p class="mb-1 mt-3 font-weight-semibold">{{Auth::user()->name}}</p>
              <p class="fw-light text-muted mb-0">{{Auth::user()->email}}</p>
            </div>
            <a class="dropdown-item" href="{{route('logout')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
          </div>
          </a>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
        data-bs-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>

<script>
// getting the current time
// const time = new Date().getTime();
    const time = new Date().getHours();
    let greeting;
    if (time < 12) {
        greeting = "Good morning, "+"<b>{{ucfirst(Auth::user()->name)}}".fontcolor( "Blue" );
    } else if (time < 17) {
        greeting = "Good afternoon, "+ "<b>{{ucfirst(Auth::user()->name)}}".fontcolor( "Blue" );
    } else {
        greeting = "Good evening, "+ "<b>{{ucfirst(Auth::user()->name)}}".fontcolor( "Blue" );
    }
    document.getElementById("greetings").innerHTML = greeting;
</script>
