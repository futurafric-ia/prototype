<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Response;

class FichierController extends Controller
{
    public function download()
    {
        $filepath = public_path('fichier/PWBI-Local Content - FuturAfric 2023.xlsx');
        return response()->download($filepath);
    }
}