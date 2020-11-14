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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('juego', 'JuegoController');

Route::get('cancelar', function(){
	return redirect()->route('juego.index')->with('cancelar', 'Acción cancelada!');
})->name('cancelar');

// otras forma de ver el middleware
//Route::get('juego/{id}/confirm', 'JuegoController@confirm')->name('juego.confirm')->middleware('auth');
//Route::get('juego/{id}/confirm', ['middleware'=>'auth'], 'JuegoController@confirm')->name('juego.confirm')->middleware('auth');
Route::get('juego/{id}/confirm', 'JuegoController@confirm')->name('juego.confirm')->middleware('auth');