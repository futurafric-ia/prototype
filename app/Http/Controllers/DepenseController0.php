<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DepenseImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;
use Spatie\SimpleExcel\SimpleExcelReader;
use Spatie\SimpleExcel\SimpleExcelWriter;

class DepenseController extends Controller
{
    // Importer les données
    public function import (Request $request) {



Excel::import(new DepenseImport,$request->file('fichier'));

        return redirect('/')->with('success', 'All good!');
    }
}
