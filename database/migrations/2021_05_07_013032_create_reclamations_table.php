<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idClient');
            $table->foreign('idClient')->references('id')->on('clients');

            $table->unsignedBigInteger('idChauffeur')->nullable();
            $table->foreign('idChauffeur')->references('id')->on('chauffeurs');
            $table->string('sujet');
            $table->text('reclamation');
            $table->string('status');
            $table->string('effectuer_par');
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
        Schema::dropIfExists('reclamations');
    }
}
