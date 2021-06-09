@extends('backend.master')

@section('content')

<div class="container">
    <h1>Booking Details</h1>

    <table class="table">
      <thead>
        <tr>
      <th>SL</th>
      <th>Booking ID</th>
      <th>Trip ID</th>
      <th>Seat Number</th>
      <th>Price</th>
      <th class="text-center">Action</th>
        </tr>
        @foreach ($bookingdetails as $key=>$data)

        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->trip_id}}</td>
            <td>{{implode(',',$data->seat_number)}}</td>
            <td>{{$data->price}}</td>

            <td class="text-center">
            <a href={{route('bookingDetails')}} class="btn btn-danger">Cancel</a>
        </tr>

        @endforeach
      </thead>
    </table>
  </div>


  @endsection
