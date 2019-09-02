<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomCategorie', 100)->nullable()->default('text');
            $table->bigInteger('salaireDeBase')->nullable()->default(12);
            $table->bigInteger('primeAnciennete')->nullable()->default(12);
            $table->bigInteger('primeCaisse')->nullable()->default(12);
            $table->bigInteger('primeResponsabilite')->nullable()->default(12);
            $table->integer('indemniteLogement')->unsigned()->nullable()->default(12);
            $table->integer('indemniteRepresentation')->unsigned()->nullable()->default(12);
            $table->integer('primeHabillement')->unsigned()->nullable()->default(12);
            $table->integer('primeDeplacement')->unsigned()->nullable()->default(12);
            $table->integer('primeEncouragement')->unsigned()->nullable()->default(12);
            $table->integer('primeSante')->unsigned()->nullable()->default(12);
            $table->integer('primeTerrain')->unsigned()->nullable()->default(12);
            $table->integer('primeJourFerie')->unsigned()->nullable()->default(12);
            $table->integer('primeSemestrielle')->unsigned()->nullable()->default(12);
            $table->integer('primeOuvertureCompte')->unsigned()->nullable()->default(12);
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
        Schema::dropIfExists('categories');
    }
}
