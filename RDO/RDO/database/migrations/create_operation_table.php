<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('description');
			$table->timeTz('start_time');
			$table->timeTz('end_time');
			$table->mediumText('unity');

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
        Schema::dropIfExists('operation');
    }
}
