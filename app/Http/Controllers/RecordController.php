<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\Workclass;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
  public function index(){

      $data = [
        'title' => 'SkylabsApp',
      ];
      return view('home', $data);
  }

  // Scrivi una query che estragga il ​ numero di persone​ con ​ meno di 30 anni​ che
  // guadagnano​ più di 50.000 dollari l'anno age capital_gain

  public function less30more50(){

    $records = Record::where('age', '<', 30)
                ->where('over_50k','=', 1)
                ->take(20)
                ->get();

    $data = [
      'title' => 'Esercizio 1',
      'records' => $records
    ];

    dd($records);

    return view('esercizio_1', $data);
  }

  // Scrivi una query che riporti il ​ guadagno di capitale medio​ per ogni categoria
  // lavorativa

  public function averageGain(){

    $jobs = Workclass::all();

    $categories_avg = [];

    foreach ($jobs as $job) {

      $this_id = $job['id'];
      $this_name = $job['name'];
      $category_avg = [];
      $records = Record::where('workclass_id', $this_id );
      $avg = $records->avg('capital_gain');

      array_push($category_avg, $this_id);
      array_push($category_avg, $this_name);
      array_push($category_avg, $avg);

      array_push($categories_avg, $category_avg);

    }
    dd($categories_avg);

    $data = [
      'title' => 'Esercizio 2',
      'records' => $categories_avg
    ];

    return view('esercizio_2', $data);
  }

}









// fine
