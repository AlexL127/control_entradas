<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('dashboard',[DashboardController::class, 'index']);

Route::get('dashboard/empleados',[DashboardController::class, 'empleados']);

Route::get('dashboard/entradas',[DashboardController::class, 'registro_entrada']);

Route::get('dashboard/salidas',[DashboardController::class, 'registro_salida']);