<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('hash/{string}',function($string){
    return Hash::make($string);
});


      

Route::group(['middleware' => 'localization'], function () {
  
    Route::prefix('home')->group(function () {
        Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
        Route::get('/report', 'App\Http\Controllers\HomeController@report')->name('home.report');
        Route::post('/report', 'App\Http\Controllers\HomeController@reportfeeback')->name('home.report.feedback');
        Route::get('/history', 'App\Http\Controllers\HomeController@history')->name('home.history');
        Route::get('/detail/{id}', 'App\Http\Controllers\HomeController@detail')->name('home.detail');
        Route::post('/mess', 'App\Http\Controllers\HomeController@mess')->name('home.mess');

        Route::get('/edit', 'App\Http\Controllers\HomeController@edit')->name('home.edit');
        Route::post('/edit', 'App\Http\Controllers\HomeController@editpost')->name('home.edit.post');
        Route::post('/feedback', 'App\Http\Controllers\HomeController@feedback')->name('home.feedback');
       
       
    });
    Auth::routes();
Route::get('/login', 'App\Http\Controllers\LoginController@getAuthLogin')->name('login')->middleware('checkUser');
Route::post('/login', 'App\Http\Controllers\LoginController@postAuthLogin')->name('loginpost');
Route::get('/logout', 'App\Http\Controllers\LoginController@postAuthLogout')->name('logout');



Route::prefix('technicians')->group(function () {
    Route::get('/', 'App\Http\Controllers\TechniciansController@index')->name('technicians.index');
    Route::get('/edit', 'App\Http\Controllers\TechniciansController@edit')->name('technicians.edit');
    Route::post('/edit', 'App\Http\Controllers\TechniciansController@editpost')->name('technicians.edit.post');
    Route::get('/history', 'App\Http\Controllers\TechniciansController@history')->name('technicians.history');
    Route::get('/detail/{id}', 'App\Http\Controllers\TechniciansController@detail')->name('technicians.detail');
    Route::get('/work', 'App\Http\Controllers\TechniciansController@work')->name('technicians.work');

    Route::get('/approved/{id}', 'App\Http\Controllers\TechniciansController@approved')->name('technicians.approved');
    Route::post('/approved/{id}', 'App\Http\Controllers\TechniciansController@approvedpost')->name('technicians.approved.post');

    Route::get('/processing/{id}', 'App\Http\Controllers\TechniciansController@processing')->name('technicians.processing');
    Route::post('/processing/{id}', 'App\Http\Controllers\TechniciansController@processingpost')->name('technicians.processing.post');

    Route::post('/feedback/{id}', 'App\Http\Controllers\TechniciansController@feedback')->name('technicians.feedback');
});

Route::prefix('admin')->group(function () {
    Route::get('/', 'App\Http\Controllers\AdminController@index')->name('admin.index');
    Route::get('/add', 'App\Http\Controllers\AdminController@add')->name('admin.add');
    Route::post('/add_submit', 'App\Http\Controllers\AdminController@add_submit')->name('admin.add_submit');
    Route::get('/edit/{id}', 'App\Http\Controllers\AdminController@edit')->name('admin.edit');
    Route::post('/update/{id}', 'App\Http\Controllers\AdminController@update')->name('admin.update');
    Route::post('/delete/{id}', 'App\Http\Controllers\AdminController@delete')->name('admin.delete');

    Route::get('/report', 'App\Http\Controllers\AdminController@report')->name('admin.report');
    Route::post('/delete-report/{id}', 'App\Http\Controllers\AdminController@deletereport')->name('admin.deletereport');
    Route::get('/report-Detail/{id}', 'App\Http\Controllers\AdminController@reportdetail')->name('admin.reportdetail');
    Route::post('/confirm/{id}', 'App\Http\Controllers\AdminController@confirm')->name('admin.confirm');
    Route::post('/feedback/{id}', 'App\Http\Controllers\AdminController@feedback')->name('admin.feedback');
});



    Route::get('change-language/{language}', 'App\Http\Controllers\HomeController@changeLanguage')->name('change-language');
});