<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Food;
use App\Restaurant;

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
        //
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
                ->select('name', 'price', 'type', 'id')
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
