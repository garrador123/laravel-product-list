<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('products.index', ['products' => []]);
});


Route::resource('product', ProductsController::class);
