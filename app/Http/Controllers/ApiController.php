<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;
use App\Models\Workclass;

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

  // input
  // aggregationType: "age", "education_level_id", "occupation_id" --- aggregationValue: int

  // output
  // "aggregationType": "string",
  // "aggregationFilter": int,

  // "capital_gain_sum": float,
  // "capital_gain_avg": float,

  // "capital_loss_sum": float,
  // "capital_loss_avg": float,

  // "over_50k_count": int,
  // "under_50k_count": int

//   Passando i parametri "aggregationType" = "age" e "aggregationValue" = 30 si ottengono
//   le statistiche per tutti coloro che hanno 30 anni

  public function xxx(){
    // code
  }
}




// fine
