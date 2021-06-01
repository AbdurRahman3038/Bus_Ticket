@extends('backend.master')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create A New Route
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create A Location</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>

        <form method="post" action={{route('location.create')}}>

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
      </div>
    </div>
  </div>

  <table class="table">
    <thead>
        <tr>
            <th scope="col">Location ID</th>
            <th scope="col">Location</th>
            <th scope="col">Location Description</th>
            <th scope="col">Action</th>
          </tr>
    </thead>
    <tbody>
        @foreach ($location as $key=> $data)

        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->location}}</td>
          <td>{{$data->description}}</td>
          <td>

              <a class="btn btn-warning" href="{{route('location.edit',$data->id)}}">Edit </a>

          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection



