<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Agence extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('agence', function (Blueprint $table) {
            $table->bigIncrements('idAgence');
            $table->string('nomAgence', 100)->nullable()->default('text')->index();
            $table->string('addrAgence', 100)->nullable()->default('text');
            $table->integer('NumTelAgence')->unsigned()->nullable()->default(12);
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
        Schema::dropIfExists('agence');
    }
}
