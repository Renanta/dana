<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('admin');
    Route::get('create', [EventController::class, 'create'])->name('create');
    Route::post('create', [EventController::class, 'store']);
    Route::get('{event:slug}/edit', [EventController::class, 'edit'])->name('edit');
    Route::put('{event:slug}/edit', [EventController::class, 'update']);
    Route::get('{event:slug}', [EventController::class, 'destroy'])->name('destroy');
});

Auth::routes();
