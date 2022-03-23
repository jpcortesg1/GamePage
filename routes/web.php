<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

// About page
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('home.about');

// Support page
Route::get('/support', 'App\Http\Controllers\HomeController@support')->name('home.support');

// Categories page
Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('category.index');

// Category page
Route::get('/category/{id}', 'App\Http\Controllers\CategoryController@show')->name('category.show');

// Game page
Route::get('/game/{id}', 'App\Http\Controllers\GameController@index')->name('game.index');

// Buy game
Route::get('/game/buy/{id}', 'App\Http\Controllers\GameController@buy')->name('game.buy');

//cart index
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");

//add cart
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");

//cart remove all
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name("cart.removeAll");

// Cart remove specific item
Route::get('/cart/remove/{id}', 'App\Http\Controllers\CartController@remove')->name("cart.remove");

// Buy all games in cart
Route::get('/cart/checkOut/', 'App\Http\Controllers\CartController@checkOut')->name("cart.checkOut");

// Create new comment
Route::post('/comment/create/{id}', 'App\Http\Controllers\CommentController@store')->name("comment.store");

Auth::routes();

Route::middleware('admin')->group(function () {

    Route::get('/admin', 'App\Http\Controllers\AdminHomeController@index')->name("admin.index"); 

    // Admin game page
    Route::get("/admin/game/", 'App\Http\Controllers\GameController@adminIndex')->name("admin.game");

    // Admin game page specific category
    Route::get("/admin/games/{id}", 'App\Http\Controllers\GameController@adminShow')->name("admin.gamesCategory");

    // Admin create game with page specific category
    Route::get("/admin/game/create/{id}", 'App\Http\Controllers\GameController@create')->name("admin.gameCreate");

    // Admin create game with page specific category
    Route::post("/admin/game/store", 'App\Http\Controllers\GameController@store')->name("admin.gameStore");

    // Admin delete game
    Route::get("/admin/game/delete/{id}", 'App\Http\Controllers\GameController@destroy')->name("admin.gameDelete");

    // Admin edit game
    Route::get("/admin/game/edit/{id}", 'App\Http\Controllers\GameController@edit')->name("admin.gameEdit");

    // Admin update game
    Route::put("/admin/game/update/{id}", 'App\Http\Controllers\GameController@update')->name("admin.gameUpdate");

    // Admin page of add imgaes for game
    Route::get("/admin/game/show/{id}", 'App\Http\Controllers\GameController@show')->name("admin.gameShow");

    // Delete image for game
    Route::get("/admin/game/delete/game/{id}", 'App\Http\Controllers\GameController@deleteImage')->name("admin.gameDeleteImage");

    // Add images for game
    Route::post("/admin/game/add/images/{id}", 'App\Http\Controllers\GameController@addImages')->name("admin.gameAddImages");

    // Admin category page
    Route::get("/admin/category", 'App\Http\Controllers\CategoryController@indexAdmin')->name("admin.category");

    // Admin create category page
    Route::get("/admin/category/create", 'App\Http\Controllers\CategoryController@create')->name("admin.categoryCreate");

    // Admin update category page
    Route::get("/admin/category/edit/{id}", 'App\Http\Controllers\CategoryController@edit')->name("admin.categoryEdit");

    // Admin create category page
    Route::post("/admin/category/create", 'App\Http\Controllers\CategoryController@store')->name("admin.categoryStore");

    // Admin update category page
    Route::put("/admin/category/update/{id}", 'App\Http\Controllers\CategoryController@update')->name("admin.categoryUpdate");

    // Delete category
    Route::get("/admin/category/delete/{id}", 'App\Http\Controllers\CategoryController@destroy')->name("admin.categoryDelete");
    
    // Admin user page
    Route::get("/admin/user", 'App\Http\Controllers\UserController@indexAdmin')->name("admin.user");

    // Admin create user page
    Route::get("/admin/user/create", 'App\Http\Controllers\UserController@create')->name("admin.userCreate");

    // Admin update user page
    Route::get("/admin/user/edit/{id}", 'App\Http\Controllers\UserController@edit')->name("admin.userEdit");

    // Admin create user page
    Route::post("/admin/user/create", 'App\Http\Controllers\UserController@store')->name("admin.userStore");

    // Admin update user page
    Route::put("/admin/user/update/{id}", 'App\Http\Controllers\UserController@update')->name("admin.userUpdate");

    // Delete user
    Route::get("/admin/user/delete/{id}", 'App\Http\Controllers\UserController@destroy')->name("admin.userDelete");
});
