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
    return view('homepage');
})->name('home');


Route::get('/lakers', function () {
    return view('lakers');
})->name('lakers');


Route::get('/bulls', function () {
    return view('bulls');
})->name('bulls');


Route::get('/celtic', function () {
    return view('celtics');
})->name('celtics');
