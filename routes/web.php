<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TaskController::class, 'index'])->name('index');
Route::resource('task', TaskController::class);


// Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');

Route::get('/getEmployees/{id}','App\Http\Controllers\TaskController@getEmployees')->name('getEmployees');