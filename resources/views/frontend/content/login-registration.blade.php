@extends('frontend.master')

@section('content')

<div class="row" style="padding: 100px">

    @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif

    <div class="col-md-6">

        <h1>Login Here</h1>

        <form action="{{route('login')}}" method="post">
            @csrf

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <div class="col-md-6">

        <h1>Register Here</h1>

        <form action="{{route('registration')}}" method="post">

                @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input required name="name"  type="name" class="form-control" id="name">
              </div>
              {{-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contract Number</label>
                <input name="contract" required type="string" class="form-control" id="contract" >
              </div> --}}
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input required name="password"  type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

</div>

@endsection
