<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\RestoranController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});

//RESTORAN
Route::get('pajakrestoran', [RestoranController::class,'index']);
Route::get('pajakrestoran/add', [RestoranController::class,'add']);
Route::post('pajakrestoran/store', [RestoranController::class,'store']);
Route::get('pajakrestoran/edit/{id}', [RestoranController::class,'edit']);
Route::post('pajakrestoran/update', [RestoranController::class,'update']);
Route::get('pajakrestoran/delete/{id}', [RestoranController::class,'delete']);

//HOTEL

Route::get('pajakhotel', [HotelController::class,'index']);

//KOS
Route::get('pajakkos', [KosController::class,'index']);