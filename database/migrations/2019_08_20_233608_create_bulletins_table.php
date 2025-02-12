<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBulletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulletins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employe_id')->unsigned()->nullable()->default(12);
            $table->smallInteger('anciennete')->nullable()->default(12);
            $table->string('libelleContrat', 100)->nullable()->default('text');
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

            $table->double('CNSS', 5, 2)->nullable()->default(0.00);
            $table->double('IRPP', 5, 2)->nullable()->default(0.00);
            $table->double('TCS', 5, 2)->nullable()->default(0.00);
            $table->double('cotisationMutuelle', 5, 2)->nullable()->default(0.00);
            $table->integer('pretImmobilier')->unsigned()->nullable()->default(12);
            $table->double('TS', 5, 2)->nullable()->default(0.00);

            $table->string('typePaiement', 100)->nullable()->default('text');
            $table->string('banque', 100)->nullable()->default('text');
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
        Schema::dropIfExists('bulletins');
    }
}
