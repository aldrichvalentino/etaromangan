<?php

use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Restaurant::class, 40)->create()->each(function ($restaurant) {
            factory(App\Food::class)->create(['id' => $restaurant->id, 'restaurant_id' => $restaurant->id]);
        });
    }
}
