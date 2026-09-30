<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/mongodb', function () {
    // $products = Product::factory(10)->create();
    // return Product::orderByDesc('created_at')->paginate();
    // return Product::find('6abc622636586f1cdc061fe9');
});

Route::get('/', function () {
    return view('welcome');
});
