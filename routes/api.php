<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/





Route::get('report', 'App\Http\Controllers\Api\ReportController@index');
Route::post('report', 'App\Http\Controllers\Api\ReportController@login');
Route::get('retrieve', 'App\Http\Controllers\Api\ReportController@retrieveData');
Route::post('myreport', 'App\Http\Controllers\Api\ReportController@show');
Route::post('upreport', 'App\Http\Controllers\Api\ReportController@upload');

Route::post('notification', 'App\Http\Controllers\Api\ReportController@getNoti');
Route::post('mess', 'App\Http\Controllers\Api\ReportController@getMess');
Route::post('sendmess', 'App\Http\Controllers\Api\ReportController@postMess');

Route::post('updatenot', 'App\Http\Controllers\Api\ReportController@clNot');





Route::post('acreport', 'App\Http\Controllers\Api\TechController@accept');

Route::post('clreport', 'App\Http\Controllers\Api\TechController@close');

Route::post('postsolution', 'App\Http\Controllers\Api\TechController@solution');
Route::post('history', 'App\Http\Controllers\Api\TechController@historyTech');
Route::post('process', 'App\Http\Controllers\Api\TechController@processTech');

Route::post('approd', 'App\Http\Controllers\Api\TechController@approdTech');






