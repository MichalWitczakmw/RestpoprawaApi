<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\PEOPLE;
Route::get('/Witczak/305423/people',function ()
{
   return PEOPLE::create([
       'Name'=>'Andrzej',
       'LastName'=>'Nowak',
       'Name'=>'Andrzej',
       'Name'=>'Andrzej',
   ]);
});
Route::post('/Witczak/305423/people',function ()
{
    return PEOPLE::all();
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
