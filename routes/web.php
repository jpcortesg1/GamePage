<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/categories', 'App\Http\Controllers\HomeController@categories')->name('home.categories');
