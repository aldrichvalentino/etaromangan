<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplies', function (Blueprint $table) {
            $table->integer('food_id')->unsigned();
            $table->integer('restaurant_id')->unsigned();
            $table->timestamps();

            // Constraints
            $table->primary(['food_id', 'restaurant_id']);
            $table->foreign('food_id')
                ->references('id')->on('foods')
                ->onDelete('cascade');
            $table->foreign('restaurant_id')
                ->references('id')->on('restaurants')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplies');
    }
}
