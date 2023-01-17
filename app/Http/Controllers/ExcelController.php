<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImport;
use App\Models\Capacite;
use App\Models\Depense;
use App\Models\Emploi;
use App\Models\Informations;
use App\Models\PrevisionDepense;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    public function index()
    {
        $depenses = Depense::orderBy('id', 'desc')->count();
        $emplois = Emploi::orderBy('id', 'desc')->count();
        $informations = Informations::orderBy('id', 'desc')->count();
        $capacite = Capacite::orderBy('id', 'desc')->count();
        $prevision = PrevisionDepense::orderBy('id', 'desc')->count();
        // dd($depenses);
        return view('index',
        [
            'depenses' => $depenses,
            'informations' =>$informations,
            'capacite' =>$capacite,
            'emplois' => $emplois,
            'prevision' => $prevision,
        ]);

    }


    // Importer les données
    public function import(Request $request)
    {
        $this->validate($request, [
                'fichier' => 'bail|required|file|mimes:xlsx'
            ]);
        $fichier = $request->fichier->move(public_path(), $request->fichier->hashName());

        Excel::import(new ExcelImport(), $fichier);
        return redirect()->route('index');

    }
}
