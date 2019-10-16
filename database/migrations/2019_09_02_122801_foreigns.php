<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('postes', function(Blueprint $table){
            $table->foreign('categorie_id')->references('id')->on('categories')
                                    ->onDelete('cascade')->onUpdate('cascade');
        });


        Schema::table('employes', function(Blueprint $table){
            $table->foreign('poste_id')->references('id')->on('postes')
                                    ->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('employes', function(Blueprint $table){
            $table->foreign('agence_id')->references('id')->on('agences')
                                    ->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('employes', function(Blueprint $table){
            $table->foreign('contrat_id')->references('id')->on('contrats')
                                    ->onDelete('cascade')->onUpdate('cascade');
        });


        Schema::table('bulletins', function(Blueprint $table){
            $table->foreign('employe_id')->references('id')->on('employes')
                                    ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     
    public function down()
    {
        Schema::table('postes',function(Blueprint $table){
            $table->dropForeign('postes_categorie_id_foreign');
        });
        Schema::table('bulletins',function(Blueprint $table){
            $table->dropForeign('bulletins_employe_id_foreign');
        });
        Schema::table('employes',function(Blueprint $table){
            $table->dropForeign('employes_contrat_id_foreign');
        });
        Schema::table('employes',function(Blueprint $table){
            $table->dropForeign('employes_agence_id_foreign');
        });
        Schema::table('employes',function(Blueprint $table){
            $table->dropForeign('postes_categorie_id_foreign');
        });
    }
    
}
