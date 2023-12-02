<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;

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

Route::get('/', [TagController::class, 'index']);
Route::get('/tags/criar', [TagController::class, 'create']);
Route::post('/tags/salvar', [TagController::class, 'store']);

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'auth'])->name('login');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
