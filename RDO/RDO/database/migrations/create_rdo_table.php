<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRDOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdo', function (Blueprint $table) {
            $table->increments('id');

			$table->unsignedInteger('construction_id');
  			$table->foreign('construction_id')->references('id')->on('construction');

			$table->date('date');
			$table->unsignedInteger('percentage_completed');
			$table->unsignedInteger('percentage_predicted');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rdo');
    }
}
