<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Record;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
  public function index()
    {
      $data = [
        'title' => 'SkylabsApp',
      ];

      return view('home', $data);
    }

  // done

  // Scrivi una query che estragga il ​ numero di persone​ con ​ meno di 30 anni​ che
  // guadagnano​ più di 50.000 dollari l'anno age capital_gain

  public function less30more50(){

    $records = Record::where('age', '<', 30)
                ->where('capital_gain','>', 50000)
                ->get();

    $data = [
      'title' => 'Esercizio 1',
      'records' => $records
    ];

    return view('esercizio_1', $data);
  }

}
