<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->json('hashtags');
            $table->integer('budget');
            $table->string('logo');
            $table->integer('user_id');

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
        Schema::dropIfExists('assos');
    }
}
