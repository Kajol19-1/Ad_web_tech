<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[studentcontroller::class,'Home'])->name('home');
Route::get('/uploadimage', [StudentController::class, 'Store'])->name('uploadImage');
Route::post('/uploadimage', [StudentController::class, 'StoreImage'])->name('uploadImage');
Route::get('/details/{id}',[studentcontroller::class,'details'])->name('details');
Route::get('/list',[studentcontroller::class,'list'])->name('list');
