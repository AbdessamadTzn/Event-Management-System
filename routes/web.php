<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
Route::get('/events', [EventController::class, 'index'])->name('home');
Route::get('/events/create', [EventController::class, 'create'])->name('create');
Route::post('/events', [EventController::class, 'store'])->name('store');
