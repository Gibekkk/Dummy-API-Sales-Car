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

Route::get('/api/v1/user/profile', [ProfileController::class, 'profile']);

Route::get('/api/v1/kontak/getGeneral', [KontakController::class, 'general']);
Route::get('/api/v1/kontak/getAll', [KontakController::class, 'getAll']);

Route::get('/api/v1/statistic/getGeneralPenjualan', [StatisticController::class, 'generalPenjualan']);

Route::get('/api/v1/agenda/getAll', [AgendaController::class, 'getAll']);

Route::get('/api/v1/reminder/getAll', [ReminderController::class, 'getAll']);

Route::get('/api/v1/todo/getAll', [TodoController::class, 'getAll']);

Route::get('/api/v1/notifikasi/getAll', [NotifikasiController::class, 'getAll']);

