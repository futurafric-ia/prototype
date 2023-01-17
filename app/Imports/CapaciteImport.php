<?php

namespace App\Imports;

use App\Models\Capacite;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CapaciteImport implements ToCollection,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $collection)
    {
        // dd($collection);
        foreach ($collection as $row) {

            Capacite::create([
               "nom_de_lactivite_de_renforcement_des_capacites" => $row["nom_de_lactivite_de_renforcement_des_capacites"],
               "categorie" => $row["categorie"],
               "type_de_participant" => $row["type_de_participant"],
               "nombre_de_participants_ivoirien_uniquement" => $row["nombre_de_participants_ivoirien_uniquement"],
               "nombre_total_de_participants" => $row["nombre_total_de_participants"],
               "date_de_debut" => $row["date_de_debut"],
               "duree_de_lactivite" => $row["duree_de_lactivite"],
               "cout_pour_les_participants" => $row["cout_pour_les_participants"],
               "depenses_pour_le_renforcement_des_capacites" => $row["depenses_pour_le_renforcement_des_capacites"],
            ]);

    }
    }

}
