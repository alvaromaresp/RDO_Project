<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateC_WorkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_worker', function (Blueprint $table) {
            $table->increments('id');
            $table->shortText('name');

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
        Schema::dropIfExists('c_worker');
    }
}
