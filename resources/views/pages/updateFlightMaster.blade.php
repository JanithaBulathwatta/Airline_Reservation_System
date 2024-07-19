@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card p-2 ">
        <div class="card-header text-center bg-info-subtle ">
            <h4> Time and City </h4>
        </div>
        <div class="card-body">
            <form class="row g-3" method="post" action="{{ route('Update.Master',$flightMaster->id) }}">
                @csrf
                <div class="col-12">
                    <label for="inputAddress" class="form-label" >Flight Master name</label>
                    <input type="text" name="master_name" value="{{ $flightMaster->master_name }}" class="form-control border-secondary" id="inputAddress">
                  </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label" >Departure City</label>
                    <input type="text" name="departureCity" value="{{ $flightMaster->departureCity }}" class="form-control" id="inputAddress">
                  </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Arrivel City</label>
                  <input type="text" name="arrivalCity" value="{{ $flightMaster->arrivalCity }}" class="form-control" id="inputPassword4">
                </div>


                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Departure Time</label>
                  <input type="text" name="departureTime" value="{{ $flightMaster->departureTime }}" class="form-control" id="inputCity">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Arrivel Time</label>
                    <input type="text" name="arrivalTime" value="{{ $flightMaster->arrivalTime }}" class="form-control" id="inputCity">
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
        </div>

    </div>
</div>

@endsection
