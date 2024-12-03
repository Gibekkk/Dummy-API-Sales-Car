<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\NotifikasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'profile']);

Route::get('/user/profile', [ProfileController::class, 'profile']);

Route::get('/kontak/getGeneral', [KontakController::class, 'general']);
Route::get('/kontak/getAll', [KontakController::class, 'getAll']);

Route::get('/statistic/getGeneralPenjualan', [StatisticController::class, 'generalPenjualan']);

Route::get('/agenda/getAll', [AgendaController::class, 'getAll']);

Route::get('/reminder/getAll', [ReminderController::class, 'getAll']);

Route::get('/todo/getAll', [TodoController::class, 'getAll']);

Route::get('/notifikasi/getAll', [NotifikasiController::class, 'getAll']);

