<?php

namespace App\Http\Controllers;

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
        if(Auth::guest()){
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
        if(Auth::id() == $id){
            $foods = DB::table('foods')
                ->join('restaurants', 'restaurants.id', '=', 'foods.restaurant_id')
                ->where('restaurants.id', $id)
                ->get();
            return view('pages.foodDashboard', ['foods' => $foods]);
        } else {
            return response('Forbidden', 403);
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
        if(Auth::id() == $id){
            $orders = DB::table('orders')
                ->join('restaurants', 'restaurants.id', '=', 'orders.restaurant_id')
                ->where('restaurants.id', $id)
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
        if(Auth::id() != $id){
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
        //
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
