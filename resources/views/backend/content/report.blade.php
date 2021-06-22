
@extends('backend.master')
@section('content')

<div class="row mt-4">
    <div class="col-md-12 col-sm-12">
        <form action="{{route('report')}}" method="GET">
            <div class="row">

                <div class="col-md-4">
                    <label for="from_date">From Date</label>
                    <input type="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}"  name="from_date" class="form-control" value="{{date('Y-m-d')}}">
                </div>
                <div class="col-md-4">
                    <label for="from_date ">To Date</label>
                    <input type="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}"  name="to_date" class="form-control" value="{{date('Y-m-d')}}">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary position-right">Search</button>
                    <a class="btn btn-warning" onclick="printDiv()"href="#">Print</a>

                </div>
            </div>
        </form>
    </div>
 </div>

<br>

<div id="printArea">

    <label for="from_date ">{{$fromDate}}</label>
    <label for="to_date ">{{$toDate}}</label>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Serial</th>
        <th scope="col">Booking ID</th>
        <th scope="col">Custmer Name</th>
        <th scope="col">Custmer Email</th>
        {{-- <th scope="col">Phone</th> --}}
        <th scope="col">Journey Date</th>
        <th scope="col">Seat Numbers</th>
        <th scope="col">Coach Type</th>
        <th scope="col">Amount</th>

      </tr>
    </thead>
    <tbody>
        {{-- @dd($bookings); --}}

        @if($bookings->count() > 0)
        @foreach ($bookings as $key=> $data)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->id}}</td>
        <td>{{$data->userDetails->name}}</td>
        <td>{{$data->userDetails->email}}</td>
        <td>{{$data->date}}</td>
        <td>{{implode(',',$data->seat_number)}}</td>
        <td>{{$data->bus_type}}</td>
        <td>{{count($data->seat_number) * $data->price }}</td>
        {{-- <td>{{$data->address}}</td> --}}

      </tr>
      @endforeach

      @else
      <td colspan="8" class="text-center">
          <h4>No Data Found!</h4>
      </td>

      @endif

    </tbody>
  </table>
</div>

  <script type="text/javascript">
    function printDiv() {
        var printContents = document.getElementById("printArea").innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>

@endsection
