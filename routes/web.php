<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biography/Jaypee', function () {
    return view('biography.jaypee');
})->name('biography.jaypee');

Route::get('/biography/rene', function () {
    return view('biography.rene');
})->name('biography.rene');

Route::get('/biography/ruby', function () {
    return view('biography.ruby');
})->name('biography.ruby');

Route::get('/biography/peejay', function () {
    return view('biography.peejay');
})->name('biography.peejay');