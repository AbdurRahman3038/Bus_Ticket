@extends('backend.master')

@section('content')

<form method="post" action={{route('trip.update',$trip->id)}}>

    @csrf
<div class="modal-body">
{{-- @dd($locations) --}}
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
        <input required name="route_name" type="string" class="form-control" id="exampleInputDescription" placeholder="Add Route Name">

    </div>
    <div class="form-group">
        <label for="exampleInputDescription">Bus Type</label>
        <select name="bus_id" id="" type="text" class="form-control">
            @foreach ($bus as $item)

            <option value="{{$item->id}}"> {{$item->bus_type}} </option>

            @endforeach

        </select>

    </div>

    <div class="form-group">
        <label for="exampleInputDescription">Journey Date</label>
        <input required type="date" name="date" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}"   class="form-control" id="exampleInputDescription" placeholder="Select Journey date">

    </div>
    <div class="form-group">
        <label for="exampleInputDescription">User Reporting Time</label>
        <input required name="user_reporting_time" type="string" class="form-control" id="exampleInputDescription" placeholder="Add User Reporting Time">

    </div>
    <div class="form-group">
        <label for="exampleInputDescription">Departure Time</label>
        <input required name="departure_time" type="string" class="form-control" id="exampleInputDescription" placeholder="Add Departure Time">

    </div>
    <div class="form-group">
        <label for="exampleInputDescription">Price</label>
        <input required name="price" type="string" class="form-control" id="exampleInputDescription" placeholder="Add Ticket Price">

    </div>


</div>


<div class="modal-footer">

  <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>

@endsection
