@extends('backend.master')
@section('content')



<table class="table">
    <thead>
      <tr>
        <th scope="col">Serial</th>
        <th scope="col">Customer ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        {{-- <th scope="col">Phone</th> --}}
        <th scope="col">Journey Date</th>
        <th scope="col">Seat Numbers</th>
        <th scope="col">Coach Type</th>
        <th scope="col">Amount</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($customer as $key=> $data)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->user_id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->date}}</td>
        <td>{{$data->seat_number}}</td>
        <td>{{$data->coach_type}}</td>
        <td>{{ count((array)$data->seat_number) * $data->price }}</td>

      </tr>
      @endforeach

    </tbody>
  </table>



@endsection
