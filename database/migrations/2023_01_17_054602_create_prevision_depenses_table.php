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
        Schema::create('prevision_depenses', function (Blueprint $table) {
            $table->id();
            $table->string('location_despace_de_bureau')->nullable();
            $table->string('services_dhébergement')->nullable();
            $table->string('location_équipement')->nullable();
            $table->string('arpentage')->nullable();
            $table->string('soudage_de_tuyaux_a_terre')->nullable();
            $table->text('sablage_et_revêtement_de_tuyaux_a_terre', 255)->nullable();
            $table->string('travaux_de_construction_de_batiments_terre')->nullable();
            $table->string('fabrication_structurelle')->nullable();
            $table->string('gestion_des_dechets_non_dangereux')->nullable();
            $table->string('gestion_des_dechets_dangereux')->nullable();
            $table->string('services_de_stockage')->nullable();
            $table->string('services_de_conciergerie_et_de_blanchisserie')->nullable();
            $table->string('service_de_restauration')->nullable();
            $table->string('approvisionnement_alimentaire')->nullable();
            $table->string('services_de_soutien_administratif_gestion_installations')->nullable();
            $table->string('services_soutien_immigration')->nullable();
            $table->string('permis_travail_demandes_visas_visas_arrivée_permis_activité_eau')->nullable();
            $table->string('installations_depot')->nullable();
            $table->string('services_de_courtage_en_douane')->nullable();
            $table->string('emballage_exportation')->nullable();
            $table->string('services_extermination_antiparasitaire')->nullable();
            $table->string('Gestion_surveillance_fret')->nullable();
            $table->string('services_approvisionnement_navires_platesformes')->nullable();
            $table->string('services_essais_forage')->nullable();
            $table->string('prestations_etudes_environnementales')->nullable();
            $table->string('services_transport_camionnage')->nullable();
            $table->string('services_transport_ransport_terrestre')->nullable();
            $table->string('services_métrologie')->nullable();
            $table->string('ventilation')->nullable();
            $table->string('services_nettoyage_industriel')->nullable();
            $table->string('Services_sécurité')->nullable();
            $table->string('installation_reseaux')->nullable();
            $table->string('services_main_œuvre_équipage')->nullable();
            $table->string('services_dragage')->nullable();
            $table->string('services_assurance_locaux')->nullable();
            $table->string('services_comptabilité')->nullable();
            $table->string('services_juridiques_locaux')->nullable();
            $table->string('services_medicaux')->nullable();
            $table->string('services_de_soutien_aeronautique')->nullable();
            $table->string('ingenierie_usinage')->nullable();
            $table->string('services_marketing_publicite_locaux')->nullable();
            $table->string('autre')->nullable();
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
        Schema::dropIfExists('prevision_depenses');
    }
};