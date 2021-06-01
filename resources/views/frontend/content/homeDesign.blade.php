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
        background: #27A1CA; left: 0;
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
                    <marquee class="scroll-text">Avengers: Infinity War's Iron Spider Suit May Use Bleeding Edge Tech  <span class="glyphicon glyphicon-forward"></span> Russo brothers ask for fans not to spoil Avengers: Infinity War <span class="glyphicon glyphicon-forward"></span>  Bucky's Arm Miraculously Regenerates On Avengers: Infinity War Poster</marquee>
                    <span class="onoffswitch3-switch">NOTICE <span class="glyphicon glyphicon-remove"></span></span>
                </span>
                <span class="onoffswitch3-inactive"><span class="onoffswitch3-switch">SHOW BREAKING NEWS</span></span>
            </span>
        </label>
    </div>

    <div style="height: 700px; width: 1000px; margin-left:auto; margin-right:auto; margin-top: 20px;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img style="height: 500px;" src="https://blog.railyatri.in/wp-content/uploads/2019/05/IntrCityBus1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img  style="height: 500px;" src="https://i1.wp.com/awaradiaries.com/wp-content/uploads/2020/01/InterCity-New-Zealands-Best-Transportation-System.jpg?fit=1500%2C1000&ssl=1" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img style="height: 500px;" src="http://www.adaminflight.com/wp-content/uploads/2016/04/DSC04431.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>




<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

@endsection
