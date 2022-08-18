<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;

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

Route::get('/aluminis', [Controller::class, 'getAlumins']);
Route::post('/aluminis',[Controller::class,'registerAlumini']);
Route::get('/courses', [Controller::class, 'getCourse']);

Route::post('/about/{id}',[Controller::class,'updateDetail']);

Route::get('/flashNews', [HomeController::class, 'getFlashNews']);

Route::post('/auth/login',[Controller::class, 'getLogin']);