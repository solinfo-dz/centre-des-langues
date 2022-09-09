<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('quittance')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('wilaya')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('commune')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('Tel')->default('000-00-00-00');
          
            $table->string('email')->unique();
            
            $table->string('horaire_choisi')->nullable();
            $table->string('qualite_condidat')->nullable();
            $table->string('faculte')->nullable();
            $table->string('dpt')->nullable();
            $table->string('photo', 100);
            $table->string('langue_choisi')->nullable();
            $table->string('profession')->nullable();
            $table->string('الاسم')->nullable();
            $table->string('اللقب')->nullable();
            $table->string('الولاية')->nullable();
            
            $table->string('البلدية')->nullable();
            $table->string('الجنسية')->nullable();
          
            $table->string('المهنة')->nullable();
            $table->string('التوقيت_المختار')->nullable();
            
            

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
