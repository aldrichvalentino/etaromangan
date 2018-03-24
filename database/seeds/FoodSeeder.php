<?php

use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            'name' => 'Pork',
            'price' => '50000',
            'type' => 'nonhalal',
            'id' => 1,
            'restaurant_id' => 1,
        ]);

        DB::table('foods')->insert([
            'name' => 'Lamb',
            'price' => '40000',
            'type' => 'halal',
            'id' => 2,
            'restaurant_id' => 2,
        ]);

        DB::table('foods')->insert([
            'name' => 'Pork',
            'price' => '55000',
            'type' => 'nonhalal',
            'id' => 1,
            'restaurant_id' => 2,
        ]);
        
        DB::table('foods')->insert([
            'name' => 'Fish',
            'price' => '45000',
            'type' => 'halal',
            'id' => 3,
            'restaurant_id' => 2,
        ]);
    }
}
