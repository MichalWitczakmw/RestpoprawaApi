<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PEOPLEController;
use Illuminate\Support\Facades\Route;
use App\Models\PEOPLE;
Route::get('/Witczak/305423/people',[PEOPLEController::class, 'index']);
Route::post('/Witczak/305423/people',[PEOPLEController::class, 'create']);
Route::get('/Witczak/305423/people/{}',[PEOPLEController::class, 'show']);
Route::delete('/Witczak/305423/people',[PEOPLEController::class, 'delete']);
Route::put('/Witczak/305423/people/{}',[PEOPLEController::class, 'update']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
