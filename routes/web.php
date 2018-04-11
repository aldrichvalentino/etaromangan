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
Route::get('/', 'HomeController@index')->name('index');

Route::get('/menu', 'HomeController@menu')->name('menu');

Route::get('/menu/{type}', 'FoodController@getFoodsByType');

/* Dashboard Routes */
Route::get('/dashboard/{id}', 'RestaurantController@show')->name('dashboard');
Route::get('/dashboard/{id}/foods', 'RestaurantController@getFoods')->name('dashboard.foods');
Route::get('/dashboard/{id}/orders', 'RestaurantController@getOrders')->name('dashboard.orders');
Route::get('/dashboard/{id}/edit', 'RestaurantController@edit')->name('dashboard.edit');
Route::get('/dashboard/{id}/foods/{food_id}/edit', 'RestaurantController@editFood');
Route::get('/dashboard/{id}/foods/create', 'RestaurantController@addFood');

/* Resource routes */
Route::resource('foods', 'FoodController');
Route::resource('orders', 'OrderController');
Route::resource('users', 'UserController');
