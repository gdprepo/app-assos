<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssosUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('assos_user', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->unsignedinteger('assos_id');
        //     // $table->unsignedinteger('user_id');


        //     $table->foreign('assos_id')
        //         ->references('id')
        //         ->on('assos')
        //         ->onDelete('cascade');
        //     $table->foreign('user_id')
        //         ->references('id')
        //         ->on('users')
        //         ->onDelete('cascade');

        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('assos_user');
    }
}
