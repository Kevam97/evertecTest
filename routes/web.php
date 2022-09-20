<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;

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

Route::get('/purchase', [OrderController::class, 'index'])->name('purchase');
Route::get('/orders',[OrderController::class, 'showOrders'])->name('orders');
Route::post('/addOrder', [OrderController::class, 'createOrder'])->name('create');
Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
Route::post('/getCustomer', [CustomerController::class, 'getCustomers'])->name('getCustomers');

