
@push('css')


<style>

*, *:before, *:after {
	 box-sizing: border-box;
}
 html {
	 font-size: 16px;
}
 .plane {
	 margin: 20px auto;
	 max-width: 300px;
}
 .cockpit {
	 height: 250px;
	 position: relative;
	 overflow: hidden;
	 text-align: center;
	 border-bottom: 5px solid #d8d8d8;
}
 .cockpit:before {
	 content: "";
	 display: block;
	 position: absolute;
	 top: 0;
	 left: 0;
	 height: 500px;
	 width: 100%;
	 border-radius: 50%;
	 border-right: 5px solid #d8d8d8;
	 border-left: 5px solid #d8d8d8;
}
 .cockpit h1 {
	 width: 60%;
	 margin: 100px auto 35px auto;
}
 .exit {
	 position: relative;
	 height: 50px;
}
 .exit:before, .exit:after {
	 content: "EXIT";
	 font-size: 14px;
	 line-height: 18px;
	 padding: 0px 2px;
	 font-family: "Arial Narrow", Arial, sans-serif;
	 display: block;
	 position: absolute;
	 background: green;
	 color: white;
	 top: 50%;
	 transform: translate(0, -50%);
}
 .exit:before {
	 left: 0;
}
 .exit:after {
	 right: 0;
}
 .fuselage {
	 border-right: 5px solid #d8d8d8;
	 border-left: 5px solid #d8d8d8;
}
 ol {
	 list-style: none;
	 padding: 0;
	 margin: 0;
}
 .seats {
	 display: flex;
	 flex-direction: row;
	 flex-wrap: nowrap;
     align-content: space-around;
    justify-content: space-around;
}
 .seat {
	 display: flex;
	 flex: 0 0 14.2857142857%;
	 padding: 5px;
	 position: relative;
}
 .seat:nth-child(3) {
	 margin-right: 14.2857142857%;
}
 .seat input[type=checkbox] {
	 position: absolute;
	 opacity: 0;
}
 .seat input[type=checkbox]:checked + label {
	 background: #bada55;
	 -webkit-animation-name: rubberBand;
	 animation-name: rubberBand;
	 animation-duration: 300ms;
	 animation-fill-mode: both;
}
 .seat input[type=checkbox]:disabled + label {
	 background: #ddd;
	 text-indent: -9999px;
	 overflow: hidden;
}
 .seat input[type=checkbox]:disabled + label:after {
	 content: "X";
	 text-indent: 0;
	 position: absolute;
	 top: 4px;
	 left: 50%;
	 transform: translate(-50%, 0%);
}
 .seat input[type=checkbox]:disabled + label:hover {
	 box-shadow: none;
	 cursor: not-allowed;
}
 .seat label {
	 display: block;
	 position: relative;
	 width: 100%;
	 text-align: center;
	 font-size: 14px;
	 font-weight: bold;
	 line-height: 1.5rem;
	 padding: 4px 0;
	 background: #f42536;
	 border-radius: 5px;
	 animation-duration: 300ms;
	 animation-fill-mode: both;
}
 .seat label:before {
	 content: "";
	 position: absolute;
	 width: 75%;
	 height: 75%;
	 top: 1px;
	 left: 50%;
	 transform: translate(-50%, 0%);
	 background: rgba(255, 255, 255, .4);
	 border-radius: 3px;
}
 .seat label:hover {
	 cursor: pointer;
	 box-shadow: 0 0 0px 2px #5c6aff;
}
 @-webkit-keyframes rubberBand {
	 0% {
		 -webkit-transform: scale3d(1, 1, 1);
		 transform: scale3d(1, 1, 1);
	}
	 30% {
		 -webkit-transform: scale3d(1.25, 0.75, 1);
		 transform: scale3d(1.25, 0.75, 1);
	}
	 40% {
		 -webkit-transform: scale3d(0.75, 1.25, 1);
		 transform: scale3d(0.75, 1.25, 1);
	}
	 50% {
		 -webkit-transform: scale3d(1.15, 0.85, 1);
		 transform: scale3d(1.15, 0.85, 1);
	}
	 65% {
		 -webkit-transform: scale3d(0.95, 1.05, 1);
		 transform: scale3d(0.95, 1.05, 1);
	}
	 75% {
		 -webkit-transform: scale3d(1.05, 0.95, 1);
		 transform: scale3d(1.05, 0.95, 1);
	}
	 100% {
		 -webkit-transform: scale3d(1, 1, 1);
		 transform: scale3d(1, 1, 1);
	}
}
 @keyframes rubberBand {
	 0% {
		 -webkit-transform: scale3d(1, 1, 1);
		 transform: scale3d(1, 1, 1);
	}
	 30% {
		 -webkit-transform: scale3d(1.25, 0.75, 1);
		 transform: scale3d(1.25, 0.75, 1);
	}
	 40% {
		 -webkit-transform: scale3d(0.75, 1.25, 1);
		 transform: scale3d(0.75, 1.25, 1);
	}
	 50% {
		 -webkit-transform: scale3d(1.15, 0.85, 1);
		 transform: scale3d(1.15, 0.85, 1);
	}
	 65% {
		 -webkit-transform: scale3d(0.95, 1.05, 1);
		 transform: scale3d(0.95, 1.05, 1);
	}
	 75% {
		 -webkit-transform: scale3d(1.05, 0.95, 1);
		 transform: scale3d(1.05, 0.95, 1);
	}
	 100% {
		 -webkit-transform: scale3d(1, 1, 1);
		 transform: scale3d(1, 1, 1);
	}
}
 .rubberBand {
	 -webkit-animation-name: rubberBand;
	 animation-name: rubberBand;
}

