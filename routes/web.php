<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [DefaultController::class, 'login'])->name('/');
Route::get('/register', [DefaultController::class, 'register']);
Route::get('/reset', [DefaultController::class, 'reset']);
Route::get('/home', [DefaultController::class, 'home'])->name('home');
Route::get('/account', [DefaultController::class, 'account'])->name('account');
Route::post('/default/insert', [DefaultController::class, 'students_store']);
Route::post('/default/update_account/{id}', [DefaultController::class, 'account_update']);

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

Route::get('/schedules', [SchedulesController::class, 'index'])->name('schedules');
Route::get('/schedules/create', [SchedulesController::class, 'create']);
Route::get('/schedules/show/{id}', [SchedulesController::class, 'show']);
Route::get('/schedules/edit/{id}', [SchedulesController::class, 'edit']);
Route::post('/schedules/insert', [SchedulesController::class, 'store']);
Route::post('/schedules/update/{id}', [SchedulesController::class, 'update']);
Route::get('/schedules/delete/{id}', [SchedulesController::class, 'destroy']);
Route::get('/schedules/print', [SchedulesController::class, 'print']);

Route::get('/students', [StudentsController::class, 'index'])->name('students');
Route::get('/students/create', [StudentsController::class, 'create']);
Route::get('/students/show/{id}', [StudentsController::class, 'show']);
Route::get('/students/edit/{id}', [StudentsController::class, 'edit']);
Route::post('/students/insert', [StudentsController::class, 'store']);
Route::post('/students/update/{id}', [StudentsController::class, 'update']);
Route::get('/students/delete/{id}', [StudentsController::class, 'destroy']);
Route::get('/students/print', [StudentsController::class, 'print']);

Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/users/create', [UsersController::class, 'create']);
Route::get('/users/show/{id}', [UsersController::class, 'show']);
Route::get('/users/edit/{id}', [UsersController::class, 'edit']);
Route::post('/users/insert', [UsersController::class, 'store']);
Route::post('/users/update/{id}', [UsersController::class, 'update']);
Route::get('/users/delete/{id}', [UsersController::class, 'destroy']);
Route::get('/users/print', [UsersController::class, 'print']);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
