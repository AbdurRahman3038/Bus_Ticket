@push('css')

<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');

    .onoffswitch3
    {
        position: relative;
        -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
    }

    .onoffswitch3-checkbox {
        display: none;
    }

    .onoffswitch3-label {
        display: block; overflow: hidden; cursor: pointer;
        border: 0px solid #999999; border-radius: 0px;
    }

    .onoffswitch3-inner {
        display: block; width: 200%; margin-left: -100%;
        -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
        -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
    }

    .onoffswitch3-inner > span {
        display: block; float: left; position: relative; width: 50%; height: 30px; padding: 0; line-height: 30px;
        font-size: 14px; color: white; font-family: 'Montserrat', sans-serif; font-weight: bold;
        -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
    }

    .onoffswitch3-inner .onoffswitch3-active {
        padding-left: 10px;
        background-color: #EEEEEE; color: #FFFFFF;
    }

    .onoffswitch3-inner .onoffswitch3-inactive {
        width: 100px;
        padding-left: 16px;
        background-color: #EEEEEE; color: #FFFFFF;
        text-align: right;
    }

    .onoffswitch3-switch {
        display: block; width: 50%; margin: 0px; text-align: center;
        border: 0px solid #999999;border-radius: 0px;
        position: absolute; top: 0; bottom: 0;
    }
    .onoffswitch3-active .onoffswitch3-switch {
        background: #2e7c42; left: 0;
        width: 160px;
    }
    .onoffswitch3-inactive{
        background: #A1A1A1; right: 0;
        width: 20px;
    }
    .onoffswitch3-checkbox:checked + .onoffswitch3-label .onoffswitch3-inner {
        margin-left: 0;
    }

    .glyphicon-remove{
        padding: 3px 0px 0px 0px;
        color: #fff;
        background-color: #000;
        height: 25px;
        width: 25px;
        border-radius: 15px;
        border: 2px solid #fff;
    }

    .scroll-text{
        color: #000;
    }
      </style>
      @endpush

@extends('frontend.master')

@section('content')


<div class="onoffswitch3">
    <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
    <label class="onoffswitch3-label" for="myonoffswitch3">
        <span class="onoffswitch3-inner">
            <span class="onoffswitch3-active">
                <marquee class="scroll-text">We've increased 60% of our ticket price by government instrction *** Please maintain health instructions as stricktly as possible! *** <span class="glyphicon glyphicon-forward"></span> Maintain a minimum 6 feet distance from others! *** <span class="glyphicon glyphicon-forward"></span> Stay home, Stay safe ***</marquee>
                <span class="onoffswitch3-switch">NOTICE </span>
            </span>
            <span class="onoffswitch3-inactive"><span class="onoffswitch3-switch">SHOW BREAKING NEWS</span></span>
        </span>
    </label>
</div>
<br>
<br>
@if(session()->has('message'))
        <div class="alert alert-warning">
            {{ session()->get('message') }}
        </div>
@endif

<h1 class="pt-4">Search Your Trip</h1>
    <p class="lead">
      Please <a class="text-dark" href="{{route('login.registration.form')}}">Login</a>  or <a class="text-dark" href="{{route('login.registration.form')}}">Register</a> First
    </p>
<div class="row p-2" style="border: 2px solid rgb(8, 8, 8); width: ; ">

    <form method="post" action="{{route('tripview')}}">
        @csrf

        <div class="row">
            <div class="col">
                <label for="" class="mb-2">From</label>
                <select name="location_from_id" class="form-select" aria-label="Default select example">
                    <option selected>Select A Location</option>
                    @foreach ($locationFrom as $data)
                        <option value="{{ $data->id}}">{{ $data-> location}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="col">
                <label for="" class="mb-2">To</label>
                <select name="location_to_id" class="form-select" aria-label="Default select example">
                    <option selected>Select A Location</option>
                    @foreach ($locationFrom as $data)
                        <option value="{{ $data->id}}">{{ $data-> location}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="col">
                <label for="" class="mb-2">Journey Date</label>
                <input name="date" type="date" class="form-control" placeholder="Last name" aria-label="Last name">
              </div>

              {{-- <div class="col">
                <label for="" class="mb-2">Journey Date</label>
                <input name="date" type="date" class="form-control datepicker" autocomplete="off">
                <script type="text/javascript">
                    $ ('.datepicker').datepicker({
                        startDate:new Date()
                    });
                </script>
              </div> --}}

              <div class="col">
                <label for="" class="mb-2">Time Period</label>
                <select name="time_period" class="form-select" aria-label="Default select example">
                    <option selected>Select A Time Period</option>
                    @foreach ($tripInfo as $data)
                        <option value="{{ $data-> user_reporting_time}}">{{ $data-> user_reporting_time}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="col">
                <label for="" class="mb-2">Coach Type</label>
                <select name="bus_type" class="form-select" aria-label="Default select example">
                    <option selected>Select Bus Type</option>
                    @foreach ($busInfo as $data)
                        <option value="{{ $data-> bus_type}}">{{ $data-> bus_type}}</option>
                    @endforeach
                  </select>
            </div>
          </div>
        <button type="submit" class="btn btn-success m-2">Search</button>



      </form>


</div>

@endsection

{{-- <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>



    <div class="col-md-4">
        <form action="{{route('trip.search')}}" method="post">
            @csrf
        <input name="search" type="text" placeholder="Search" class="form-control">
        <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

</div>

@if(isset($search))
    <p>
    <span class="alert alert-success"> you are searching for '{{$search}}' , found ({{count($trip)}})</span>
    </p>
@endif --}}
