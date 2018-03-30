<?php

namespace App\Http\Controllers;

use Validator;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userId = Auth::id();
        if (is_null($userId)) {
            return redirect('login');
        } else {
            $orders = DB::table('orders')
                ->join('foods', 'foods.id', '=', 'orders.food_id')
                ->join('restaurants', 'restaurants.id', '=', 'orders.restaurant_id')
                ->select(
                    'foods.name AS food_name', 
                    'restaurants.name AS restaurant_name', 
                    'orders.total', 
                    'orders.address', 
                    'orders.status', 
                    'orders.quantity',
                    'restaurants.phone AS restaurant_phone'
                )
                ->where('orders.user_id', '=', $userId)
                ->paginate(10);
            return view('orders.orders', [
                'orders' => $orders,
                'show_navbar' => true,
                'trans_navbar' => false,
                'show_footer' => true
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $food_id = $request->query('food_id');
        $restaurant_id = $request->query('restaurant_id');
        if ($food_id == null || $restaurant_id == null) {
            return redirect('menu');
        }
        $price = DB::table('foods')
                    ->where([
                        ['id', '=', $request->food_id],
                        ['restaurant_id', '=', $request->restaurant_id]
                    ])
                    ->select('price')
                    ->get();

        return view('orders.createOrder', [
            'food_id' => $food_id,
            'restaurant_id' => $restaurant_id,
            'price' => $price,
            'show_navbar' => true,
            'trans_navbar' => false,
            'show_footer' => true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price = DB::table('foods')
                    ->where([
                        ['id', '=', $request->food_id],
                        ['restaurant_id', '=', $request->restaurant_id]
                    ])
                    ->select('price')
                    ->get();

        if ($price->isEmpty()) {
            return back()->withInput()->withErrors(['food_id' => 'Food and restaurant does not match']);
        } else {
            $userId = Auth::id();
            if (is_null($userId)) {
                return redirect('login');
            }

            $validator = Validator::make($request->all(), [
                'quantity' => 'required|numeric|min:1',
                'address' => 'required'
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $order = new Order;
            $order->user_id = $userId;
            $order->food_id = $request->food_id;
            $order->restaurant_id = $request->restaurant_id;
            $order->quantity = $request->quantity;
            $order->status = "processed";
            $order->address = $request->address;
            $order->total = $request->quantity * $price[0]->price;

            $order->save();
            return redirect('orders');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
