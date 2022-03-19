<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

// Categories page
Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('category.index');

// Game page
Route::get('/category/{id}', 'App\Http\Controllers\CategoryController@category')->name('category.category');