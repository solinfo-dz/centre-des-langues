<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number');
            $table->string('fullname');
            $table->string('depart');
            $table->date('hire_date');
            $table->integer('phone');
            $table->string('address');
            $table->string('city');
             $table->unsignedBigInteger('user_id');
    $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('clients');
    }
}
