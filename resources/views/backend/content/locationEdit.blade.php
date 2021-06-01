@extends('backend.master')

@section('content')

<form method="post" action={{route('location.update',$location->id)}}>

    @csrf

    <div class="modal-body">
        <div class="form-group">
            <label for="exampleInputEmail1">New Location</label>
            <input name="location" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter New Location">

        </div>
        <div class="form-group">
            <label for="exampleInputDescription">Location Description</label>
            <input name="description" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Location Description">

        </div>

    </div>


<div class="modal-footer">

  <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>

@endsection
