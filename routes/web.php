<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\NotifikasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::prefix('/api/v1')->group(function() {
    Route::prefix('/user')->group(function() {
        Route::get('/profile', [ProfileController::class, 'profile']);
    });
    Route::prefix('/kontak')->group(function() {
        Route::get('/getGeneral', [KontakController::class, 'general']);
        Route::get('/getAll', [KontakController::class, 'getAll']);
    });
    Route::prefix('/statistic')->group(function() {
        Route::get('/getGeneralPenjualan', [StatisticController::class, 'generalPenjualan']);
    });
    Route::prefix('/agenda')->group(function() {
        Route::get('/getAll', [AgendaController::class, 'getAll']);
    });
    Route::prefix('/reminder')->group(function() {
        Route::get('/getAll', [ReminderController::class, 'getAll']);
    });
    Route::prefix('/todo')->group(function() {
        Route::get('/getAll', [TodoController::class, 'getAll']);
    });
    Route::prefix('/notifikasi')->group(function() {
        Route::get('/getAll', [NotifikasiController::class, 'getAll']);
    });
});
