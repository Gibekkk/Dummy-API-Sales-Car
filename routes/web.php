<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StatisticController;
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
    });
    Route::prefix('/statistic')->group(function() {
        Route::get('/getGeneralPenjualan', [StatisticController::class, 'generalPenjualan']);
    });
});
