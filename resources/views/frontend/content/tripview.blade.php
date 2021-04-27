@extends('frontend.master')

@section('content')



<div class="container">
    <h1>Available Trips </h1>

    <table class="table table-dark">
      <thead>
        <tr>
          <th>SL</th>
          <th>Date</th>
          <th>Reporting</th>
          <th>Departure</th>
          <th>From</th>
          <th>To</th>
          <th>Coach Type</th>
          <th>Price</th>
          <th>Action</th>

        </tr>
         @foreach($tripview as $key=> $tripview)
    <tr>
       <td>{{$key +1}}</td>
       <td>{{$tripview->date}}</td>
       <td>{{$tripview->user_reporting_time}}</td>
       <td>{{$tripview->departure}}</td>
       <td>{{$tripview->tripFromLocation->from}}</td>
       <td>{{$tripview->tripToLocation->to}}</td>
       <td>{{$tripview->tripBus->bus_type}}</td>
       <td>{{$tripview->price}}</td>

       <td><a href="{{route('seat')}}" class="btn btn-warning">View Your Seats</a></td>

       @endforeach
    </tr>
      </thead>

    </table>
  </div>

@endsection
