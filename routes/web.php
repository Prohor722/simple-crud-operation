<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('home');
});
Route::get('/success',[DataController::class,'index']);

Route::get('/list', function () {
    return view('all_data');
});
Route::post('/save',[DataController::class,'store']);
Route::get('/delete/{id}',[DataController::class,'delete']);
Route::get('/edit/{id}',[DataController::class,'edit']);
Route::post('/update/{id}',[DataController::class,'update']);
