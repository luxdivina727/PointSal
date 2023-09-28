<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('category', 'CategoryController@index')->name('index');
// Route::resource('category','CategoryController')->names('categories');
Route::resource('clients','ClientController')->names('clients');
Route::resource('products','ProductController')->names('products');
Route::resource('providers','ProviderController')->names('providers');
Route::resource('purchases','PurchaseController')->names('purchases');
Route::resource('sales','SaleController')->names('sales');


Route::get('/prueba', function () {
    return view('prueba');
});