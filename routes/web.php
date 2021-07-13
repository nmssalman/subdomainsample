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

Route::group(array('domain' => 'localhost'), function () {

    Route::get('/', function () {

        return view('welcome');

    });
});

Route::group(array('domain' => '{subdomain}.localhost'), function () {

    Route::get('/', function ($subdomain) {
        return view('index');
    });
});
