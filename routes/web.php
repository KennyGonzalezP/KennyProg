<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('personals', 'PersonalController');
Auth::routes();
Route::resource('houseclients', 'HouseClientController');

Auth::routes();

// Rutas de PDF
Route::get('descargar-HouseClient', 'HouseClientController@pdf')->name('HouseClient.pdf');
Route::get('descargar-Personal', 'PersonalController@pdf')->name('personals.pdf');

// Ruta de Inicio de portal:

Route::get('inicio',function (){
	return view('portal.dashboard');
})->name('inicio');
Auth::routes();

// Ruta de Admin LTE

Route::get('admin',function (){
	return view('admin.dashboard');
});


?>