<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrevisionDepense extends Model
{
    use HasFactory;
    protected $fillable = [
        'location_despace_de_bureau',
            'services_dhébergement',
            'location_équipement',
            'arpentage',
            'soudage_de_tuyaux_a_terre',
            'sablage_et_revêtement_de_tuyaux_a_terre',
            'travaux_de_construction_de_batiments_terre',
            'fabrication_structurelle',
            'gestion_des_dechets_non_dangereux',
            'gestion_des_dechets_dangereux',
            'services_de_stockage',
            'services_de_conciergerie_et_de_blanchisserie',
            'service_de_restauration',
            'approvisionnement_alimentaire',
            'services_de_soutien_administratif_gestion_installations',
            'services_soutien_immigration',
            'Permis_travail_demandes_visas_visas_arrivée_permis_activité_eau',
            'installations_depot',
            'services_de_courtage_en_douane',
            'emballage_exportation',
            'services_extermination_antiparasitaire',
            'Gestion_surveillance_fret',
            'services_approvisionnement_navires_platesformes',
            'services_essais_forage',
            'permis_travail_demandes_visas_visas_arrivée_permis_activité_eau',
            'prestations_etudes_environnementales',
            'services_transport_camionnage',
            'services_transport_ransport_terrestre',
            'services_métrologie',
            'ventilation',
            'services_nettoyage_industriel',
            'Services_sécurité',
            'installation_reseaux',
            'services_main_œuvre_équipage',
            'services_dragage',
            'services_assurance_locaux',
            'services_comptabilité',
            'services_juridiques_locaux',
            'services_medicaux',
            'services_de_soutien_aeronautique',
            'ingenierie_usinage',
            'services_marketing_publicite_locaux',
            'autre',
    ];
}
