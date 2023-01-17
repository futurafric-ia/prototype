<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string("nom_de_lentreprise_soumettant_le_rapport")->nullable();
            $table->string("id_de_lentreprise_soumettant_le_rapport")->nullable();
            $table->string("type_de_compagnie")->nullable();
            $table->string("periode_de_rapport")->nullable();
            $table->string("annee_de_declaration")->nullable();
            $table->string("date")->nullable();
            $table->string("co_prestataire")->nullable();
            $table->string("nom_du_chef_dentreprise_ou_du_representant_dument_autorise")->nullable();
            $table->string("designation_du_chef_dentreprise")->nullable();
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
        Schema::dropIfExists('informations');
    }
};
