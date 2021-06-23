@extends('backend.master')

@section('content')

<div class="container">

    <table class="table">
      <thead>
        <tr>
      <th>SL</th>
      <th>User ID</th>
      <th>Total Price</th>
      <th>Journey Date</th>
      <th>Trip ID</th>
      <th class="text-center">Action</th>
        </tr>

        @foreach ($booking as $key=>$data)

      <tr>
          <td>{{$key + 1}}</td>
          <td>{{$data->user_id}}</td>
          <td>{{ count((array)$data->seat_number) * $data->price }}</td>
          <td>{{$data->date}}</td>
          <td>{{$data->trip_id}}</td>
          <td class="text-center">
          <a href={{route('bookingDetails', $data->id)}} class="btn btn-success">Deteails</a>
      </tr>

      @endforeach

      </thead>

    </table>
  </div>
 @endsection
