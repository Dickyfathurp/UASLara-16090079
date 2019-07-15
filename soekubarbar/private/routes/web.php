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


	
	//Route::get('belajar','belajarcontroller@index');
	Route::get('karyawan','belajarcontroller@index');

	Route::get('/test', function () {
    return view('welcome');
	
});
	Route::get('/test3', function () {
    return view('welcome');
	
});

	Route::get('/barbar', function () {
    return view('template');
	
});

	Route::get('/masuk', function () {
    return view('home');
	
});
	Route::get('/pariwisata', function () {
    return view('pariwisata');
	
});


//Route::get('/template', function () {
    //return view('pages.home');
	
//});

//Route::get('/template', function () {
    //return view('pages.about');
	
//});

	Route::get('/User', function () {
    return view('User');
	
});

	Route::get('/about', function () {
    return view('pages.about');
	
});

	Route::get('/beranda', function () {
    return view('pages.beranda');
	
});


	Route::get('/jadwal', function () {
    return view('pages.jadwal');
	
});
	Route::get('/pesan', function () {
    return view('layouts.index');
	
});
	Route::get('/pembayaran', function () {
    return view('pages.pembayaran');
	
});
	Route::get('/daftar', function () {
    return view('pages.daftar');
	
});

	//Route::get('/masuk', function () {
    //return view('pages.login');
	
//});

	Route::get('/tentang', function () {
    return view('pages.tentang');
	
});

	Route::get('/homev2', function () {
    return view('homev2');
});

Route::get('/house', 'CrudController@index');
Route::get('/add', 'CrudController@create');
Route::post('/store', 'CrudController@store');
Route::get('/read/{id}', 'CrudController@show');
Route::get('/edit/{id}', 'CrudController@edit');
Route::post('/update/{id}', 'CrudController@update');
Route::get('/delete/{id}', 'CrudController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
