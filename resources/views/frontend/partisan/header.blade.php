<header class="mb-auto bg-success p-3">
    <div class="text-dark">
      <h3 class="float-md-start mb-0">My Trip</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end fw-bolder">
        <a class="nav-link active text-dark" aria-current="page" href="{{route('homepage')}}">Home</a>

        @auth()
        <span style="color:white;">{{auth()->user()->name}}</span> <a class="nav-link text-dark" href="{{route('logout')}}"> /Logout</a>
        @else
        <a class="nav-link text-dark" href="{{route('login.registration.form')}}">LogIn/Registration</a>
        @endauth
        <a class="nav-link text-dark" href="#">Notification</a>
        <a class="nav-link text-dark" href="#">Contact Us</a>
      </nav>
    </div>
  </header>
