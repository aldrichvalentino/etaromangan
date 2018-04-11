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
            'id' => 1,
            'restaurant_id' => 1,
            'name' => 'LONTONG BIASA',
            'price' => 10000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 2,
            'restaurant_id' => 1,
            'name' => 'LONTONG + TELOR',
            'price' => 13000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 3,
            'restaurant_id' => 1,
            'name' => 'LONTONG + TELOR + MIE GOMAK',
            'price' => 15000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 4,
            'restaurant_id' => 1,
            'name' => 'LONTONG + PERKEDEL',
            'price' => 14000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 5,
            'restaurant_id' => 1,
            'name' => 'LONTONG + TERI MEDAN',
            'price' => 16000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 6,
            'restaurant_id' => 1,
            'name' => 'LONTONG + RENDANG',
            'price' => 21000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 7,
            'restaurant_id' => 1,
            'name' => 'LONTONG RENDANG + TELOR',
            'price' => 23000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 8,
            'restaurant_id' => 1,
            'name' => 'SOTO MEDAN',
            'price' => 17000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 9,
            'restaurant_id' => 1,
            'name' => 'NASI GURIH BIASA',
            'price' => 10000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 10,
            'restaurant_id' => 1,
            'name' => 'NASI GURIH + TELOR',
            'price' => 13000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 11,
            'restaurant_id' => 1,
            'name' => 'NASI GURIH + RENDANG',
            'price' => 21000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 12,
            'restaurant_id' => 1,
            'name' => 'NASI GURIH RENDANG + TELOR',
            'price' => 23000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 13,
            'restaurant_id' => 1,
            'name' => 'NASI GURIH DENDENG PEDAS',
            'price' => 24000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 14,
            'restaurant_id' => 1,
            'name' => 'MIE GOMAK',
            'price' => 8000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 15,
            'restaurant_id' => 1,
            'name' => 'INDOMIE REBUS ALA MEDAN',
            'price' => 9000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 16,
            'restaurant_id' => 1,
            'name' => 'INDOMIE GORENG ALA MEDAN',
            'price' => 10000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 17,
            'restaurant_id' => 1,
            'name' => 'SOP MEDAN',
            'price' => 36000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 18,
            'restaurant_id' => 1,
            'name' => 'SOP BUNTUT',
            'price' => 36000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 19,
            'restaurant_id' => 1,
            'name' => 'LUPIS',
            'price' => 3000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 20,
            'restaurant_id' => 1,
            'name' => 'BAKSO TAHU',
            'price' => 3000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 21,
            'restaurant_id' => 1,
            'name' => 'PISANG GORENG',
            'price' => 3000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 22,
            'restaurant_id' => 1,
            'name' => 'BAKWAN',
            'price' => 2000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 23,
            'restaurant_id' => 1,
            'name' => 'DURIAN CUP',
            'price' => 23000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 24,
            'restaurant_id' => 1,
            'name' => 'LEMANG/PERBATANG',
            'price' => 35000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 25,
            'restaurant_id' => 1,
            'name' => 'MANDI (MANIS DINGIN)',
            'price' => 4000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 26,
            'restaurant_id' => 1,
            'name' => 'MAPAN (MANIS PANAS)',
            'price' => 4000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 27,
            'restaurant_id' => 1,
            'name' => 'SIRUP MARQUISA',
            'price' => 5000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 28,
            'restaurant_id' => 1,
            'name' => 'SIRUP KURNIA',
            'price' => 5000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 29,
            'restaurant_id' => 1,
            'name' => 'SODA MARKISA',
            'price' => 10000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 30,
            'restaurant_id' => 1,
            'name' => 'CAP BADAK',
            'price' => 12000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 31,
            'restaurant_id' => 1,
            'name' => 'TEH SUSU',
            'price' => 7000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 32,
            'restaurant_id' => 1,
            'name' => 'TEH TELOR',
            'price' => 8000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 33,
            'restaurant_id' => 1,
            'name' => 'TST (TEH SUSU TELOR)',
            'price' => 12000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 34,
            'restaurant_id' => 1,
            'name' => 'KST (KOPI SUSU TELOR)',
            'price' => 12000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 35,
            'restaurant_id' => 1,
            'name' => 'KOPI SIDIKALANG',
            'price' => 8000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 36,
            'restaurant_id' => 1,
            'name' => 'KOPI MANDAILING',
            'price' => 10000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 37,
            'restaurant_id' => 1,
            'name' => 'KOPI SUSU SIDIKALANG',
            'price' => 12000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('foods')->insert([
            'id' => 38,
            'restaurant_id' => 1,
            'name' => 'SODA GEMBIRA',
            'price' => 10000,
            'description' => '',
            'type' => 'halal',
            'image' => 'default_food.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
