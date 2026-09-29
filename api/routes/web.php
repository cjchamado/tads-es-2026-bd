<?php

use Illuminate\Support\Facades\Route;
use App\Models\Order;

Route::get('/db', function () {
    Order::factory(10_000)->create();

    // $start = '2021-01-31';
    // $end = now()->format('Y-m-d');

    // $query = Order::query()
    //     ->where('status', 'paid')
    //     ->whereBetween('created_at', [
    //         $start,
    //         $end
    //     ]);

    // // dd($query->getBindings());
    // die($query->toRawSql());
});


Route::get('/', function () {
    return view('welcome');
});
