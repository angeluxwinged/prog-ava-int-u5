<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

//ruta saludo
Route::get('saludo', function(){
    echo "Hola ";

});

Route::get('saludo/{name}', function($name){
    echo "Hola ".$name;

});

//ruta suma
Route::get('suma/{num1}/{num2}/{num3?}', function($num1, $num2, $num3=0){
    echo $num1 + $num2 + $num3;

})->where(['num1' => '[0-9]+'], ['num2' => '[0-9]+'], ['num3' => '[0-9]+']);


//post
// Route::post('suma/', function($Request){
//     echo $num1 + $num2

// });