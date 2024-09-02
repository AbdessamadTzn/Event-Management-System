<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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
Route::get('/', function(){
    return view('welcome');
});
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::get('users/edit/{id}', [UserController::class, 'update']);
Route::post('users/edit/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

Route::get('/events', [EventController::class, 'index'])->name('home');
Route::get('/events/create', [EventController::class, 'create'])->name('create');
Route::post('/events', [EventController::class, 'store'])->name('store');
Route::get('events/{id}', [EventController::class, 'show']);
Route::delete('events/{id}', [EventController::class, 'destroy']);

Route::get('/category', [CategoryController::class, 'index']);


