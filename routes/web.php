<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('personals', 'PersonalController');


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