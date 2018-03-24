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
        DB::table('restaurants')->insert([
            'name' => 'Resto X',
            'username' => 'restox',
            'address' => 'Jalan Sudirman',
            'phone' => '081513031489',
            'password' => bcrypt('hello'),
        ]);

        DB::table('restaurants')->insert([
            'name' => 'Resto Y',
            'username' => 'restoy',
            'address' => 'Jalan Ganesha',
            'phone' => '081513031489',
            'password' => bcrypt('hello'),
        ]);
    }
}
