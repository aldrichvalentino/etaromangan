<?php

namespace App\Http\Controllers;

use App\User;
use App\Food;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest()) {
            return redirect('login');
        } else {
            return view('pages.dashboard');
        }
    }

    /**
     * Display the foods of a restaurant
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getFoods($id)
    {
        if (Auth::id() == $id) {
            $foods = Food::where('restaurant_id', $id)->get();
            return view('pages.foodDashboard', ['foods' => $foods]);
        } else {
            return response('Forbidden', 403);
        }
    }

    /**
     * Display the foods of a restaurant
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editFood($id, $food_id)
    {
        if (Auth::id() == $id) {
            $food = Food::find($food_id);
            return view('pages.editFoodDashboard', ['food' => $food]);
        } else {
            return response('Forbidden', 403);
        }
    }

    /**
     * Show the form for adding new food.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addFood($id)
    {
        if (Auth::id() != $id) {
            return response('Forbidden', 403);
        } else {
            return view('pages.createFoodDashboard', ['restaurant_id' => Auth::id()]);
        }
    }

    /**
     * Display the order of a restaurant
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getOrders($id)
    {
        if (Auth::id() == $id) {
            $orders = DB::table('orders')
                ->join('users', 'users.id', '=', 'orders.user_id')
                ->join('foods', 'foods.id', '=', 'orders.food_id')
                ->where('orders.restaurant_id', $id)
                ->select([
                    'orders.id',
                    'users.name AS user_name',
                    'foods.name AS food_name',
                    'orders.quantity',
                    'orders.total',
                    'orders.status',
                    'orders.address',
                ])
                ->orderBy('orders.created_at', 'desc')
                ->get();
            return view('pages.orderDashboard', ['orders' => $orders]);
        } else {
            return response('Forbidden', 403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::id() != $id) {
            return redirect('login');
        } else {
            return view('pages.dashboard');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userData = User::find($id);
        $restaurantData = Restaurant::find($id);
        return view('pages.editRestaurant', ['userData' => $userData, 'restaurantData' => $restaurantData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
