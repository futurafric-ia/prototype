<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacite extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom_de_lactivite_de_renforcement_des_capacites",
        "categorie",
        "type_de_participant",
        "nombre_de_participants_ivoirien_uniquement",
        "nombre_total_de_participants" ,
        "id_du_certificat_fournisseur",
        "date_de_debut",
        "duree_de_lactivite",
        "cout_pour_les_participants",
        "depenses_pour_le_renforcement_des_capacites",
    ];
}
