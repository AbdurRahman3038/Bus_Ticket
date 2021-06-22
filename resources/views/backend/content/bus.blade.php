@extends('backend.master')

@section('content')




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Bus
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bus Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <form method="post" action={{route('bus.create')}}>

            @csrf
        <div class="modal-body">

            <div class="form-group">
                <label for="exampleInputDescription">Bus Number</label>
                <input required name="bus_number" type="string" class="form-control" id="exampleInputDescription" placeholder="Add Bus Number">

            </div>
            <div class="dropdown">
                <label for="exampleInputDescription">Bus Type</label>
                <br>
                <select required class="custom-select mr-sm-2" name="bus_type" id="inlineFormCustomSelect">
                    <option selected>Choose Bus Type</option>
                    <option value="AC">AC</option>
                    <option value="Non AC">Non AC</option>
                  </select>
              </div>

              <div class="dropdown">
                <label for="exampleInputDescription">Seat Capacity</label>
                <br>
                <select class="custom-select mr-sm-2" name="seat_capacity" id="inlineFormCustomSelect">
                    <option selected>Choose Seat Capacity</option>
                    <option value="40">40</option>
                  </select>
              </div>

            <div class="dropdown">
                <label for="exampleInputDescription">Route Type</label>
                <br>
                <select class="custom-select mr-sm-2" name="route_type" id="inlineFormCustomSelect">
                    <option selected>Choose Route Type</option>
                    <option value="Long Route">Long Route</option>
                    <option value="Short Route">Short Route</option>
                  </select>
              </div>

              <div class="form-group">
                <label for="exampleInputDescription">Driver Name</label>
                <input required name="driver_name" type="string" class="form-control" id="exampleInputDescription" placeholder="Add Driver Name">

            </div>

            <div class="form-group">
                <label for="exampleInputDescription">Supervisor Name</label>
                <input required name="supervisor_name" type="string" class="form-control" id="exampleInputDescription" placeholder="Add Supervisor Name">

            </div>


        </div>


        <div class="modal-footer">

          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>

      </div>
    </div>
  </div>




<table class="table">
    <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Bus Number</th>
            <th scope="col">Bus Type</th>
            <th scope="col">Seat Capacity</th>
            <th scope="col">Route Type</th>
            <th scope="col">Driver Name</th>
            <th scope="col">Supervisor Name</th>
            <th scope="col">Action</th>
          </tr>
    </thead>
    <tbody>
        @foreach ($bus as $key=> $data)

        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->bus_number}}</td>
          <td>{{$data->bus_type}}</td>
          <td>{{$data->seat_capacity}}</td>
          <td>{{$data->route_type}}</td>
          <td>{{$data->driver_name}}</td>
          <td>{{$data->supervisor_name}}</td>
          <td>
              {{-- <a class="btn btn-success" href="">View </a> --}}
             
              <a class="btn btn-warning" href="{{route('bus.edit',$data->id)}}">Edit </a>
              <a class="btn btn-danger" href="{{route('bus.delete',$data->id)}}">Delete </a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>




@endsection
