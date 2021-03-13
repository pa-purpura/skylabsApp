@extends('layout')
@section('content')

  <div class="container ">
    <div class="row m-2 mt-5">
      <div class="col-sm-6 ">
        <div class="card text-center" >
          <div class="card-body">
            <h5 class="card-title">Esercizio_1</h5>
            <p class="card-text">
              Scrivi una query che estragga il ​ numero di persone​ con ​ meno di 30 anni​ che guadagnano​ più di 50.000 dollari l'anno
            </p>
            <a href="{{ route('records.esercizio_1')}}" class="btn btn-primary">Vai</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 ">
        <div class="card  text-center">
          <div class="card-body">
            <h5 class="card-title">Esercizio_2</h5>
            <p class="card-text">
              Scrivi una query che riporti il ​ guadagno di capitale medio​ per ogni categoria lavorativa
            </p>
            <a href="{{ route('records.esercizio_2')}}" class="btn btn-primary">vai</a>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
