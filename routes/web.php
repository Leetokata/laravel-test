<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FileController;


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
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

// LOGIN RUTAS
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/store', [LoginController::class, 'store'])->name('register.store');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//ORDER RUTAS
Route::resource('order', OrderController::class);

//TXT RUTA
Route::get('/txt', [HomeController::class, 'download'])->name('download');

//
Route::get('/front', [HomeController::class, 'front'])->name('front');

//FILES
Route::get('/files', [FileController::class, 'files'])->name('files');
Route::post('/upload', [FileController::class, 'store'])->name('file.store');
Route::delete('/files/{id}', [FileController::class, 'destroy'])->name('file.destroy');



