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
        $halal = $request->query('halal');
        
        if($halal == null){
            return view('foods/foods', ['foods' => Food::all()]);
        } else {
            return view('foods/foods', ['foods' => Food::where('halal', $halal)->get()]);
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurants = DB::table('restaurants')
                        ->join('supplies', 'supplies.restaurant_id', '=', 'restaurants.id')
                        ->join('foods', 'supplies.food_id', '=', 'foods.id')
                        ->where('foods.id', '=', $id)
                        ->select('restaurants.name', 'restaurants.address', 'restaurants.phone')
                        ->get();
        return view('foods/foodDetail', ['food' => Food::find($id), 'restaurants' => $restaurants]);
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
