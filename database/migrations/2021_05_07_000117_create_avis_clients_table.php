<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvisClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis_clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idClient');
            $table->foreign('idClient')->references('id')->on('clients');

            $table->unsignedBigInteger('idChauffeur');
            $table->foreign('idChauffeur')->references('id')->on('chauffeurs');
            $table->text('avisPositive');
            $table->text('avisNegative');
            $table->unsignedInteger('raiting');
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
        Schema::dropIfExists('avis_clients');
    }
}
