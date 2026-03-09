<?php

use App\Http\Controllers\systemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/systems', function () {
    return view('systems.index');
});

Route::get('/system/index', [systemController::class, 'index'])->name('systems.index');
Route::get('/system/add', [systemController::class, 'create'])->name('systems.create');
Route::post('/system/store', [systemController::class, 'store'])->name('systems.store');

Route::get('/system/edit/{id}', [systemController::class, 'edit'])->name('systems.edit');
Route::post('/system/update/{id}', [systemController::class, 'update'])->name('systems.update');
Route::delete('/system/delete/{id}', [systemController::class, 'delete'])->name('systems.delete');
