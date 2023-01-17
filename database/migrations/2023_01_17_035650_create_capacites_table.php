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
        Schema::create('capacites', function (Blueprint $table) {
            $table->id();
            $table->string("nom_de_lactivite_de_renforcement_des_capacites")->nullable();
            $table->string("categorie")->nullable();
            $table->string("type_de_participant")->nullable();
            $table->string("nombre_de_participants_ivoirien_uniquement")->nullable();
            $table->string("nombre_total_de_participants")->nullable();
            $table->string("date_de_debut")->nullable();
            $table->string("duree_de_lactivite")->nullable();
            $table->string("cout_pour_les_participants")->nullable();
            $table->string("depenses_pour_le_renforcement_des_capacites")->nullable();
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
        Schema::dropIfExists('capacites');
    }
};
