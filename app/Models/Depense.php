<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;
    protected $fillable = ['type_darticle_achete',
                           'secteur_connexe',
                           'description_du_bienservice',
                           'nom_du_fournisseur',
                           'type_de_fournisseur',
                           'id_du_certificat_fournisseur',
                           'depenses_totales_prevues_pour_lannee_de_reference',
                           'paiement_reel_effectue_au_cours_de_la_periode_de_rapport',
                           'montant_restant_a_payer_pour_la_periode_de_declaration',

];
}
