<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QiitaController;
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

Route::get('/', [QiitaController::class, 'index']);
Route::get('/create-page',[QiitaController::class,'createPage']);
Route::post('/create',[QiitaController::class,'create']);
Route::get('/edit-page/{id}',[QiitaController::class,'editPage']);
Route::post('/edit',[QiitaController::class,'edit']);
Route::get('/delete-page/{id}',[QiitaController::class,'deletePage']);
Route::post('/delete/{id}',[QiitaController::class,'delete']);