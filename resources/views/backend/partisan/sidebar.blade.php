<div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">

            <li class="nav-item">
              <a class="nav-link" href={{route('dashboard')}}>
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{route('admin')}}>
                <span data-feather="file"></span>
                Admin
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('customer')}}">
                <span data-feather="shopping-cart"></span>
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('route')}}">
                <span data-feather="users"></span>
                Routes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('bus')}}">
                <span data-feather="bar-chart-2"></span>
                Buses
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Seats
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Tickets
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('trip')}}">
                  <span data-feather="layers"></span>
                  Trips
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Reports
                </a>
              </li>


          </ul>
        </div>
      </nav>
    </div>
  </div>
