<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informations extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_de_lentreprise_soumettant_le_rapport',
        'id_de_lentreprise_soumettant_le_rapport',
        'type_de_compagnie',
        'periode_de_rapport',
        'annee_de_declaration',
        'date',
        'co_prestataire',
        'nom_du_chef_dentreprise_ou_du_representant_dument_autorise',
        'designation_du_chef_dentreprise',
];
}