</style>
@endpush

@extends('frontend.master')

@section('content')

@if(session()->has('error'))
<div class="alert alert-danger mt-4 container w-25">
{{session()->get('error')}}
</div>
@endif

<div class="plane">
    <div class="cockpit">
      <h1>Please select a seat</h1>
    </div>

    <form method="post" action="{{route('seat.create')}}">

        <input type="hidden" name="trip_id" value="{{request('id')}}">

        @csrf

    <div class="enter exit -front">
    </div>
    <ol class="cabin fuselage">
      <li class="row row--1">
        <ol class="seats" type="A">

            @if(count($seatArray) != 0 && $seatArray[array_search('A1',$seatArray)] == 'A1')
            <li class="seat">
                <input  checked disabled type="checkbox" id="A1" value="A1" />
                <label for="A1">A1</label>
            </li>
            @else
            <li class="seat">
                <input name="seat[]"  type="checkbox" id="A1" value="A1" />
                <label for="A1">A1</label>
            </li>
          @endif


          @if(count($seatArray) != 0 &&   $seatArray[array_search('A2',$seatArray)] == 'A2')
          <li class="seat">
            <input checked disabled type="checkbox" id="A2" value="A2" />
            <label for="A2">A2</label>
          </li>
          @else
          <li class="seat">
            <input name="seat[]" type="checkbox" id="A2" value="A2" />
            <label for="A2">A2</label>
          </li>
          @endif


          @if(count($seatArray) != 0 &&   $seatArray[array_search('A3',$seatArray)] == 'A3')
          <li class="seat">
            <input disabled checked type="checkbox" id="A3" value="A3" />
            <label for="A3">A3</label>
          </li>
          @else
          <li class="seat">
            <input name="seat[]" type="checkbox" id="A3" value="A3" />
            <label for="A3">A3</label>
          </li>
          @endif


          @if(count($seatArray) != 0 &&   $seatArray[array_search('A4',$seatArray)] == 'A4')
          <li class="seat">
            <input disabled checked type="checkbox" id="A4" value="A4" />
            <label for="A4">A4</label>
          </li>
          @else
          <li class="seat">
            <input name="seat[]" type="checkbox" id="A4" value="A4" />
            <label for="A4">A4</label>
          </li>
          @endif

        </ol>
      </li>


      <li class="row row--2">
      <ol class="seats" type="B">

        @if(count($seatArray) != 0 &&   $seatArray[array_search('B1',$seatArray)] == 'B1')
          <li class="seat">
            <input disabled checked type="checkbox" id="B1" value="B1" />
            <label for="B1">B1</label>
          </li>
          @else
          <li class="seat">
            <input name="seat[]" type="checkbox" id="B1" value="B1" />
            <label for="B1">B1</label>
          </li>
          @endif


          @if(count($seatArray) != 0 &&   $seatArray[array_search('B2',$seatArray)] == 'B2')
          <li class="seat">
            <input disabled checked type="checkbox" id="B2" value="B2" />
            <label for="B2">B2</label>
          </li>
          @else
          <li class="seat">
            <input name="seat[]" type="checkbox" id="B2" value="B2" />
            <label for="B2">B2</label>
          </li>
          @endif

          @if(count($seatArray) != 0 &&   $seatArray[array_search('B3',$seatArray)] == 'B3')
          <li class="seat">
            <input disabled checked type="checkbox" id="B3" value="B3" />
            <label for="B3">B3</label>
          </li>
          @else
          <li class="seat">
            <input name="seat[]" type="checkbox" id="B3" value="B3" />
            <label for="B3">B3</label>
          </li>
          @endif


          @if(count($seatArray) != 0 &&   $seatArray[array_search('B4',$seatArray)] == 'B4')
          <li class="seat">
            <input disabled checked type="checkbox" id="B4" value="B4" />
            <label for="B4">B4</label>
          </li>
          @else
          <li class="seat">
            <input name="seat[]" type="checkbox" id="B4" value="B4" />
            <label for="B4">B4</label>
          </li>
          @endif

      </ol>
      </li>

      <li class="row row--3">
        <ol class="seats" type="C">

            @if(count($seatArray) != 0 &&   $seatArray[array_search('C1',$seatArray)] == 'C1')
            <li class="seat">
              <input disabled checked type="checkbox" id="C1" value="C1" />
              <label for="C1">C1</label>
            </li>
            @else
            <li class="seat">
              <input name="seat[]" type="checkbox" id="C1" value="C1" />
              <label for="C1">C1</label>
            </li>
            @endif


            @if(count($seatArray) != 0 &&   $seatArray[array_search('C2',$seatArray)] == 'C2')
            <li class="seat">
              <input disabled checked type="checkbox" id="C2" value="C2" />
              <label for="C2">C2</label>
            </li>
            @else
            <li class="seat">
              <input name="seat[]" type="checkbox" id="C2" value="C2" />
              <label for="C2">C2</label>
            </li>
            @endif


            @if(count($seatArray) != 0 &&   $seatArray[array_search('C3',$seatArray)] == 'C3')
            <li class="seat">
              <input disabled checked type="checkbox" id="C3" value="C3" />
              <label for="C3">C3</label>
            </li>
            @else
            <li class="seat">
              <input name="seat[]" type="checkbox" id="C3" value="C3" />
              <label for="C3">C3</label>
            </li>
            @endif


            @if(count($seatArray) != 0 &&   $seatArray[array_search('C4',$seatArray)] == 'C4')
            <li class="seat">
              <input disabled checked type="checkbox" id="C4" value="C4" />
              <label for="C4">C4</label>
            </li>
            @else
            <li class="seat">
              <input name="seat[]" type="checkbox" id="C4" value="C4" />
              <label for="C4">C4</label>
            </li>
            @endif

        </ol>
        </li>

        <li class="row row--2">
            <ol class="seats" type="D">

                @if(count($seatArray) != 0 &&   $seatArray[array_search('D1',$seatArray)] == 'D1')
                <li class="seat">
                  <input disabled checked type="checkbox" id="D1" value="D1" />
                  <label for="D1">D1</label>
                </li>
                @else
                <li class="seat">
                  <input name="seat[]" type="checkbox" id="D1" value="D1" />
                  <label for="D1">D1</label>
                </li>
                @endif


                @if(count($seatArray) != 0 &&   $seatArray[array_search('D2',$seatArray)] == 'D2')
                <li class="seat">
                  <input disabled checked type="checkbox" id="D2" value="D2" />
                  <label for="D2">D2</label>
                </li>
                @else
                <li class="seat">
                  <input name="seat[]" type="checkbox" id="D2" value="D2" />
                  <label for="D2">D2</label>
                </li>
                @endif


                @if(count($seatArray) != 0 &&   $seatArray[array_search('D3',$seatArray)] == 'D3')
                <li class="seat">
                  <input disabled checked type="checkbox" id="D3" value="D3" />
                  <label for="D3">D3</label>
                </li>
                @else
                <li class="seat">
                  <input name="seat[]" type="checkbox" id="D3" value="D3" />
                  <label for="D3">D3</label>
                </li>
                @endif


                @if(count($seatArray) != 0 &&   $seatArray[array_search('D4',$seatArray)] == 'D4')
                <li class="seat">
                  <input disabled checked type="checkbox" id="D4" value="D4" />
                  <label for="D4">D4</label>
                </li>
                @else
                <li class="seat">
                  <input name="seat[]" type="checkbox" id="D4" value="D4" />
                  <label for="D4">D4</label>
                </li>
                @endif


            </ol>
        </li>

            <li class="row row--2">
                <ol class="seats" type="E">



                @if(count($seatArray) != 0 &&   $seatArray[array_search('E1',$seatArray)] == 'E1')
                <li class="seat">
                  <input disabled checked type="checkbox" id="E1" value="E1" />
                  <label for="E1">E1</label>
                </li>
                @else
                <li class="seat">
                  <input name="seat[]" type="checkbox" id="E1" value="E1" />
                  <label for="E1">E1</label>
                </li>
                @endif



                @if(count($seatArray) != 0 &&   $seatArray[array_search('E2',$seatArray)] == 'E2')
                <li class="seat">
                  <input disabled checked type="checkbox" id="E2" value="E2" />
                  <label for="E2">E2</label>
                </li>
                @else
                <li class="seat">
                  <input name="seat[]" type="checkbox" id="E2" value="E2" />
                  <label for="E2">E2</label>
                </li>
                @endif


                @if(count($seatArray) != 0 &&   $seatArray[array_search('E3',$seatArray)] == 'E3')
                <li class="seat">
                  <input disabled checked type="checkbox" id="E3" value="E3" />
                  <label for="E3">E3</label>
                </li>
                @else
                <li class="seat">
                  <input name="seat[]" type="checkbox" id="E3" value="E3" />
                  <label for="E3">E3</label>
                </li>
                @endif


                @if(count($seatArray) != 0 &&   $seatArray[array_search('E4',$seatArray)] == 'E4')
                <li class="seat">
                  <input disabled checked type="checkbox" id="E4" value="E4" />
                  <label for="E4">E4</label>
                </li>
                @else
                <li class="seat">
                  <input name="seat[]" type="checkbox" id="E4" value="E4" />
                  <label for="E4">E4</label>
                </li>
                @endif


                </ol>
            </li>

            <li class="row row--3">
                <ol class="seats" type="F">

                    @if(count($seatArray) != 0 &&   $seatArray[array_search('F1',$seatArray)] == 'F1')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="F1" value="F1" />
                      <label for="F1">F1</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="F1" value="F1" />
                      <label for="F1">F1</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('F2',$seatArray)] == 'F2')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="F2" value="F2" />
                      <label for="F2">F2</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="F2" value="F2" />
                      <label for="F2">F2</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('F3',$seatArray)] == 'F3')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="F3" value="F3" />
                      <label for="F3">F3</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="F3" value="F3" />
                      <label for="F3">F3</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('F4',$seatArray)] == 'F4')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="F4" value="F4" />
                      <label for="F4">F4</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="F4" value="F4" />
                      <label for="F4">F4</label>
                    </li>
                    @endif

                </ol>
            </li>

            <li class="row row--3">
                <ol class="seats" type="G">

                    @if(count($seatArray) != 0 &&   $seatArray[array_search('G1',$seatArray)] == 'G1')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="G1" value="G1" />
                      <label for="G1">G1</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="G1" value="G1" />
                      <label for="G1">G1</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('G2',$seatArray)] == 'G2')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="G2" value="G2" />
                      <label for="G2">G2</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="G2" value="G2" />
                      <label for="G2">G2</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('G3',$seatArray)] == 'G3')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="G3" value="G3" />
                      <label for="G3">G3</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="G3" value="G3" />
                      <label for="G3">G3</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('G4',$seatArray)] == 'G4')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="G4" value="G4" />
                      <label for="G4">G4</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="G4" value="G4" />
                      <label for="G4">G4</label>
                    </li>
                    @endif


                </ol>
            </li>

            <li class="row row--3">
                <ol class="seats" type="H">

                    @if(count($seatArray) != 0 &&   $seatArray[array_search('H1',$seatArray)] == 'H1')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="H1" value="H1" />
                      <label for="H1">H1</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="H1" value="H1" />
                      <label for="H1">H1</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('H2',$seatArray)] == 'H2')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="H2" value="H2" />
                      <label for="H2">H2</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="H2" value="H2" />
                      <label for="H2">H2</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('H3',$seatArray)] == 'H3')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="H3" value="H3" />
                      <label for="H3">H3</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="H3" value="H3" />
                      <label for="H3">H3</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('H4',$seatArray)] == 'H4')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="H4" value="H4" />
                      <label for="H4">H4</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="H4" value="H4" />
                      <label for="H4">H4</label>
                    </li>
                    @endif

                </ol>
            </li>

            <li class="row row--3">
                <ol class="seats" type="I">

                    @if(count($seatArray) != 0 &&   $seatArray[array_search('I1',$seatArray)] == 'I1')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="I1" value="I1" />
                      <label for="I1">I1</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="I1" value="I1" />
                      <label for="I1">I1</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('I2',$seatArray)] == 'I2')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="I2" value="I2" />
                      <label for="I2">I2</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="I2" value="I2" />
                      <label for="I2">I2</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('I3',$seatArray)] == 'I3')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="I3" value="I3" />
                      <label for="I3">I3</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="I3" value="I3" />
                      <label for="I3">I3</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('I4',$seatArray)] == 'I4')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="I4" value="I4" />
                      <label for="I4">I4</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="I4" value="I4" />
                      <label for="I4">I4</label>
                    </li>
                    @endif

                </ol>
            </li>

            <li class="row row--3">
                <ol class="seats" type="J">

                    @if(count($seatArray) != 0 &&   $seatArray[array_search('J1',$seatArray)] == 'J1')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="J1" value="J1" />
                      <label for="J1">J1</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="J1" value="J1" />
                      <label for="J1">J1</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('J2',$seatArray)] == 'J2')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="J2" value="J2" />
                      <label for="J2">J2</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="J2" value="J2" />
                      <label for="J2">J2</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('J3',$seatArray)] == 'J3')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="J3" value="J3" />
                      <label for="J3">J3</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="J3" value="J3" />
                      <label for="J3">J3</label>
                    </li>
                    @endif


                    @if(count($seatArray) != 0 &&   $seatArray[array_search('J4',$seatArray)] == 'J4')
                    <li class="seat">
                      <input disabled checked type="checkbox" id="J4" value="J4" />
                      <label for="J4">J4</label>
                    </li>
                    @else
                    <li class="seat">
                      <input name="seat[]" type="checkbox" id="J4" value="J4" />
                      <label for="J4">J4</label>
                    </li>
                    @endif

                </ol>
            </li>

    </ol>

{{-- @if ($data->seat_number)

@endif --}}

<button type="submit" class="btn btn-success m-2">Book</button>

</form>

  </div>

@endsection
