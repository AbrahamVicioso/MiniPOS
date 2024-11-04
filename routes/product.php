<?php

use App\Http\Controllers\Product\CreateProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('/create-product', [CreateProductController::class, 'create']);
    Route::post('/create-product', [CreateProductController::class,'store'])->name('product.create');
});
