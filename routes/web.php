<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\DepoimentoController;
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

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/projeto', [SiteController::class, 'project'])->name('project');
Route::get('/404', [SiteController::class, 'error'])->name('error-404');

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'auth'])->name('login');


Route::middleware('auth')->group(function () {
  Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');

  // TAGS
  Route::get('/tags/criar', [TagController::class, 'create'])->name('tags.create');
  Route::post('/tags/save', [TagController::class, 'store'])->name('tags.save');

  Route::get('/admin/tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');
  Route::put('/admin/tags/{tag}', [TagController::class, 'update'])->name('tags.update');
  Route::delete('/admin/tags/{tag}', [TagController::class, 'delete'])->name('tags.delete');

  // SKILLS
  Route::get('/skills/criar', [SkillController::class, 'create'])->name('skills.create');
  Route::post('/skills/save', [SkillController::class, 'store'])->name('skills.save');

  Route::get('/admin/skills/{skill}/edit', [SkillController::class, 'edit'])->name('skills.edit');
  Route::put('/admin/skills/{skill}', [SkillController::class, 'update'])->name('skills.update');
  Route::delete('/admin/skills/{skill}', [SkillController::class, 'delete'])->name('skills.delete');

  // DEPOIMENTOS
  Route::get('/depoimentos/criar', [DepoimentoController::class, 'create'])->name('depoimentos.create');
  Route::post('/depoimentos/save', [DepoimentoController::class, 'store'])->name('depoimentos.save');

  Route::get('/admin/depoimentos/{depoimento}/edit', [DepoimentoController::class, 'edit'])->name('depoimentos.edit');
  Route::put('/admin/depoimentos/{depoimento}', [DepoimentoController::class, 'update'])->name('depoimentos.update');
  Route::delete('/admin/depoimentos/{depoimento}', [DepoimentoController::class, 'delete'])->name('depoimentos.delete');
});
