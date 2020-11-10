<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('brand');
            $table->string('processor type');
            $table->string('series');
            $table->string('name');
            $table->string('model');
            $table->string('socket');
            $table->string('num of cores');
            $table->string('num of threades');
            $table->string('mtech');
            $table->string('memory type');
            $table->string('memory channel');
            $table->string('tdp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processors');
    }
}
