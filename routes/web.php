<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('hash/{string}',function($string){
    return Hash::make($string);
});

Auth::routes();
Route::get('/login', 'App\Http\Controllers\LoginController@getAuthLogin')->name('login')->middleware('checkUser');
Route::post('/login', 'App\Http\Controllers\LoginController@postAuthLogin')->name('loginpost');
Route::get('/logout', 'App\Http\Controllers\LoginController@postAuthLogout')->name('logout');

Route::prefix('home')->group(function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
    Route::get('/report', 'App\Http\Controllers\HomeController@report')->name('home.report');
    Route::post('/report', 'App\Http\Controllers\HomeController@reportfeeback')->name('home.report.feedback');
    Route::get('/history', 'App\Http\Controllers\HomeController@history')->name('home.history');
    Route::get('/detail/{id}', 'App\Http\Controllers\HomeController@detail')->name('home.detail');
    Route::get('/edit', 'App\Http\Controllers\HomeController@edit')->name('home.edit');
    Route::post('/edit', 'App\Http\Controllers\HomeController@editpost')->name('home.edit.post');
   
});

Route::prefix('technicians')->group(function () {
    Route::get('/', 'App\Http\Controllers\TechniciansController@index')->name('technicians.index');
    Route::get('/edit', 'App\Http\Controllers\TechniciansController@edit')->name('technicians.edit');
    Route::post('/edit', 'App\Http\Controllers\TechniciansController@editpost')->name('technicians.edit.post');
    Route::get('/history', 'App\Http\Controllers\TechniciansController@history')->name('technicians.history');
    Route::get('/detail/{id}', 'App\Http\Controllers\TechniciansController@detail')->name('technicians.detail');
    Route::get('/work', 'App\Http\Controllers\TechniciansController@work')->name('technicians.work');
});

      
        