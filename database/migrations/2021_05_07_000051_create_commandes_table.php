<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idClient');
            $table->foreign('idClient')->references('id')->on('clients');

            $table->unsignedBigInteger('idChauffeur')->nullable();
            $table->foreign('idChauffeur')->references('id')->on('chauffeurs');

            $table->string('depart');
            $table->string('arivee');
            $table->string('status');
            $table->string('type_vehicule');
            $table->timestamp('date_acceptation')->nullable();
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
        Schema::dropIfExists('commandes');
    }
}
