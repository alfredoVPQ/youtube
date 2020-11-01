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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/form-Video', 'VideoController@formVideo');
Route::get('/alfredovideo', [App\Http\Controllers\VideoController::class, 'formVideo'])->middleware('auth');
Route::post('/guardar-video', [App\Http\Controllers\VideoController::class, 'guardarVideo'])->middleware('auth');


