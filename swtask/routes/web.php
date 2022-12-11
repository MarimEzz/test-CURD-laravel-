<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('addProduct');
});

Route::get('/invoice', [InvoiceController::class,'index']);


Route::get('/addProduct', [ProductController::class,'create']);
Route::post('/addProduct', [ProductController::class,'store']);
Route::get('/deleteProduct/{id}', [ProductController::class,'destroy']);
Route::get('/showProduct', [ProductController::class,'index']);

Route::get('/addCustomer', [CustomerController::class,'create']);
Route::post('/addCustomer', [CustomerController::class,'store']);
Route::get('/deleteCustomer/{id}', [CustomerController::class,'destroy']);
Route::get('/showCustomer', [CustomerController::class,'index']);
