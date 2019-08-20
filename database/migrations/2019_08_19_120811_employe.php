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
        //
        Schema::create('employe', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nom', 100)->nullable();
        $table->string('prenoms', 100)->nullable();
        $table->char('sexe', 1)->default('M');
        
        $table->string('lieuNais', 100)->nullable();

        $table->string('sitMat', 100)->nullable();
        $table->smallInteger('nbEnfant')->nullable()->default(0);
        $table->string('addr', 100)->nullable();

        $table->string('numMat', 100)->unique()->default('text');
        $table->string('poste', 100)->nullable();
        $table->string('agence', 100)->nullable();
        $table->string('contrat', 100)->nullable()->default('CDI');

        $table->integer('votes')->unsigned()->nullable()->default(12);
        
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
