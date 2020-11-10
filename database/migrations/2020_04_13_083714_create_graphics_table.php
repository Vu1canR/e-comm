<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraphicsCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graphics_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('price');
            $table->string('model');
            $table->string('brand');
            $table->string('name');
            $table->string('memory size');
            $table->string('core clock');
            $table->string('memory clock');
            $table->string('memory type');
            $table->binary('memory interface');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graphics_cards');
    }
}
