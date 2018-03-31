<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Food;
use App\Restaurant;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // route is disabled, find all foods from menu
        return redirect('/menu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::id() != $request->restaurant_id){
            return response('Forbidden', 403);
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:1',
                'description' => 'required|string|max:255',
                'type' => 'required|string',
            ]);  

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $maxFoodID = DB::table('foods')
                ->max('id');

            $food = new Food;
            $food->id = $maxFoodID + 1;
            $food->name = $request->name;
            $food->price = $request->price;
            $food->description = $request->description;
            $food->restaurant_id = $request->restaurant_id;
            $food->type = $request->type;
            $food->save();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $results = Food::find($id);
        if (is_null($results)) {
            return response('Not Found', 404);
        }
        $restaurants = DB::table('restaurants')
                        ->join('users', 'users.id', '=', 'restaurants.id')
                        ->join('foods', 'foods.restaurant_id', '=', 'restaurants.id')
                        ->where('foods.name', $results->name)
                        ->select(
                            'restaurants.id',
                            'users.name',
                            'restaurants.address',
                            'restaurants.phone',
                            'foods.price'
                        )
                        ->distinct()->get();
        // TODO: make 404 if null
        return view('foods.foodDetail', [
            'food' => $results,
            'restaurants' => $restaurants,
            'show_navbar' => true,
            'trans_navbar' => false,
            'show_footer' => true
        ]);
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
        if(Auth::id() != $request->restaurant_id){
            return response('Forbidden', 403);
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:1',
                'description' => 'required|string|max:255',
                'type' => 'required|string',
            ]);  

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            DB::table('foods')
                ->where([
                    ['id', '=', $id],
                    ['restaurant_id', '=', $request->restaurant_id],
                ])    
                ->update([
                    'name' => $request->name,
                    'price' => $request->price,
                    'description' => $request->description,
                    'type' => $request->type,
                ]);
            return back();
        }
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

    /**
     * Find foods by it's type, can be halal or nonhalal
     *
     * @param  string type
     * @return \Illuminate\Http\Response
     */
    public function getFoodsByType($type)
    {
        if ($type != 'halal' && $type != 'nonhalal') {
            return redirect('/menu');
        }

        $results = DB::table('foods')
                ->select('name', 'price', 'type', 'id', 'description')
                ->where('type', $type)
                ->orderBy('name')
                ->distinct()
                ->paginate(10);

        return view('foods.foods', [
            'foods' => $results,
            'type' => $type,
            'show_navbar' => true,
            'trans_navbar' => false,
            'show_footer' => true
        ]);
    }
}
