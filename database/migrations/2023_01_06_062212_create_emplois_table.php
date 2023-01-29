<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplois', function (Blueprint $table) {
            $table->id();
            $table->string("titre_demploi");
            $table->string("categorie_demploi");
            $table->string("classification_de_lemploi");
            $table->unsignedBigInteger("nombre_total_demployes");
            $table->unsignedBigInteger("nombre_divoiriens_employes");
            $table->unsignedBigInteger("nombre_total_dembauches");
            $table->unsignedBigInteger("nombre_de_divoiriens_embauches");
            $table->string("remuneration_totale_versee");
            $table->string("remuneration_totale_versee_aux_ivoiriens_uniquement");
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
        Schema::dropIfExists('emplois');
    }
};