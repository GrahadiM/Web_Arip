<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
Route::get('/faq', [App\Http\Controllers\FrontendController::class, 'faq']);
Route::get('/contactUs', [App\Http\Controllers\FrontendController::class, 'contactUs']);
Route::post('/contactPost', [App\Http\Controllers\FrontendController::class, 'contactPost']);
Route::get('/kategori/{id}', [App\Http\Controllers\FrontendController::class, 'kategori']);
Route::get('/topik', [App\Http\Controllers\FrontendController::class, 'topik'])->name('topik');
Route::get('/subtopik/{id}', [App\Http\Controllers\FrontendController::class, 'subtopik'])->name('subtopik');
Route::get('/allfile/{id}', [App\Http\Controllers\FrontendController::class, 'allfile'])->name('allfile');
Route::get('/search', [App\Http\Controllers\FrontendController::class, 'search'])->name('search');
Route::get('/file/{id}', [App\Http\Controllers\FrontendController::class, 'file']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Role Admin dan Mahasiswa
Route::middleware(['auth', 'role:1,2'])->group(function () {
    Route::resource('/uploadFile', App\Http\Controllers\UploadFileController::class, ['only' => ['index', 'store', 'destroy']]);
});

//Role Admin
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::resource('/validasi', App\Http\Controllers\ValidasiController::class, ['only' => ['index', 'edit', 'update', 'delete']]);
    Route::resource('/contactAdmin', App\Http\Controllers\KomentarController::class, ['only' => ['index', 'edit', 'update', 'delete']]);
});
