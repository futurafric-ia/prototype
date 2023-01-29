<?php

namespace App\Imports;

use App\Models\PrevisionDepense;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;

class PrevisionDepenseImport implements ToModel, WithHeadingRow, WithMappedCells
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function mapping(): array
    {
        return [
            'location_despace_de_bureau'  => 'C12',
            'services_dhébergement'  => 'C13',
            'location_équipement'  => 'C14',
            'arpentage'  => 'C15',
            'soudage_de_tuyaux_a_terre'  => 'C16',
            'sablage_et_revêtement_de_tuyaux_a_terre'  => 'C17',
            'travaux_de_construction_de_batiments_terre' => 'C18',
            'fabrication_structurelle' => 'C19',
            'gestion_des_dechets_non_dangereux' => 'C20',
            'gestion_des_dechets_dangereux' => 'C21',
            'services_de_stockage' => 'C22',
            'services_de_conciergerie_et_de_blanchisserie' => 'C23',
            'service_de_restauration' => 'C24',
            'approvisionnement_alimentaire' => 'C25',
            'services_de_soutien_administratif_gestion_installations' => 'C26',
            'services_soutien_immigration' => 'C27',
            'permis_travail_demandes_visas_visas_arrivée_permis_activité_eau' => 'C28',
            'installations_depot' => 'C29',
            'services_de_courtage_en_douane' => 'C30',
            'emballage_exportation' => 'C31',
            'services_extermination_antiparasitaire' => 'C32',
            'Gestion_surveillance_fret' => 'C33',
            'services_approvisionnement_navires_platesformes' => 'C34',
            'services_essais_forage' => 'C35',
            'prestations_etudes_environnementales' => 'C36',
            'services_transport_camionnage' => 'C37',
            'services_transport_ransport_terrestre' => 'C38',
            'services_métrologie' => 'C39',
            'ventilation' => 'C40',
            'services_nettoyage_industriel' => 'C41',
            'Services_sécurité' => 'C42',
            'installation_reseaux' => 'C43',
            'services_main_œuvre_équipage' => 'C44',
            'services_dragage' => 'C45',
            'services_assurance_locaux' => 'C46',
            'services_comptabilité' => 'C47',
            'services_juridiques_locaux' => 'C48',
            'services_medicaux' => 'C49',
            'services_de_soutien_aeronautique' => 'C50',
            'ingenierie_usinage' => 'C51',
            'services_marketing_publicite_locaux' => 'C52',
            'autre' => 'C53',
        ];
    }
    public function model(array $row)
    {
        // dd($row['location_despace_de_bureau']);
        return new PrevisionDepense([
            'location_despace_de_bureau'  => $row['location_despace_de_bureau'],
            'services_dhébergement'  => $row['services_dhébergement'],
            'location_équipement'  => $row['location_équipement'],
            'arpentage'  => $row['arpentage'],
            'soudage_de_tuyaux_a_terre'  => $row['soudage_de_tuyaux_a_terre'],
            'sablage_et_revêtement_de_tuyaux_a_terre'  => $row['sablage_et_revêtement_de_tuyaux_a_terre'],
            'travaux_de_construction_de_batiments_terre' => $row['travaux_de_construction_de_batiments_terre'],
            'fabrication_structurelle' => $row['fabrication_structurelle'],
            'gestion_des_dechets_non_dangereux' => $row['gestion_des_dechets_non_dangereux'],
            'gestion_des_dechets_dangereux' => $row['gestion_des_dechets_non_dangereux'],
            'services_de_stockage' => $row['services_de_stockage'],
            'services_de_conciergerie_et_de_blanchisserie' => $row['services_de_conciergerie_et_de_blanchisserie'],
            'service_de_restauration' => $row['services_de_conciergerie_et_de_blanchisserie'],
            'approvisionnement_alimentaire' => $row['approvisionnement_alimentaire'],
            'services_de_soutien_administratif_gestion_installations' => $row['services_de_soutien_administratif_gestion_installations'],
            'services_soutien_immigration' => $row['services_soutien_immigration'],
            'permis_travail_demandes_visas_visas_arrivée_permis_activité_eau' => $row['permis_travail_demandes_visas_visas_arrivée_permis_activité_eau'],
            'installations_depot' => $row['installations_depot'],
            'services_de_courtage_en_douane' => $row['services_de_courtage_en_douane'],
            'emballage_exportation' => $row['emballage_exportation'],
            'services_extermination_antiparasitaire' => $row['services_extermination_antiparasitaire'],
            'Gestion_surveillance_fret' => $row['Gestion_surveillance_fret'],
            'services_approvisionnement_navires_platesformes' => $row['services_approvisionnement_navires_platesformes'],
            'services_essais_forage' => $row['services_essais_forage'],
            'prestations_etudes_environnementales' => $row['prestations_etudes_environnementales'],
            'services_transport_camionnage' => $row['services_transport_camionnage'],
            'services_transport_ransport_terrestre' => $row['services_transport_ransport_terrestre'],
            'services_métrologie' => $row['services_métrologie'],
            'ventilation' => $row['ventilation'],
            'services_nettoyage_industriel' => $row['services_nettoyage_industriel'],
            'Services_sécurité' => $row['Services_sécurité'],
            'installation_reseaux' => $row['installation_reseaux'],
            'services_main_œuvre_équipage' => $row['services_main_œuvre_équipage'],
            'services_dragage' => $row['services_dragage'],
            'services_assurance_locaux' => $row['services_assurance_locaux'],
            'services_comptabilité' => $row['services_comptabilité'],
            'services_juridiques_locaux' => $row['services_juridiques_locaux'],
            'services_medicaux' => $row['services_medicaux'],
            'services_de_soutien_aeronautique' => $row['services_de_soutien_aeronautique'],
            'ingenierie_usinage' => $row['ingenierie_usinage'],
            'services_marketing_publicite_locaux' =>$row['services_marketing_publicite_locaux'],
            'autre' => $row['autre'],
        ]);
    }
}