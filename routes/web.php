<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/user/profile', [ProfileController::class, 'profile']);

Route::get('/kontak/getGeneral', [KontakController::class, 'general']);
Route::get('/kontak/{id}', [KontakController::class, 'getByID']);
Route::get('/kontak/getAll', [KontakController::class, 'getAll']);

Route::get('/statistic/getGeneralPenjualan', [StatisticController::class, 'generalPenjualan']);
Route::get('/statistic/getDetail', [StatisticController::class, 'detailPenjualan']);

Route::get('/agenda/getAll', [AgendaController::class, 'getAll']);
Route::get('/agenda/{id}', [AgendaController::class, 'getByID']);

Route::get('/reminder/getAll', [ReminderController::class, 'getAll']);
Route::get('/reminder/{id}', [ReminderController::class, 'getByID']);

Route::get('/todo/getAll', [TodoController::class, 'getAll']);
Route::get('/todo/{id}', [TodoController::class, 'getByID']);

Route::get('/notifikasi/getAll', [NotifikasiController::class, 'getAll']);
Route::get('/notifikasi/{id}', [NotifikasiController::class, 'getByID']);

Route::get('/subscription/getList', [SubscriptionController::class, 'getList']);
