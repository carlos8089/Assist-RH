<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom', 100)->nullable();
            $table->string('prenoms', 100)->nullable();
            $table->char('sexe', 1)->default('M');
           
            $table->string('dateNais', 100)->nullable()->format('dd/mm/yyyy');
            $table->string('lieuNais', 100)->nullable();

            $table->string('sitMat', 100)->nullable();
            $table->smallInteger('nbEnfant')->nullable()->default(0);
            $table->string('addr', 100)->nullable();

            $table->string('numMat', 100)->unique();
            $table->string('poste', 100)->nullable();
            $table->string('agence', 100)->nullable();
            $table->string('contrat', 100)->nullable()->default('CDI');

            $table->timestamp('dateEmbauche')->default(DB::raw('CURRENT_TIMESTAMP'));
            
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
        Schema::dropIfExists('employes');
    }
}
