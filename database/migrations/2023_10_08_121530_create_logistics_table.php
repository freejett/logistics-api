<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateLogisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::create('logistics', function (Blueprint $table) {
            $table->id();
			$table->unsignedInteger('furniture_id');
			$table->unsignedInteger('warehouse_id');
			$table->dateTime('arrival_date');
			$table->dateTime('departure_date');
            $table->timestamps();

            $table->foreign('furniture_id', 'fk_logistics_furniture_id')
                ->references('id')
                ->on('furniture');
            $table->foreign('warehouse_id', 'fk_logistics_warehouse_id')
                ->references('id')
                ->on('warehouse');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logistics');
    }
}
