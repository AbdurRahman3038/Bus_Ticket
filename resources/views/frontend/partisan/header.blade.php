<header class="mb-auto bg-success p-3">
    <style>
        .logo{
            width: 100px;
        }
    </style>
    <div class="text-dark">
      {{-- <h3 class="float-md-start mb-0">My Trip</h3> --}}
      <img  class="float-md-start mb-0 logo" src="https://i.ibb.co/48gmHcW/logo.png" alt="" srcset="">
      <nav class="nav nav-masthead justify-content-center float-md-end fw-bolder">
        <a class="nav-link active text-dark" aria-current="page" href="{{route('homepage')}}">Home</a>

        @if (isset(auth()->User()->id))

        <a class="nav-link text-dark" href="{{route('ticket', auth()->User()->id)}}">Ticket</a>

@else
<a class="nav-link text-dark" href="{{route('ticket',123)}}"> Ticket</a>
        @endif


        {{-- <a class="nav-link text-dark" href="#">Notification</a> --}}
        <a class="nav-link text-dark" href="{{route('contactUs')}}">Contact Us</a>
        @auth()
        <span class='pt-2' style="color:white;">{{auth()->user()->name}}</span><a class="nav-link text-dark" href="{{route('logout')}}">/Logout</a>
        @else
        <a class="nav-link text-dark" href="{{route('login.registration.form')}}">LogIn/Registration</a>
        @endauth
      </nav>
    </div>
  </header>
