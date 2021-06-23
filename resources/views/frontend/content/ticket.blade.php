@extends('frontend.master')

@section('content')


<h3 class="pt-4 pb-2">Your available ticket reservation is here!</h3>

<table class="table">
    <thead>
      <tr>
    <th>Booking ID</th>
    <th>User ID</th>
    <th>User Name</th>
    <th>Seat Number</th>
    <th>Price</th>
    <th>Journey Date</th>
    {{-- <th>Trip ID</th> --}}
    <th class="text-center">Action</th>

      </tr>

 @foreach ($booking as $key=>$data)


 <tr>
        <td>{{$key + 1}}</td>
        <td>{{$data->user_id}}</td>
        <td>{{$data->userDetails->name}}</td>
        <td>{{implode(',',$data->seat_number)}}</td>
        <td>{{count($data->seat_number) * $data->price }}</td>
        <td>{{$data->date}}</td>
        {{-- <td>{{$data->trip_id}}</td> --}}
        <td class="text-center">

@if($data->status == "Confirm")
     <a href="{{route('ticketView', $data->id)}}" class="btn btn-success">View Ticket</a>

     @else
     <a href="{{route('ticketCancel', $data->id)}}" class="btn btn-danger">Cancel Ticket</a>

     @endif


    </tr>

    @endforeach



    </thead>

  </table>






@endsection
