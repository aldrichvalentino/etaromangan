<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RestaurantSeeder::class);
        // $this->call(FoodSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
