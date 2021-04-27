@extends('frontend.master')

@section('content')

<h1>Search Your Trip</h1>
    <p class="lead">
      Please <a class="text-dark" href="{{route('login.registration.form')}}">Login</a>  or <a class="text-dark" href="{{route('login.registration.form')}}">Register</a> First
    </p>
<div class="row p-2" style="border: 2px solid rgb(8, 8, 8); width: ; ">

    <form method="post" action="{{route('tripview')}}">
        @csrf

        <div class="row">
            <div class="col">
                <label for="" class="mb-2">From</label>
                <select name="from" class="form-select" aria-label="Default select example">
                    <option selected>Select A Place</option>
                    @foreach ($locationFrom as $data)
                        <option value="{{ $data-> from}}">{{ $data-> from}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="col">
                <label for="" class="mb-2">To</label>
                <select name="to" class="form-select" aria-label="Default select example">
                    <option selected>Select Your Destination</option>
                    @foreach ($locationFrom as $data)
                        <option value="{{ $data-> to}}">{{ $data-> to}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="col">
                <label for="" class="mb-2">Journey Date</label>
                <input name="date" type="date" class="form-control" placeholder="Last name" aria-label="Last name">
              </div>

              <div class="col">
                <label for="" class="mb-2">Time Period</label>
                <select name="time_period" class="form-select" aria-label="Default select example">
                    <option selected>Select A Time Period</option>
                    @foreach ($tripInfo as $data)
                        <option value="{{ $data-> user_reporting_time}}">{{ $data-> user_reporting_time}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="col">
                <label for="" class="mb-2">Coach Type</label>
                <select name="bus_type" class="form-select" aria-label="Default select example">
                    <option selected>Select Bus Type</option>
                    @foreach ($busInfo as $data)
                        <option value="{{ $data-> bus_type}}">{{ $data-> bus_type}}</option>
                    @endforeach
                  </select>
            </div>
          </div>

        <button type="submit" class="btn btn-success m-2">Search</button>



      </form>


</div>

@endsection
