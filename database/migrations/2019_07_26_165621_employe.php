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
            $table->string('sitMat', 100)->nullable()->default('text');
            $table->smallInteger('nbEnfant')->nullable()->default(0);
            $table->timestamps();
        });

        /*la table utilisateur */
        Schema::create('emploi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libellePoste', 100)->nullable()->default('text');
            $table->string('agence', 100)->nullable()->default('text');
            $table->timestamps();
        });

        Schema::create('niveau', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom', 100)->unique();
            $table->string('slug', 100)->unique();
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
    }
}
