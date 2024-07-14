@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card p-2 ">
        <div class="card-header text-center bg-info-subtle ">
            <h4> Aircraft Details </h4>
        </div>
        <div class="card-body">
            <form class="row g-3" method="post" action="{{ route('Update.airCraft',$air->id) }}">
                @csrf
                <div class="col-6">
                    <label for="inputAddress" class="form-label" >Aircraft Number</label>
                    <input type="text" name="aircraft_num" value="{{ $air->aircraft_num }}" class="form-control border-secondary" id="inputAddress">
                  </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Model</label>
                  <input type="text" name="model" value="{{ $air->aircraft_num }}" class="form-control border-secondary" id="inputPassword4">
                </div>


                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Capacity</label>
                  <input type="text" name="capacity" value="{{ $air->capacity }}" class="form-control border-secondary" id="inputCity">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Air Service Company</label>
                    <input type="text" name="company" value="{{ $air->company }}" class="form-control border-secondary" id="inputCity">
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
        </div>

    </div>
</div>

@endsection
