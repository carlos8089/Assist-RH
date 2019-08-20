<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('employe', function (Blueprint $table) {
            $table->foreign('poste')->references('libellePoste')->on('poste')->onDelete('cascade');
            $table->foreign('agence')->references('nomAgence')->on('agence')->onDelete('cascade');
            $table->foreign('contrat')->references('libelleContrat')->on('contrat')->onDelete('cascade');
           
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('employe_id')->references('id')->on('employe')->onDelete('cascade');
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
