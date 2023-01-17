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
            'location_despace_de_bureau'  => 'A2',
            'services_dhébergement'  => 'B3',
            'location_équipement'  => 'B4',
            'arpentage'  => 'B5',
            'soudage_de_tuyaux_a_terre'  => 'B6',
            'sablage_et_revêtement_de_tuyaux_a_terre'  => 'B7',
            'travaux_de_construction_de_batiments_terre' => 'B8',
            'fabrication_structurelle' => 'B9',
            'gestion_des_dechets_non_dangereux' => 'B10',
            'gestion_des_dechets_dangereux' => 'B11',
            'services_de_stockage' => 'B12',
            'services_de_conciergerie_et_de_blanchisserie' => 'B13',
            'service_de_restauration' => 'B14',
            'approvisionnement_alimentaire' => 'B15',
            'services_de_soutien_administratif_gestion_installations' => 'B16',
            'services_soutien_immigration' => 'B17',
            'permis_travail_demandes_visas_visas_arrivée_permis_activité_eau' => 'B18',
            'installations_depot' => 'B19',
            'services_de_courtage_en_douane' => 'B20',
            'emballage_exportation' => 'B21',
            'services_extermination_antiparasitaire' => 'B22',
            'Gestion_surveillance_fret' => 'B23',
            'services_approvisionnement_navires_platesformes' => 'B24',
            'services_essais_forage' => 'B25',
            'prestations_etudes_environnementales' => 'B26',
            'services_transport_camionnage' => 'B27',
            'services_transport_ransport_terrestre' => 'B28',
            'services_métrologie' => 'B29',
            'ventilation' => 'B30',
            'services_nettoyage_industriel' => 'B31',
            'Services_sécurité' => 'B32',
            'installation_reseaux' => 'B33',
            'services_main_œuvre_équipage' => 'B34',
            'services_dragage' => 'B35',
            'services_assurance_locaux' => 'B36',
            'services_comptabilité' => 'B37',
            'services_juridiques_locaux' => 'B38',
            'services_medicaux' => 'B39',
            'services_de_soutien_aeronautique' => 'B40',
            'ingenierie_usinage' => 'B41',
            'services_marketing_publicite_locaux' => 'B42',
            'autre' => 'B43',
        ];
    }
    public function model(array $row)
    {
        // dd($row);
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
