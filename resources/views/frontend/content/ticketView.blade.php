@extends('frontend.master')

@section('content')
<h1>Print your ticket from here!</h1>

<div id="printArea">
<div class="container">
    <div class="row">
      <div class="col my-5">
       <h4> My Trip Ticket</h4>
      </div>
    </div>


       @foreach ($booking as $key=>$data)
    <div class="row">
        <div class="col">
          Customer ID: {{$data->user_id}}
        </div>
        <div class="col">
            Customer Name: {{$data->userDetails->name}}
        </div>
        <div class="col">
          Customer Phone No:
        </div>
      </div>

      <div class="row">
        <div class="col">
          Journey Date: {{$data->date}}
        </div>
        <div class="col">
            Seat Number: {{implode(',',$data->seat_number)}}
        </div>
        <div class="col">
          Coach Type: {{$data->bus_type}}
        </div>
      </div>

      <div class="row">
        <div class="col">
          Paid Status: asdfghjk
        </div>
        <div class="col">
            Paid Amount: {{count($data->seat_number) * $data->price }}
        </div>
      </div>
    </div>
</div>
    @endforeach
      <a class="btn btn-warning" onclick="printDiv()"href="#">Print</a>



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
