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
                <a class="nav-link" href={{route('display.user')}}>
                  <span data-feather="layers"></span>
                  Users
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('location')}}">
                <span data-feather="users"></span>
                Locations
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('bus')}}">
                <span data-feather="bar-chart-2"></span>
                Buses
              </a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('trip')}}">
                  <span data-feather="layers"></span>
                  Trips
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('bookingBackend')}}">
                  <span data-feather="layers"></span>
                  Booking Table
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('paymentBackend')}}">
                  <span data-feather="layers"></span>
                  Payment
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('customer')}}">
                  <span data-feather="shopping-cart"></span>
                  Customer Record
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('report')}}">
                  <span data-feather="shopping-cart"></span>
                  Report
                </a>
              </li>


          </ul>
        </div>
      </nav>
    </div>
  </div>
