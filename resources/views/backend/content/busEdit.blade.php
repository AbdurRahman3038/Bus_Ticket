@extends('backend.master')

@section('content')

<form method="post" action={{route('bus.update',$bus->id)}}>

    @csrf

    <div class="modal-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Bus Number</label>
            <input name="bus_number" type="text" class="form-control" id="exampleInputEmail1" value={{$bus->bus_number}}>

        </div>
        <div class="form-group">
            <label for="exampleInputDescription">Bus Type</label>
            <input name="bus_type" type="text" class="form-control" id="exampleInputDescription" value={{$bus->bus_type}}>

        </div>
        <div class="form-group">
            <label for="exampleInputDescription">Seat Capacity</label>
            <input name="seat_capacity" type="text" class="form-control" id="exampleInputDescription" value={{$bus->seat_capacity}}>

        </div>
          <div class="form-group">
            <label for="exampleInputDescription">Route Type</label>
            <input name="route_type" type="text" class="form-control" id="exampleInputDescription" value={{$bus->route_type}}>

        </div>
          <div class="form-group">
            <label for="exampleInputDescription">Driver Name</label>
            <input name="driver_name" type="text" class="form-control" id="exampleInputDescription" value={{$bus->driver_name}}>

        </div>
        <div class="form-group">
            <label for="exampleInputDescription">Supervisor Name</label>
            <input name="supervisor_name" type="text" class="form-control" id="exampleInputDescription" value={{$bus->supervisor_name}}>

        </div>

    </div>


<div class="modal-footer">

  <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>

@endsection
