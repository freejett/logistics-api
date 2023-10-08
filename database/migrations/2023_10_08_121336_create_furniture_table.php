<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateFurnitureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::create('furniture', function (Blueprint $table) {
//            $table->id();
            $table->integerIncrements('id');
			$table->integer('furniture_type_id')->unsigned()->nullable();
			$table->integer('colour_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('furniture_type_id', 'fk_furniture_furniture_type_id')
                ->references('id')
                ->on('furniture_types');
            $table->foreign('colour_id', 'fk_furniture_colour_id')
                ->references('id')
                ->on('colours');
        });
//        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('furniture');
    }
}
