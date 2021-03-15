<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/home', [RecordController::class, 'index'])->name('home');
Route::get('/domande', [RecordController::class, 'domande'])->name('domande');
Route::get('/less30more50', [RecordController::class, 'less30more50'])->name('records.esercizio_1');
Route::get('/averageGain', [RecordController::class, 'averageGain'])->name('records.esercizio_2');
Route::get('/csv', [RecordController::class, 'csv'])->name('create.csv');
