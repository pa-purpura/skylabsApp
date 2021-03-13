<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Lista dei record denormalizzati​ , cioè ogni entità deve contenere anche tutte
// le informazioni derivanti dalle tabelle secondarie del DB.
// L'API deve essere realizzata in ​ GET e
// avere una ​ paginazione parametrica
// (cioè tramite l'url è possibile definire offset e count)

Route::get('records', [ApiController::class,'records']);


// Route::post('updateImage', [ApiController::class,'saveProfilePicture']); // Modifica immagine Profilo
