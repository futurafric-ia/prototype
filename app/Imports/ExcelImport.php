<?php

namespace App\Imports;

use App\Models\Excel;
use Illuminate\Foundation\Testing\WithFaker;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;



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
            'Dépenses' => new DepenseImport(),
             3 => new InformationsImport(),
             4 => new EmploiImport(),
             5 => new CapaciteImport(),
             6 => new PrevisionDepenseImport()

        ];
    }
}
