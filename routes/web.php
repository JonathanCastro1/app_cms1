<?php

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
//     return view('login');
// });

Route::get('/', 'login@index');

// mostrar es la url al escribir en el navegador
// y login es el controlador y mostrar es el metodo
Route::get('mostrar', 'login@mostrar');
