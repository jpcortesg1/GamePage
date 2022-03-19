<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

// About page
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('home.about');

// Categories page
Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('category.index');

// Category page
Route::get('/category/{id}', 'App\Http\Controllers\CategoryController@category')->name('category.category');

// Game page
Route::get('/game/{id}', 'App\Http\Controllers\GameController@index')->name('game.index');