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

Route::get('/unnkounnko', function () {
    return view('welcome');
});

Route::get('/calcs/{value1}/{operator}/{value2}', [App\Http\Controllers\calcs::class, 'result']);
