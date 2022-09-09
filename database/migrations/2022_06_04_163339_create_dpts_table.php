<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dpts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faculte_id')->unsigned();
            $table->string('name');
            
            $table->foreign('faculte_id')->references('id')->on('facultes');
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
        Schema::dropIfExists('dpts');
    }
}
