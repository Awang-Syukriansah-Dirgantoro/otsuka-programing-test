<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('home');

Route::get('home', function () {
    return view('welcome');
})->name('home');

Route::get('product', [\App\Http\Controllers\MstBarangController::class, 'index'])->name('barang');
Route::post('product/store', [\App\Http\Controllers\MstBarangController::class, 'store'])->name('barang.store');
Route::get('product/approval/{id}/{status}', [\App\Http\Controllers\MstBarangController::class, 'approval'])->name('barang.approval');


Route::post('login', [\App\Http\Controllers\MstUserController::class, 'handleLogin'])->name('handle.login');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', \App\Http\Controllers\MstUserController::class);
    });
    Route::group(['middleware' => ['cek_login:editor']], function () {
        Route::resource('editor', \App\Http\Controllers\MstUserController::class);
    });
});