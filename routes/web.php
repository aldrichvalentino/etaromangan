<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Static routes */
Route::get('/', function () {
    return view('pages.index', [
        'show_navbar' => true,
        'show_footer' => true
    ]);
});

Route::get('/menu', function () {
    return view('pages.menu', [
        'show_navbar' => true,
        'trans_navbar' => false,
        'show_footer' => true
    ]);
});

Route::get('/menu/{type}', 'FoodController@getFoodsByType');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

/* Resource routes */
Route::resource('foods', 'FoodController');
Route::resource('orders', 'OrderController');
Route::resource('users', 'UserController');
