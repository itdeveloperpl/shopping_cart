<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('product','App\Http\Controllers\ProductController');
Route::resource('cart','App\Http\Controllers\CartController');
Route::resource('cart.product','App\Http\Controllers\CartProductController');