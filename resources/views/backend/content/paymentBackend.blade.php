@extends('backend.master')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">Payment ID</th>
            <th scope="col">User Name</th>
            {{-- <th scope="col">Seat Numbers</th> --}}
            <th scope="col">Phone NO</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Transaction ID</th>
            <th scope="col">Amount</th>
            <th scope="col">Action</th>
          </tr>
    </thead>
    <tbody>
        @foreach ($payment as $key=> $data)
{{-- @dd($data->details) --}}
        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->userDetails->name}}</td>
          {{-- <td>{{implode(',',$data->details->seat_number)}}</td> --}}
          <td>{{$data->phone_number}}</td>
          <td>{{$data->payment_method}}</td>
          <td>{{$data->transaction_id}}</td>
          <td>{{$data->amount}}</td>
          <td>
              <a class="btn btn-success" href="{{route('paymentBackendConfirm', $data->id)}}">Confirm </a>
              <a class="btn btn-danger" href="{{route('paymentBackendCancel', $data->id)}}">Cancel </a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
