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
                    <div class="col-12">
                        <label for="inputAddress" class="form-label" >Name</label>
                        <input type="text" name="name" class="form-control" id="inputAddress">
                      </div>

                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Age</label>
                      <input type="text" name="age" class="form-control" id="inputPassword4">
                    </div>


                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">Phone Number</label>
                      <input type="text" name="mobile" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">Gender</label>
                      <select id="inputState" name="gender" class="form-select">
                        <option selected>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
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
                <th>Name</th>
                <th>age</th>
                <th>phone Number</th>
                <th>gender</th>
                <th colspan="2">Action</th>

            </thead>
            <tbody class="table-group-divider">
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
