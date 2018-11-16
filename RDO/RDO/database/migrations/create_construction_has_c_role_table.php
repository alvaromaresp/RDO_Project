<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstructionHasC_RoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('construction_has_c_role', function (Blueprint $table) {
			$table->unsignedInteger('construction_id');
  			$table->foreign('construction_id')->references('id')->on('construction');

			$table->unsignedInteger('c_role_id');
  			$table->foreign('c_role_id')->references('id')->on('c_role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('construction_has_c_role');
    }
}
