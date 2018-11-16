<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationHasOccurrenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation_has_occurrence', function (Blueprint $table) {
				$table->unsignedInteger('operation_id');
	  			$table->foreign('operation_id')->references('id')->on('operation');

				$table->unsignedInteger('occurrence_id');
				$table->foreign('occurrence_id')->references('id')->on('occurrence');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operation_has_occurrence');
    }
}
