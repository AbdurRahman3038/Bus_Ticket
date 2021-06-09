@extends('backend.master')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Trip Info
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Trip Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <form method="post" action={{route('trip.create')}}>

            @csrf
        <div class="modal-body">

            <div class="form-group">
                <label for="exampleInputDescription">From</label>
                <select name="location_from_id" id="" type="text" class="form-control">
                    @foreach ($locations as $item)

                    <option value="{{$item->id}}"> {{$item->location}} </option>

                    @endforeach

                </select>

            </div>
            <div class="form-group">
                <label for="exampleInputDescription">To</label>
                <select name="location_to_id" id="" type="text" class="form-control">
                    @foreach ($locations as $item)

                    <option value="{{$item->id}}"> {{$item->location}} </option>

                    @endforeach

                </select>

            </div>
            <div class="form-group">
                <label for="exampleInputDescription">Route Name</label>
                <input name="route_name" type="string" class="form-control" id="exampleInputDescription" placeholder="Add Route Name">

            </div>
            <div class="form-group">
                <label for="exampleInputDescription">Bus Type</label>
                <select name="bus_id" id="" type="text" class="form-control">
                    @foreach ($buses as $item)

                    <option value="{{$item->id}}"> {{$item->bus_type}} </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="exampleInputDescription">Journey Date</label>
                <input type="date" name="date"  class="form-control" id="exampleInputDescription" placeholder="Select Journey date">

            </div>
            <div class="form-group">
                <label for="exampleInputDescription">User Reporting Time</label>
                <input name="user_reporting_time" type="string" class="form-control" id="exampleInputDescription" placeholder="Add User Reporting Time">

            </div>
            <div class="form-group">
                <label for="exampleInputDescription">Departure Time</label>
                <input name="departure_time" type="string" class="form-control" id="exampleInputDescription" placeholder="Add Departure Time">

            </div>
            <div class="form-group">
                <label for="exampleInputDescription">Price</label>
                <input name="price" type="string" class="form-control" id="exampleInputDescription" placeholder="Add Ticket Price">

            </div>


        </div>


        <div class="modal-footer">

          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>

      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>



    <div class="col-md-4">
        <form action="{{route('trip.search')}}" method="post">
            @csrf
        <input name="search" type="text" placeholder="Search" class="form-control">
        <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

</div>

@if(isset($search))
    <p>
    <span class="alert alert-success"> you are searching for '{{$search}}' , found ({{count($trip)}})</span>
    </p>
@endif


<table class="table">
    <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Route Name</th>
            <th scope="col">Bus Type</th>
            <th scope="col">Journey Date</th>
            <th scope="col">Reporting Time</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
    </thead>
    <tbody>
        @foreach ($trip as $key=> $data)

        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->tripFromLocation->location}}</td>
          <td>{{$data->tripToLocation->location}}</td>
          <td>{{$data->route_name}}</td>
          <td>{{$data->tripBus->bus_type}}</td>
          <td>{{$data->date}}</td>
          <td>{{$data->user_reporting_time}}</td>
          <td>{{$data->departure_time}}</td>
          <td>{{$data->price}}</td>

          <td>
              <a class="btn btn-warning" href="">Edit </a>
              <a class="btn btn-danger" href="">Delete </a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
