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

Route::get('/', function () {

    $message = "Benvenut*"; 
    $message2 = "questa è la tua homepage";    

    return view('homepage', compact('message','message2')  );
})->name('home');



Route::get('/products', function () {

  

    return view('products');
})->name('products');