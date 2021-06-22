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
        {{-- @dd($bookingdetails) --}}
        

        <tr>
          
            <td>{{$bookingdetails->id}}</td>
            <td>{{$bookingdetails->trip_id}}</td>
            <td>{{implode(',',$bookingdetails->seat_number)}}</td>
            <td>{{$bookingdetails->price}}</td>

            <td class="text-center">
            <a href={{route('bookingDetails',$bookingdetails->id)}} class="btn btn-danger">Cancel</a>
        </tr>

        
      </thead>
    </table>
  </div>


  @endsection
