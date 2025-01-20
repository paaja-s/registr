<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VehicleController;


Route::get('/test', function () {
	return response()->json(['message' => 'API is working!']);
});
Route::get('registr/{vehicle}', [VehicleController::class, 'get']);
Route::post('/search', [VehicleController::class, 'search']);