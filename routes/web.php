<?php

use App\Http\Controllers\ProgressLogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/systems', function () {
    return view('systems.index');
});

Route::get('/form', [ProgressLogController::class, 'create'])->name('borang.daftar');
Route::post('/form', [ProgressLogController::class, 'store'])->name('borang.simpan');
