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
        DB::table('users')->insert([
            'name' => ' WARUNG MAKAN KA’ ZAHRA',
            'email' => 'default@gmail.com',
            'password' => Hash::make('warungmakankazahra'),
            'image' => 'default.png',
            'isRestaurant' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('restaurants')->insert([
            'id' => 1,
            'phone' => '',
            'address' => 'JALAN DIPATI UKUR NO 42/60, LEBAK GEDE, COBLONG, BANDUNG',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // factory(App\Restaurant::class, 40)->create()->each(function ($restaurant) {
        //     factory(App\Food::class)->create(['id' => $restaurant->id, 'restaurant_id' => $restaurant->id]);
        // });
    }
}
