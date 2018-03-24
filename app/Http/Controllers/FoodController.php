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
        $halal = $request->query('type');
        
        if($halal == null){
            $results = DB::table('foods')
                    ->select('name', 'type', 'id')
                    ->orderBy('name')
                    ->distinct()
                    ->get();
            return view('foods/foods', ['foods' => $results]);
        } else {
            $results = DB::table('foods')
                    ->select('name', 'type', 'id')
                    ->where('type', $halal)
                    ->orderBy('name')
                    ->distinct()
                    ->get();
            return view('foods/foods', ['foods' => $results]);
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $results = Food::find($id);
        $restaurants = DB::table('restaurants')
                        ->join('foods', 'foods.restaurant_id', '=', 'restaurants.id')
                        ->where('foods.name', $results->name)
                        ->select('restaurants.id', 
                                'restaurants.name', 
                                'restaurants.address', 
                                'restaurants.phone',
                                'foods.price')
                        ->distinct()->get();
        $results = Food::find($id);
        // TODO: make 404 if null
        return view('foods/foodDetail', ['food' => $results, 'restaurants' => $restaurants]);
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
