<?php

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

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\DashboardController;

Route::get('/dashboard',[DashboardController::class,'index']);




use App\Http\Controllers\ProjectController;
Route::resource('project', ProjectController::class);


// use App\Http\Controllers\ProjectController;

// Route::get('/project/index',[ProjectController::class,'index']);
// Route::get('/project/create',[ProjectController::class,'create']);
// Route::get('/project/edit',[ProjectController::class,'edit']);
// Route::get('/project/view',[ProjectController::class,'view']);