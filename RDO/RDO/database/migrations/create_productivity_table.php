<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productivity', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('qntProduced');
			$table->unsignedInteger('accumulated');

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
        Schema::dropIfExists('productivity');
    }
}
