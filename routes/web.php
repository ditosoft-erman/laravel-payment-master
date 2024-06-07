<?php
 
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('checkout');
});
 
Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');