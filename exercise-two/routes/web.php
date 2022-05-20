<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get/orders',[OrderController::class,'get_orders']);
Route::get('/get/order/{id}',[OrderController::class,'get_order']);
Route::get('/get/order/details/{id}',[OrderDetailsController::class,'get_order_with_details']);
