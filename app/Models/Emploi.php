<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;
    protected $fillable = ["titre_demploi",
    "categorie_demploi",
    "classification_de_lemploi",
    "nombre_total_demployes",
    "nombre_divoiriens_employes",
    "nombre_total_dembauches",
    "nombre_de_divoiriens_embauches",
    "remuneration_totale_versee",
    "remuneration_totale_versee_aux_ivoiriens_uniquement"];
}
