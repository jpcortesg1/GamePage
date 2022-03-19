<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('games', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('developer');
        $table->string('description');
        $table->unsignedBigInteger('id_category');
        $table->foreign('id_category')->references('id')->on('categories');
        $table->string('releasedate');
        $table->integer('price');
        $table->integer('agerating');
        $table->integer('buyquantity');
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
        Schema::dropIfExists('games');
    }
};
