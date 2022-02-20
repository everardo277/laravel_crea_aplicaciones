<?php

use App\Http\Controllers\RecetaController;
use Illuminate\Support\Facades\Route;

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
   // return "Hola mundo";
});

Route::get('/recetas', 'RecetaController');


/* crear una nueva vista

Route::get('/nosotros', function () {
    return view('nosotros');
   //return "pagina de nostros";
   // return "Hola mundo";
});

/*se llama la vista nosotros desde un controlador colocando el nombre del metodo despues del arroba
Route::get('/saludo', 'RecetaController@hola'); */

//como se llama una vista con un invoke
//Route::get('/saludo', 'RecetaController'); */