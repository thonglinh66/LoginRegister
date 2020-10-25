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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('report', 'App\Http\Controllers\Api\ReportController@index');
Route::post('report', 'App\Http\Controllers\Api\ReportController@login');
Route::get('retrieve', 'App\Http\Controllers\Api\ReportController@retrieveData');
Route::post('myreport', 'App\Http\Controllers\Api\ReportController@show');
Route::post('upreport', 'App\Http\Controllers\Api\ReportController@upload');

Route::post('notification', 'App\Http\Controllers\Api\ReportController@getNoti');
Route::post('mess', 'App\Http\Controllers\Api\ReportController@getMess');
Route::post('sendmess', 'App\Http\Controllers\Api\ReportController@postMess');







Route::post('postsolution', 'App\Http\Controllers\Api\TechController@solution');
Route::post('history', 'App\Http\Controllers\Api\TechController@historyTech');
Route::post('process', 'App\Http\Controllers\Api\TechController@processTech');

Route::post('approd', 'App\Http\Controllers\Api\TechController@approdTech');





