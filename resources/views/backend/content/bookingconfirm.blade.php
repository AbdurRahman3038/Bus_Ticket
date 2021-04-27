<div class="container">

    <h1>Booking Table</h1>

    <table class="table table-dark">
      <thead>
        <tr>
      <th>SL</th>
      <th>User ID</th>
      <th>Price</th>
      <th>Journey Date</th>
      <th>Trip ID</th>
      <th class="text-center">Action</th>
        </tr>
            @foreach ($bookings as $key=>$booking)

      <tr>
          <td>{{$key + 1}}</td>
          <td>{{$booking->user_id}}</td>
          <td>{{$booking->price}}</td>
          <td>{{$booking->date}}</td>
          <td>{{$booking->trip_id}}</td>
          <td class="text-center">
          <a href="" class="btn btn-success">Go Deteails</a>
      </tr>

      @endforeach

      </thead>

    </table>
  </div>
