<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->integer('restaurant_id')->unsigned();
            $table->string('name');
            $table->string('price', 8);
            $table->string('description');
            $table->enum('type', ['halal', 'nonhalal']);
            $table->timestamps();

            $table->foreign('restaurant_id')
                ->references('id')->on('restaurants')
                ->onDelete('restrict');
            $table->primary(['id','restaurant_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
        Schema::dropIfExists('restaurants');
    }
}
