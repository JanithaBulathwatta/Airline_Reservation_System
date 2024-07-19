@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card p-2 ">
        <div class="card-header text-center bg-info-subtle ">
            <h4>Fill Passenger details </h4>
        </div>
        <div class="card-body">
            <form class="row g-3" method="post" action="{{ route('storePassenger') }}">
                @csrf
                <div class="col-6">
                    <label for="inputAddress" class="form-label" >Seat Number</label>
                    <input type="text" name="name" class="form-control border-secondary" id="inputAddress">
                  </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Date</label>
                  <input type="text" name="age" class="form-control border-secondary" id="inputPassword4">
                </div>


                <div class="col-md-6">
                  <label for="inputCity" class="form-label">fare</label>
                  <input type="text" name="mobile" class="form-control border-secondary" id="inputCity">
                </div>

                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Passenger</label>
                    <select name="pasenger" class="form-control  border-secondary" >
                        <option value="">select passenger</option>
                        @foreach ($passenger as $item)
                        <option value="">{{ $item->name }}</option>
                        @endforeach
                    </select>
                  </div>

                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Flight Master</label>
                    <select name="pasenger" class="form-control  border-secondary" >
                        <option value="">select passenger</option>
                        @foreach ($flightmaster as $item)
                        <option value="">{{ $item->master_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Aircraft</label>
                  <select name="pasenger" class="form-control  border-secondary" >
                      <option value="">select Aircraft</option>
                      @foreach ($aircraft as $item)
                      <option value="">{{ $item->model }}</option>
                      @endforeach
                  </select>
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
            <th>Seat Number</th>
            <th>Date</th>
            <th>Fare</th>
            <th>Passenger</th>
            <th>Flight Master</th>
            <th>Aircraft</th>
            <th colspan="2">Action</th>

        </thead>
        {{-- <tbody class="table-group-divider">
            @foreach ($passenger as $item)
            <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->mobile }}</td>
                    <td>{{ $item->gender }}</td>
                    <td><a href="/UpadetePassenger/{{ $item->id }}" class="btn btn-primary">Edit</a></td>
                    <td><a href="/deletePasenger/{{ $item->id }}" class="btn btn-danger">delete</a></td>

            </tr>
            @endforeach
        </tbody> --}}
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
