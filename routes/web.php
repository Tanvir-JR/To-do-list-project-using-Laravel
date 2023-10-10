<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SomethingController;

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

Route::get('/something', [SomethingController::class, 'something']);


Route::post('/task-store', [TaskController::class,'store']) -> name('task.store');
Route::get('/task/{id}', [TaskController::class,'destroy']) -> name('task.destroy');

Route::get('/', [AdminController::class, 'index']);
Route::get('/name', [AdminController::class, 'name']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
