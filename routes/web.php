<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\DepoimentoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;


// SITE
Route::controller(SiteController::class)->group(function () {
  Route::get('/', 'index')->name('site.index');
  Route::get('/projeto', 'project')->name('site.project');
});

Route::fallback(function () {
  return view('errors.404');
});

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'auth'])->name('login');


// LOGADO
Route::middleware('auth')->group(function () {
  Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');

  // LOGOUT
  Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

  // TAGS
  Route::controller(TagController::class)->group(function () {
    Route::get('/tags/criar', 'create')->name('tags.create');
    Route::post('/tags/save', 'store')->name('tags.save');

    Route::get('/admin/tags/{tag}/edit', 'edit')->name('tags.edit');
    Route::put('/admin/tags/{tag}', 'update')->name('tags.update');
    Route::delete('/admin/tags/{tag}', 'delete')->name('tags.delete');
  });

  // SKILLS
  Route::controller(SkillController::class)->group(function () {
    Route::get('/skills/criar', 'create')->name('skills.create');
    Route::post('/skills/save', 'store')->name('skills.save');

    Route::get('/admin/skills/{skill}/edit', 'edit')->name('skills.edit');
    Route::put('/admin/skills/{skill}', 'update')->name('skills.update');
    Route::delete('/admin/skills/{skill}', 'delete')->name('skills.delete');
  });

  // DEPOIMENTOS
  Route::controller(DepoimentoController::class)->group(function () {
    Route::get('/depoimentos/criar', 'create')->name('depoimentos.create');
    Route::post('/depoimentos/save', 'store')->name('depoimentos.save');

    Route::get('/admin/depoimentos/{depoimento}/edit', 'edit')->name('depoimentos.edit');
    Route::put('/admin/depoimentos/{depoimento}', 'update')->name('depoimentos.update');
    Route::delete('/admin/depoimentos/{depoimento}', 'delete')->name('depoimentos.delete');
  });
});


// API
Route::get('/lol', [ApiController::class, 'form']);
Route::post('/lol/maestria', [ApiController::class, 'maestria'])->name('api.maestria');
