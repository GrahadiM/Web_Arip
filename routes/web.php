<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
Route::get('/faq', [App\Http\Controllers\FrontendController::class, 'faq']);
Route::get('/contactUs', [App\Http\Controllers\FrontendController::class, 'contactUs']);
Route::post('/kirimPesan', [App\Http\Controllers\FrontendController::class, 'kirimPesan']);
Route::get('/kategori/{id}', [App\Http\Controllers\FrontendController::class, 'kategori']);
Route::get('/topik', [App\Http\Controllers\FrontendController::class, 'topik']);
Route::get('/search', [App\Http\Controllers\FrontendController::class, 'search'])->name('search');
Route::get('/file/{id}', [App\Http\Controllers\FrontendController::class, 'file']);
// Route::get('/exportpdf/{file}', [App\Http\Controllers\FrontendController::class, 'exportPDF']);
Route::get('/download', function () {return redirect('/download');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Role Admin dan Mahasiswa
Route::middleware(['auth', 'role:1,2'])->group(function () {
    Route::resource('/uploadFile', App\Http\Controllers\UploadFileController::class, ['only' => ['index', 'store']]);
});

//Role Admin
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::resource('/validasi', App\Http\Controllers\ValidasiController::class, ['only' => ['index', 'edit', 'update', 'delete']]);
});
