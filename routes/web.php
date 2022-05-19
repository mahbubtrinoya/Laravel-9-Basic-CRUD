<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listController;


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



Route::get('/list', function () {
    return view('list');
});


Route::get('/', [listController::class,'index']);
Route::get('/create-contact', [listController::class,'CreateContact']);
Route::post('/contact-store', [listController::class,'ContactStore']);
Route::get('/contact-edit/{id}', [listController::class,'ContactEdit']);
Route::put('/contact-update/{id}', [listController::class,'ContactUpdate']);
Route::get('/contact-delete/{id}', [listController::class,'ContactDelete']);
