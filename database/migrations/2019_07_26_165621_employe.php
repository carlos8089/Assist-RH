<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* la table employe */
        Schema::create('employe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom', 100)->nullable()->default('text');
            $table->string('prenoms', 100)->nullable()->default('text');
            $table->char('sexe', 1)->default('M');
            $table->dateTime('dateNais')->nullable()->default(new DateTime());
            $table->string('lieuNais', 100)->nullable()->default('text');
            $table->string('sitMat', 100)->nullable()->default('text');
            $table->smallInteger('nbEnfant')->nullable()->default(0);
            $table->string('addr', 100)->nullable()->default('text');
            $table->dateTime('dateEmbauche')->nullable()->default(new DateTime());
            
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
        //
        Schema::dropIfExists('employe');
    }
}
