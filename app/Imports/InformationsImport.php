<?php

namespace App\Imports;

use App\Models\Informations;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;

class InformationsImport implements ToModel, WithHeadingRow, WithMappedCells
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function mapping(): array
    {
        return [
            'nom_de_lentreprise_soumettant_le_rapport'  => 'F8',
            'id_de_lentreprise_soumettant_le_rapport'  => 'F9',
            'type_de_compagnie'  => 'F10',
            'periode_de_rapport'  => 'F11',
            'annee_de_declaration'  => 'F12',
            'date'  => 'F13',
            'co_prestataire' => 'F14',
            'nom_du_chef_dentreprise_ou_du_representant_dument_autorise' => 'F15',
            'designation_du_chef_dentreprise_ou_du_représentant_dument_autorise' => 'F16',
        ];
    }
    public function model(array $row)
    {
        Informations::create([
            'nom_de_lentreprise_soumettant_le_rapport'  => $row["nom_de_lentreprise_soumettant_le_rapport"],
            'id_de_lentreprise_soumettant_le_rapport'  => $row["id_de_lentreprise_soumettant_le_rapport"],
            'type_de_compagnie'  => $row["type_de_compagnie"],
            'periode_de_rapport'  => $row["periode_de_rapport"],
            'annee_de_declaration'  => $row["annee_de_declaration"],
            'date'  => $row["date"],
            'co_prestataire' => $row["co_prestataire"],
            'nom_du_chef_dentreprise_ou_du_representant_dument_autorise' => $row["nom_du_chef_dentreprise_ou_du_representant_dument_autorise"],
            'designation_du_chef_dentreprise' => $row["designation_du_chef_dentreprise_ou_du_représentant_dument_autorise"]

        ]);
    }
}