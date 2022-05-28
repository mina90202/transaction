<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentersidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centersides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('record');
            $table->string('type');
            $table->date('date');
            $table->integer('atm_id')->nullable();
            $table->double('difference')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centersides');
    }
}
