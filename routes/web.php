<?php

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

Route::get('/home', function () {
    return view('home',["title" => "Home"]);
});
Route::get('/history', function () {
    return view('history',["title" => "History"]);
});
Route::get('/product', function () {
    return view('product',["title" => "Product"]);
});
Route::get('/contactinfo', function () {
    return view('contactinfo',["title" => "Contact Info"]);
});
Route::get('/contactform', function () {
    return view('contactform',["title" => "Contact Form"]);
});
