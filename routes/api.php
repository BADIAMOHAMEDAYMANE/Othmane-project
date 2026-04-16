<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\UserController;
Route::apiResource('equipements', EquipmentController::class);
Route::apiResource('users', UserController::class);
