@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card p-2 ">
        <div class="card-header text-center bg-info-subtle ">
            <h4> Time and City </h4>
        </div>
        <div class="card-body">
            <form class="row g-3" method="post" action="{{ route('storeflightMaster') }}">
                @csrf
                <div class="col-12">
                    <label for="inputAddress" class="form-label" >Flight Master name</label>
                    <input type="text" name="master_name" class="form-control border-secondary" id="inputAddress">
                  </div>

                <div class="col-6">
                    <label for="inputAddress" class="form-label" >Departure City</label>
                    <input type="text" name="departureCity" class="form-control border-secondary" id="inputAddress">
                  </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Arrivel City</label>
                  <input type="text" name="arrivalCity" class="form-control border-secondary" id="inputPassword4">
                </div>


                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Departure Time</label>
                  <input type="text" name="departureTime" class="form-control border-secondary" id="inputCity">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Arrivel Time</label>
                    <input type="text" name="arrivalTime" class="form-control border-secondary" id="inputCity">
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary">submit</button>
                </div>
              </form>
        </div>

    </div>
</div>


<div class="container mt-3">
    <table class="table  text-center">
        <thead>
            <th>#</th>
            <th>Master name</th>
            <th>Departure City</th>
            <th>Arrivel City</th>
            <th>Departure Time</th>
            <th>Arrivel Time</th>
            <th colspan="2">Action</th>

        </thead>
        <tbody class="table-group-divider">
            @foreach ($flightMaster as $item)
            <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->master_name}}</td>
                    <td>{{ $item->departureCity }}</td>
                    <td>{{ $item->arrivalCity }}</td>
                    <td>{{ $item->departureTime }}</td>
                    <td>{{ $item->arrivalTime }}</td>
                    <td><a href="{{ route('flightMaster.load',$item->id) }}" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{ route('destroy',$item->id) }}" class="btn btn-danger">delete</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@push('css')
    <style>

        body{
          background-color: #f1f0ee;
        }
    </style>
@endpush

@endsection
