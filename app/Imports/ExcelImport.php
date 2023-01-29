<?php

namespace App\Imports;

use App\Models\Excel;
use Illuminate\Foundation\Testing\WithFaker;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class ExcelImport implements WithMultipleSheets
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function Sheets(): array
    {
        return [
             "Informations Générales" => new InformationsImport(),
             "Dépenses" => new DepenseImport(),
             "Emplois" => new EmploiImport(),
             "Renforcement des Capacités" => new CapaciteImport(),
             "Prévision des Dépenses"=> new PrevisionDepenseImport(),

        ];
    }
}