<?php

namespace App\Imports;

use App\Models\Activite;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ActiviteImport implements ToArray,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    function array(array $collection)
    {
     dd($collection);
     foreach($collection as $data)
     {

     }
    }
 }

