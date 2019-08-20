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
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
       
        Schema::table('employe', function(Blueprint $table){
            $table->dropForeign('poste');
            $table->dropForeign('agence_employe_nomAgence_foreign');
            $table->dropForeign('contrat_employe_libelleContrat_foreign');
            $table->dropColumn('agence');
            $table->dropColumn('contrat');
            $table->dropColumn('poste');
        });
    }
}
