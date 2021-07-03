<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\ClassesController;

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