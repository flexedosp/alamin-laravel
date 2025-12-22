<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApiController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index'])->name('beranda');
Route::get('/tentang-kami', [UserController::class, 'about'])->name('tentang-kami');
Route::get('/wawasan', [UserController::class, 'knowledge'])->name('wawasan');
Route::get('/platform', [UserController::class, 'platform'])->name('platform');
Route::get('/platform/quran', [UserController::class, 'quranApp'])->name('platform.quran');
Route::get('/platform/quran/{id}', [UserController::class, 'quranDetail'])->name('platform.quranDetail');
Route::get('/platform/hadits', [UserController::class, 'haditsApp'])->name('platform.hadits');
Route::get('/platform/hadits/{id}', [UserController::class, 'haditsDetail'])->name('platform.haditsDetail');
Route::get('/info-center', [UserController::class, 'infoCenter'])->name('info-center');

// API routes
Route::get('/apis', [ApiController::class, 'showApis']);
Route::get('/quran', [ApiController::class, 'quran']);
Route::get('/hadits', [ApiController::class, 'hadits']);
