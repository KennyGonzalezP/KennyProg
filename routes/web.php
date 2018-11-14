<?php

Route::prefix('/')->group ( function () {
		Auth::routes();
		Route::get('/', function () { return view ('portal.dashboard'); });
});


Route::get('admin', function () {
	Auth::routes();
    return view('admin.dashboard');
});

Route::get('registrar', function (){
	Auth::routes();
	return view('admin.registrar');
});

Route::prefix('/')->group ( function () {
		Auth::routes();
		Route::get('/', function () { return view ('portal.dashboard'); });
});

Route::resource('Clientes','ClientesController');
Route::get('Clientes/{id}/destroy', [
	'uses' => 'ClientesController@destroy',
	'as'   => 'admin.Cliente.destroy'
]);



/*
Route::get('login', function () {
    return view('auth.login');
});

Route::get('register', function () {
    return view('auth.register');
});

Route::get('inicio', function () {
    return view('portal.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

*/