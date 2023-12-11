<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [SiteController::class, 'index']);

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'auth'])->name('login');


Route::middleware('auth')->group(function () {
  Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');

  Route::get('/tags/criar', [TagController::class, 'create']);
  Route::post('/tags/save', [TagController::class, 'store'])->name('tags/save');

  Route::get('/admin/tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');
  Route::put('/admin/tags/{tag}', [TagController::class, 'update'])->name('tags.update');
  Route::delete('/admin/tags/{tag}', [TagController::class, 'delete'])->name('tags.delete');
});
