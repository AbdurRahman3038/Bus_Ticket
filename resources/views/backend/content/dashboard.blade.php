@extends('backend.master')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-md-3 ">
            <div class="card bg-success text-white shadow" style="width: 15rem;height:10rem;">
                <div class="card-body">
                    <h5> <small>Total User</small></h5>
                    <h1>{{$users}}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card bg-warning text-white shadow" style="width: 15rem; height:10rem">
                <div class="card-body">
                    <h5> <small>Total Booking </small> </h5>
                    <h1>{{$bookings}}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card bg-primary text-white shadow" style="width: 15rem;height:10rem;">
                <div class="card-body">
                    <h5> <small>Total Sell (BDT)</small> </h5>
                   <h1>{{$sell}} </h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card bg-secondary text-white shadow" style="width: 15rem;height:10rem;">
                <div class="card-body">
                    <h5> <small>Total Active Bus</small> </h5>
                    <h1>{{$buses}}</h1>
                </div>
            </div>
        </div>
    </div>


@endsection
