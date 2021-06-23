@extends('frontend.master')

@section('content')



<div class="container">
    <h3 class="pt-5 pb-3">Available Trips on this day </h3>

    <table class="table table-dark">
      <thead>
        <tr>
          <th>SL</th>
          <th>From</th>
          <th>To</th>
          <th>Date</th>
          <th>Reporting Time</th>
          <th>Coach Type</th>
          <th>Price</th>
          @if (auth()->check() && auth()->user()->role=='user')
          <th>Action</th>
          @endif

        </tr>
         @foreach($tripview as $key=> $tripview)
    <tr>
       <td>{{$key +1}}</td>
       <td>{{$tripview->tripFromLocation->location}}</td>
       <td>{{$tripview->tripToLocation->location}}</td>
       <td>{{$tripview->date}}</td>
       <td>{{$tripview->user_reporting_time}}</td>
       <td>{{$tripview->tripBus->bus_type}}</td>
       <td>{{$tripview->price}}</td>

       @if (auth()->check() && auth()->user()->role=='user')
       <td><a href="{{route('seat',['id'=>$tripview->id])}}" class="btn btn-warning">View Your Seats</a></td>
       @endif
       @endforeach
    </tr>
      </thead>

    </table>
  </div>

@endsection
