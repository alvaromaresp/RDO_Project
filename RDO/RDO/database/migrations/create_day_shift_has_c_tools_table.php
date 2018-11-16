<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDay_ShiftHasc_toolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_shift_has_c_tool', function (Blueprint $table) {
			$table->unsignedInteger('day_shift_id');
  			$table->foreign('day_shift_id')->references('id')->on('day_shift');

			$table->unsignedInteger('c_tool_id');
  			$table->foreign('c_tool_id')->references('id')->on('c_tool');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('day_shift_has_c_tool');
    }
}
