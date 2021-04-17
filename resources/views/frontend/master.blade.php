
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>My Trip</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">



    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    {{-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> --}}


    <!-- Custom styles for this template -->
    {{-- <link href="https://getbootstrap.com/docs/5.0/examples/cover/cover.css" rel="stylesheet"> --}}
  </head>
  <body class="d-flex h-100 text-center text-white" style="background-color: #0d7c166b; ">

<div class="cover-container-fluid d-flex w-100 h-100  mx-auto flex-column">

    @include('frontend.partisan.header')

    {{-- <header class="mb-auto bg-success p-3">
        <div class="text-dark">
          <h3 class="float-md-start mb-0">My Trip</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end fw-bolder">
            <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
            <a class="nav-link text-dark" href="#">SignIn</a>
            <a class="nav-link text-dark" href="#">LogIn</a>
            <a class="nav-link text-dark" href="#">Contact Us</a>
          </nav>
        </div>
      </header> --}}



  <main class="px-3 text-dark">

    @yield('content')


    {{-- @include('frontend.content.searchbox') --}}



    {{-- searchbox was here --}}


    {{-- <div class="row p-2" style="border: 2px solid rgb(8, 8, 8); width: ; ">
        <form>

            <div class="row">
                <div class="col">
                    <label for="" class="mb-2">From</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        @foreach ($routeFrom as $data)
                            <option value="{{ $data-> from}}">{{ $data-> from}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="col">
                    <label for="" class="mb-2">To</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        @foreach ($routeFrom as $data)
                            <option value="{{ $data-> to}}">{{ $data-> to}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="col">
                    <label for="" class="mb-2">Journey Date</label>
                    <input type="date" class="form-control" placeholder="Last name" aria-label="Last name">
                  </div>
                  <div class="col">
                    <label for="" class="mb-2">Time Period</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select A Time Period</option>
                        @foreach ($tripInfo as $data)
                            <option value="{{ $data-> time_period}}">{{ $data-> time_period}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="col">
                    <label for="" class="mb-2">Coach Type</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Coach Type</option>
                        @foreach ($tripInfo as $data)
                            <option value="{{ $data-> coach_type}}">{{ $data-> coach_type}}</option>
                        @endforeach
                      </select>
                </div>
              </div>
            <button type="submit" class="btn btn-success m-2">Search</button>
          </form>


    </div> --}}

  </main>

  {{-- footer was here --}}
  @include('frontend.partisan.footer')

</div>



  </body>
</html>
