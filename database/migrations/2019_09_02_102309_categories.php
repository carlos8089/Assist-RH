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
            $table->bigInteger('categorie_salaireDeBase')->nullable()->default(12);
            $table->bigInteger('categorie_primeAnciennete')->nullable()->default(12);
            $table->bigInteger('categorie_primeCaisse')->nullable()->default(12);
            $table->bigInteger('categorie_primeResponsabilite')->nullable()->default(12);
            $table->integer('categorie_indemniteLogement')->unsigned()->nullable()->default(12);
            $table->integer('categorie_indemniteRepresentation')->unsigned()->nullable()->default(12);
            $table->integer('categorie_primeHabillement')->unsigned()->nullable()->default(12);
            $table->integer('categorie_primeDeplacement')->unsigned()->nullable()->default(12);
            $table->integer('categorie_primeEncouragement')->unsigned()->nullable()->default(12);
            $table->integer('categorie_primeSante')->unsigned()->nullable()->default(12);
            $table->integer('categorie_primeTerrain')->unsigned()->nullable()->default(12);
            $table->integer('categorie_primeJourFerie')->unsigned()->nullable()->default(12);
            $table->integer('categorie_primeSemestrielle')->unsigned()->nullable()->default(12);
            $table->integer('categorie_primeOuvertureCompte')->unsigned()->nullable()->default(12);
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
