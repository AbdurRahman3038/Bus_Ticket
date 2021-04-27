@extends('frontend.master')

@section('content')

<div class="container">
    <h1>Booking Details</h1>

    <table class="table table-dark">
      <thead>
        <tr>
      <th>SL</th>
      <th>Booking ID</th>
      <th>Seat Number</th>
      <th>Price</th>
      <th>Journey Date</th>
      <th>Trip ID</th>
      <th class="text-center">Action</th>
        </tr>

   {{-- @foreach ($bookingdata as $key=>$data)

      <tr>
          <td>{{$key + 1}}</td>
          <td>{{$data->id}}</td>
          <td>{{$data->seat_number}}</td>
          <td>{{$data->price}}</td>
          <td>{{$data->journey_date}}</td>
          <td>{{$data->trip_id}}</td>
          <td class="text-center">


       <a href="{{route('payment',$data->id )}}" class="btn btn-success">Payment</a>

      </tr>

      @endforeach --}}



      </thead>

    </table>
  </div>

  @endsection
