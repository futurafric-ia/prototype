<?php

namespace App\Imports;

use App\Models\Emploi;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmploiImport implements ToArray, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function array(array $collection)
    {
        // dd($collection);
        foreach ($collection as $data) {
            Emploi::create([
                    "titre_demploi" => $data["titre_demploi"],
                    "categorie_demploi" => $data["categorie_demploi"],
                    "classification_de_lemploi" => $data["classification_de_lemploi"],
                    "nombre_total_demployes" => $data["nombre_total_demployes"],
                    "nombre_divoiriens_employes" => $data["nombre_divoiriens_employes"],
                    "nombre_total_dembauches" => $data["nombre_total_dembauches"],
                    "nombre_de_divoiriens_embauches" => $data["nombre_de_divoiriens_embauches"],
                    "remuneration_totale_versee" => $data["remuneration_totale_versee"],
                    "remuneration_totale_versee_aux_ivoiriens_uniquement" => $data["remuneration_totale_versee_aux_ivoiriens_uniquement"]
            ]);
        }
    }
}