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
    $data = [
        'title' => 'Lakers',
    ];
    return view('lakers', $data);
})->name('lakers',);


Route::get('/bulls', function () {
    $data = [
        'title' => 'Bulls',
    ];
    return view('bulls', $data);
})->name('bulls');


Route::get('/celtic', function () {
    $data = [
        'title' => 'Celtics',
    ];
    return view('celtics', $data);
})->name('celtics');
