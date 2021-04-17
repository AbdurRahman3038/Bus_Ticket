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
          <h5 class="modal-title" id="exampleModalLabel">Create A New Route</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>

        <form method="post" action={{route('route.create')}}>

            @csrf

            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">New Location</label>
                    <input name="from" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter New Location">

                </div>
                <div class="form-group">
                    <label for="exampleInputDescription">New Destination</label>
                    <input name="to" type="text" class="form-control" id="exampleInputDescription" placeholder="Enter New Destination">

                </div>

            </div>



        {{-- <div class="modal-body">
            <div class="dropdown">
                <label for="exampleInputDescription">From</label>
                <br>
                <select class="custom-select mr-sm-2" name="from" id="inlineFormCustomSelect">
                    <option selected>Choose a city</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Faridpur">Faridpur</option>
                  </select>
              </div>

              <div class="dropdown">
                <label for="exampleInputDescription">To</label>
                <br>
                <select class="custom-select mr-sm-2" name="to" id="inlineFormCustomSelect">
                    <option selected>Choose a city</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Faridpur">Faridpur</option>
                  </select>
              </div>

            <div class="form-group">
                <label for="exampleInputDescription">Journey Date</label>
                <input name="date" type="date" class="form-control" id="exampleInputDescription" placeholder="Enter description">

            </div>

            <div class="dropdown">
                <label for="exampleInputDescription">Time Period</label>
                <br>
                <select class="custom-select mr-sm-2" name="time_period" id="inlineFormCustomSelect">
                    <option selected>Choose Time Period</option>
                    <option value="Morning (05:00 AM-11:59 AM)">Morning (05:00 AM-11:59 AM)</option>
                    <option value="Afternoon (12:00 PM-05:59 PM)">Afternoon (12:00 PM-05:59 PM)</option>
                    <option value="Night (06:00 PM-11:59 PM)">Night (06:00 PM-11:59 PM)</option>
                  </select>
              </div>
              <div class="dropdown">
                <label for="exampleInputDescription">Coach Type</label>
                <br>
                <select class="custom-select mr-sm-2" name="coach_type" id="inlineFormCustomSelect">
                    <option selected>Choose Coach Type</option>
                    <option value="AC">AC</option>
                    <option value="Non AC">Non AC</option>
                  </select>
              </div>


        </div> --}}


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
            <th scope="col">From</th>
            <th scope="col">Destination</th>
            {{-- <th scope="col">Journey Date</th>
            <th scope="col">Time Period</th>
            <th scope="col">Coach Type</th> --}}
            <th scope="col">Action</th>
          </tr>
    </thead>
    <tbody>
        @foreach ($route as $key=> $data)

        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->from}}</td>
          <td>{{$data->to}}</td>
          {{-- <td>{{$data->date}}</td>
          <td>{{$data->time_period}}</td>
          <td>{{$data->coach_type}}</td> --}}
          <td>
              {{-- <a class="btn btn-success" href="">View </a> --}}
              <a class="btn btn-warning" href="">Edit </a>
              <a class="btn btn-danger" href="">Delete </a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
