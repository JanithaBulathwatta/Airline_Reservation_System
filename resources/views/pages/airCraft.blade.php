@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card p-2 ">
        <div class="card-header text-center bg-info-subtle ">
            <h4> Aircraft Details </h4>
        </div>
        <div class="card-body">
            <form class="row g-3" method="post" action="{{ route('storeAirCraft') }}">
                @csrf
                <div class="col-6">
                    <label for="inputAddress" class="form-label" >Aircraft Number</label>
                    <input type="text" name="aircraft_num" class="form-control border-secondary" id="inputAddress">
                  </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Model</label>
                  <input type="text" name="model" class="form-control border-secondary" id="inputPassword4">
                </div>


                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Capacity</label>
                  <input type="text" name="capacity" class="form-control border-secondary" id="inputCity">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Air Service Company</label>
                    <input type="text" name="company" class="form-control border-secondary" id="inputCity">
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
            <th>Aircraft Number</th>
            <th>Model</th>
            <th>Capacity</th>
            <th>Air Service Company</th>
            <th colspan="2">Action</th>

        </thead>
        <tbody class="table-group-divider">
            @foreach ($airCraft as $item)
            <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->aircraft_num }}</td>
                    <td>{{ $item->model }}</td>
                    <td>{{ $item->capacity }}</td>
                    <td>{{ $item->company }}</td>
                    <td><a href="{{ route('airCraft.load',$item->id) }}" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{ route('deleteAir',$item->id) }}" class="btn btn-danger">delete</a></td>

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
