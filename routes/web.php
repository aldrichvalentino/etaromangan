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
    return view('pages.home', [
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

/* Dashboard Routes */
Route::get('/dashboard/{id}', 'RestaurantController@show')->name('dashboard');
Route::get('/dashboard/{id}/foods', 'RestaurantController@getFoods')->name('dashboard.foods');
Route::get('/dashboard/{id}/orders', 'RestaurantController@getOrders')->name('dashboard.orders');

/* Resource routes */
Route::resource('foods', 'FoodController');
Route::resource('orders', 'OrderController');
Route::resource('users', 'UserController');
