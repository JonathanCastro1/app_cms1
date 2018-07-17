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

Route::get('dashboard', 'usuarios@dashboard');

// mostrar es la url al escribir en el navegador
// y login es el controlador y mostrar es el metodo
// Route::get('mostrar', 'login@mostrar');

// Route::get('footer', 'login@footer');

// Route::get('login', 'login@index');

// ok, asi mostramos datos de una base de datos
// Route::get('/prueba', function () {
//      $results = DB::select('select * from usuarios ');

//      foreach ($results as $mostrar) {
     	
//      	return $mostrar->nombre;

//      }
// });


// Route::get('prueba', 'login@pruebaModel');

// esto son lo que genera laravel,el sistema de login
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('usuarios', 'usuarios@index');

// Route::get('articulos', function(){
// 	dd(\App\login_model::all());
// });