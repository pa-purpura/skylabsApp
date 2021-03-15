@extends('layout')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <table class=" m-3 table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">id</th>
              <th scope="col">name</th>
              <th scope="col">value</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($records as $record)
              <tr>
                <td>{{$record["0"] }}</td>
                <td>{{$record["1"] }}</td>
                <td>{{$record["2"] }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
