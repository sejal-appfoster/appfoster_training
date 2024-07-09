<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/user',function () {
    return view('home');
});

Route::match(['get', 'post'],'/upload',[HomeController::class,'upload']);

Route::match(['get', 'post'],'/project',[HomeController::class,'view']);

Route::match(['get', 'post'],'/delete/{id}',[HomeController::class,'delete']);

Route::match(['get', 'post'],'/search',[HomeController::class,'search']);

Route::match(['get', 'post'],'/update_view/{id}',[HomeController::class,'update_view']);

Route::match(['get', 'post'],'/update/{id}',[HomeController::class,'update']);



