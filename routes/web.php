<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\Reservation;


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

// //ruta saludo
// Route::get('saludo', function(){
//     echo "Hola ";

// });

// Route::get('saludo/{name}', function($name){
//     echo "Hola ".$name;

// });

// //ruta suma
// Route::get('suma/{num1}/{num2}/{num3?}', function($num1, $num2, $num3=0){
//     echo $num1 + $num2 + $num3;

// })->where(['num1' => '[0-9]+'], ['num2' => '[0-9]+'], ['num3' => '[0-9]+']);

// Route::view('/welcome', 'welcome');


Route::get('clients/', [ClientController::class, 'index']);
Route::get('clients/{id}', [ClientController::class, 'show']);

Route::get('reservations/', [ReservationController::class, 'index']);
Route::get('reservations/{id}', [ReservationController::class, 'show']);


Route::get('users/', [UserController::class, 'index']);
Route::get('users/create', [UserController::class, 'create']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::post('users/', [UserController::class, 'store']);





//post
// Route::post('suma/', function(Request $request){
//     

// });