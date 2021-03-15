@extends('layout')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <table class=" m-3 table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">id</th>
              <th scope="col">age</th>
              <th scope="col">workclass_id</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($records as $record)
              <tr>
                <td>{{$record->id}}</td>
                <td>{{$record->age }}</td>
                <td>{{$record->workclass_id }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
