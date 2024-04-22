<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;


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

/**
 * Route chart baar
 */
Route::get('/', [ChartController::class, 'index']);
Route::get('/chart-data', 'ChartDataController@index')->name('chart.data');

