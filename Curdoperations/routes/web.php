<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::controller(ProductController::class)->group(function(){
    Route::get('/products/create','create')->name('products.create');
    Route::post('/products','store')->name('products.store');
    Route::get('/products','index')->name('products.index');
    Route::get('/products/{product}/edit','edit')->name('products.edit');
    Route::put('/products/{product}','update')->name('products.update');
    Route::delete('/products/{product}','destory')->name('products.destory');
    Route::get('/products/{product}/show','show')->name('products.show');
});