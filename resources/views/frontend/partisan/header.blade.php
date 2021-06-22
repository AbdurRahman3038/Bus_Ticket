<header class="mb-auto bg-success p-3">
    <style>
        img{
            width: 100px;
        }
    </style>
    <div class="text-dark">
      {{-- <h3 class="float-md-start mb-0">My Trip</h3> --}}
      <img  class="float-md-start mb-0" src="https://i.ibb.co/48gmHcW/logo.png" alt="" srcset="">
      <nav class="nav nav-masthead justify-content-center float-md-end fw-bolder">
        <a class="nav-link active text-dark" aria-current="page" href="{{route('homepage')}}">Home</a>

        <a class="nav-link text-dark" href="{{route('ticket')}}">Ticket</a>

        <a class="nav-link text-dark" href="#">Notification</a>
        <a class="nav-link text-dark" href="#">Contact Us</a>
        @auth()
        <span style="color:white;">{{auth()->user()->name}}</span> <a class="nav-link text-dark" href="{{route('logout')}}"> /Logout</a>
        @else
        <a class="nav-link text-dark" href="{{route('login.registration.form')}}">LogIn/Registration</a>
        @endauth
      </nav>
    </div>
  </header>
