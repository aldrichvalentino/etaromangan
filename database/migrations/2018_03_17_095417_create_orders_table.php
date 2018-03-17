<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('food_id')->unsigned();
            $table->integer('restaurant_id')->unsigned();
            $table->integer('quantity');
            $table->string('status');
            $table->text('address');
            $table->string('total');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('restrict');
            $table->foreign('food_id')
                ->references('id')->on('foods')
                ->onDelete('restrict');
            $table->foreign('restaurant_id')
                ->references('id')->on('restaurants')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
