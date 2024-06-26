<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JurusanController;

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

// Route::get('/', function () {
//     return view('master');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//data jurusan
Route::get('/jurusan/', [JurusanController::class, 'index'])->middleware('auth');

//form jurusan
Route::get('/jurusan/form/', [JurusanController::class, 'create'])->middleware('auth');
Route::post('/jurusan/store/', [JurusanController::class, 'store'])->middleware('auth');

