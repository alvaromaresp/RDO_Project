<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnexHasRDOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annex_has_rdo', function (Blueprint $table) {
			$table->unsignedInteger('rdo_id');
  			$table->foreign('rdo_id')->references('id')->on('rdo');

			$table->unsignedInteger('annex_id');
  			$table->foreign('annex_id')->references('id')->on('annex');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annex_has_rdo');
    }
}
