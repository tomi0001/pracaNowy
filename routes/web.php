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

//Route::get('/Zad1', "ControllerZad1@generateNumberWrite");
Route::get('/Zad1/{number}', [App\Http\Controllers\ControllerZad1::class, 'generateNumberWrite'])->name('zad1');
Route::get('/Zad1Read/{number}', [App\Http\Controllers\ControllerZad1::class, 'generateNumberRead'])->name('zad1_2');
Route::get('/Zad2', [App\Http\Controllers\ControllerZad2::class, 'showDates'])->name('zad2');
