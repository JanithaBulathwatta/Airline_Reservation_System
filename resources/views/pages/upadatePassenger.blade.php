@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card p-2 ">
        <div class="card-header text-center bg-info-subtle ">
            <h4>Fill Passenger details </h4>
        </div>
        <div class="card-body">
            <form class="row g-3" method="post" action="{{ route('UpdatePassenger',$passenger->id) }}">
                @csrf
                <div class="col-12">
                    <label for="inputAddress" class="form-label" >Name</label>
                    <input type="text" name="name" value="{{ $passenger->name }}" class="form-control" id="inputAddress">
                  </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Age</label>
                  <input type="text" name="age" value="{{ $passenger->age }}" class="form-control" id="inputPassword4">
                </div>


                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Phone Number</label>
                  <input type="text" name="mobile" value="{{ $passenger->mobile }}" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Gender</label>
                  <select id="inputState" name="gender" value="{{ $passenger->gender }}" class="form-select">
                    <option selected>Choose..</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
        </div>

    </div>
</div>

@endsection
