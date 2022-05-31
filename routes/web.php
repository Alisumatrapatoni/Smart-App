<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PlayListController;
use App\Http\Controllers\DashboardController;


Route::get('/', [FrontendController::class, 'index']);

Route::get('/smart', [FrontendController::class, 'smart']);

Route::get('/Saintek', [FrontendController::class, 'saintek']);

Route::get('/Soshum', [FrontendController::class, 'soshum']);


Route::get('/detail-artikel/{slug}', [FrontendController::class, 'detail'])-> name('detail-artikel');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('group', [GroupController::class, 'index'])->name('group');

Route::resource('kategori', KategoriController::class);

Route::resource('artikel', ArtikelController::class);

Route::resource('playlist', PlayListController::class);

Route::resource('materi', MateriController::class);

Route::resource('slide', SlideController::class);

Route::resource('iklan', IklanController::class);

