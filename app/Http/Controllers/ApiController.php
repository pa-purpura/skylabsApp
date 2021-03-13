<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;


class ApiController extends Controller
{

  // Lista dei record denormalizzati​ , cioè ogni entità deve contenere anche tutte
  // le informazioni derivanti dalle tabelle secondarie del DB.
  // L'API deve essere realizzata in ​ GET e
  // avere una ​ paginazione parametrica
  // (cioè tramite l'url è possibile definire offset e count)

  public function records(Request $request){

    $page = $request->forPage;

    $data = Record::with('workclass', 'sex', 'country', 'education_level', 'marital_status', 'relationship', 'occupation', 'race')
                        ->paginate($page);

    return response()->json($data);
  }

  // Statistiche ​ aggregate filtrate in base ad alcuni parametri significativi.
  // L'API, realizzabile in ​ GET ​ o in ​ POST​ , deve soddisfare questa
  // documentazione fornita dal cliente:

  //   Passando i parametri "aggregationType" = "age" e "aggregationValue" = 30 si ottengono
  //   le statistiche per tutti coloro che hanno 30 anni

  public function stats(Request $request){

    $aggregationType = $request->type;
    $aggregationFilter = $request->value;

    $query = Record::where($aggregationType, $aggregationFilter);

    $capital_gain_sum = $query->sum('capital_gain');
    $capital_gain_avg = $query->avg('capital_gain');

    $capital_loss_sum = $query->sum('capital_loss');
    $capital_loss_avg = $query->avg('capital_loss');

    $under_50k_count = Record::where($aggregationType, $aggregationFilter)
                              ->where('over_50k', '=', 0)
                              ->count();

    $over_50k_count = Record::where($aggregationType, $aggregationFilter)
                              ->where('over_50k', '=', 1)
                              ->count();

    $data = [

      "aggregationType" => $aggregationType,
      "aggregationFilter" => $aggregationFilter,

      "capital_gain_sum" => $capital_gain_sum,
      "capital_gain_avg" => $capital_gain_avg,

      "capital_loss_sum" => $capital_loss_sum,
      "capital_loss_avg" => $capital_loss_avg,

      "over_50k_count" => $over_50k_count,
      "under_50k_count" => $under_50k_count
    ];

    return response()->json($data);
  }
}

// fine
