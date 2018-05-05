<?php

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
    return view('home.index');
});
Route::get('aboutus', function () {
    return view('about.about');
});
Route::get('products', function () {
    return view('products.products');
});
Route::get('clients', function () {
    return view('clients.clients');
});
Route::get('research', function () {
    return view('research.research');
});
Route::get('contact', function () {
    return view('contacts.contacts');
});
