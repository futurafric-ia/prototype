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
        Schema::create('depenses', function (Blueprint $table) {
            $table->id();
            $table->string("type_darticle_achete")->nullable();
            $table->string("secteur_connexe")->nullable();
            $table->string("description_du_bienservice")->nullable();
            $table->string("nom_du_fournisseur")->nullable();
            $table->string("type_de_fournisseur")->nullable();
            $table->string("id_du_certificat_fournisseur")->nullable();
            $table->string("depenses_totales_prevues_pour_lannee_de_reference")->nullable();
            $table->string("paiement_reel_effectue_au_cours_de_la_periode_de_rapport")->nullable();
            $table->string("montant_restant_a_payer_pour_la_periode_de_declaration")->nullable();
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
        Schema::dropIfExists('depenses');
    }
};
