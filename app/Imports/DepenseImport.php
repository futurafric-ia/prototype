<?php

namespace App\Imports;

use App\Models\Depense;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DepenseImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    public function collection(Collection $collection)
    {
        // $cpte = 0;
        // foreach ($collection as $row) {
        //     $cpte++;
        //     if ($cpte <=10) {
        //         dump($row);
        //     } else {
        //         break;
        //     }
        foreach ($collection as $row) {
            // dd($row["nom_du_fournisseur"]);
            Depense::create([
               "compagnie_id" => $row["compagnie_id"],
               "type_darticle_achete" => $row["type_darticle_achete"],
               "secteur_connexe" => $row["secteur_connexe"],
               "description_du_bienservice" => $row["description_du_bienservice"],
               "nom_du_fournisseur" => ($row["nom_du_fournisseur"]),
               "type_de_fournisseur" => $row["type_de_fournisseur"],
               "id_du_certificat_fournisseur" => $row["id_du_certificat_fournisseur"],
               "depenses_totales_prevues_pour_lannee_de_reference" => $row["depenses_totales_prevues_pour_lannee_de_reference"],
               "paiement_reel_effectue_au_cours_de_la_periode_de_rapport" => $row["paiement_reel_effectue_au_cours_de_la_periode_de_rapport"],
               "montant_restant_a_payer_pour_la_periode_de_declaration" => $row["montant_restant_a_payer_pour_la_periode_de_declaration"]
            ]);
        }
    }
        // dd('fin');
}