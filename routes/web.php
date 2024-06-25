<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckOngkirController;

// Define routes using array syntax or using the ::class syntax
Route::get('/ongkir', [CheckOngkirController::class, 'index']);
Route::post('/ongkir', [CheckOngkirController::class, 'check_ongkir']);
Route::get('/cities/{province_id}', [CheckOngkirController::class, 'getCities']);
