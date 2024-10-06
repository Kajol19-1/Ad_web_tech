<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\StudentModel;

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
Route::get('/create', [StudentController::class, 'Create'])->name('create');
Route::post('/create', [StudentController::class, 'CreateSubmit'])->name('create');
Route::get('/details/{id}',[studentcontroller::class,'details'])->name('details');
Route::get('/list',[studentcontroller::class,'list'])->name('list');

//for edit

Route::get('/edit/{id}/{name}', [StudentController::class, 'edit'])->name('edit');
Route::post('edit', [StudentController::class,'editSubmit'])->name('edit');

//For delete

Route::get('/delete/{id}',[StudentController::class, 'delete'])->name('delete');

//for seraching
Route::post('/search',[StudentController::class,'search'])->name('search');



