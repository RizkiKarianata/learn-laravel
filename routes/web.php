<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\TeachersController;

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

Route::get('/', [DefaultController::class, 'login']);
Route::get('/register', [DefaultController::class, 'register']);
Route::get('/reset', [DefaultController::class, 'reset']);
Route::get('/home', [DefaultController::class, 'home']);
Route::get('/account', [DefaultController::class, 'account']);

Route::get('/classes', [ClassesController::class, 'index'])->name('classes');
Route::get('/classes/create', [ClassesController::class, 'create']);
Route::get('/classes/show/{id}', [ClassesController::class, 'show']);
Route::get('/classes/edit/{id}', [ClassesController::class, 'edit']);
Route::post('/classes/insert', [ClassesController::class, 'store']);
Route::post('/classes/update/{id}', [ClassesController::class, 'update']);
Route::get('/classes/delete/{id}', [ClassesController::class, 'destroy']);
Route::get('/classes/print', [ClassesController::class, 'print']);

Route::get('/lessons', [LessonsController::class, 'index'])->name('lessons');
Route::get('/lessons/create', [LessonsController::class, 'create']);
Route::get('/lessons/show/{id}', [LessonsController::class, 'show']);
Route::get('/lessons/edit/{id}', [LessonsController::class, 'edit']);
Route::post('/lessons/insert', [LessonsController::class, 'store']);
Route::post('/lessons/update/{id}', [LessonsController::class, 'update']);
Route::get('/lessons/delete/{id}', [LessonsController::class, 'destroy']);
Route::get('/lessons/print', [LessonsController::class, 'print']);

Route::get('/teachers', [TeachersController::class, 'index'])->name('teachers');
Route::get('/teachers/create', [TeachersController::class, 'create']);
Route::get('/teachers/show/{id}', [TeachersController::class, 'show']);
Route::get('/teachers/edit/{id}', [TeachersController::class, 'edit']);
Route::post('/teachers/insert', [TeachersController::class, 'store']);
Route::post('/teachers/update/{id}', [TeachersController::class, 'update']);
Route::get('/teachers/delete/{id}', [TeachersController::class, 'destroy']);
Route::get('/teachers/print', [TeachersController::class, 'print']);