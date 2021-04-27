@extends('backend.master')

@section('content')

<table style="width:100%">

    <tr>
    <th>SL</th>
      <th>Name</th>
      <th>Email</th>
      {{-- <th>Phone</th> --}}
      <th>Role</th>
      <th class="text-center">Action</th>
    </tr>

    @foreach($users as $key=> $data)
    <tr>
       <td>{{$key +1}}</td>
       <td>{{$data->name}}</td>
       <td>{{$data->email}}</td>
       {{-- <td>{{$userview->phone}}</td> --}}
       <td>{{$data->role}}</td>
       <td class="text-center">

       <a class="btn btn-danger" href="">Delete</a>


       </td>

       </tr>

    @endforeach






  </table>
  @endsection
