<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClimateConditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('climate_condition', function (Blueprint $table) {
            $table->increments('id');
           	$table->enum('day_shift', ['morning', 'afternoon', 'night']);
			$table->enum('type', ['good', 'bad']);
			$table->longText('description');

			$table->unsignedInteger('rdo_id');
  			$table->foreign('rdo_id')->references('id')->on('rdo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('climate_condition');
    }
}
