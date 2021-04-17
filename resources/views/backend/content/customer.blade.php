@extends('backend.master')
@section('content')
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New customer
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">customer Info</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="post" action={{route('customer.create')}}>

            @csrf

            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Customer name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Bus ID">

                </div>
                <div class="form-group">
                    <label for="exampleInputDescription">address</label>
                    <input name="address" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Bus Name">

                </div>

            </div>

        <div class="modal-footer">

          <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Serial</th>
        <th scope="col">name</th>
        <th scope="col">address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($customer as $key=> $data)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->address}}</td>
        <td>
            <a class="btn btn-success" href="">View </a>
            <a class="btn btn-warning" href="">Edit </a>
            <a class="btn btn-danger" href="">Delete </a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>



@endsection
