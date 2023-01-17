<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("simple-excel/index", [ExcelController::class,'index'])->name('index');
    // Route::post("simple-excel/import", [DepenseController::class,'import'])->name('excel.import');
    Route::post("simple-excel/import", [ExcelController::class,'import'])->name('excel.import');

// Exporter un fichier Excel
Route::post("simple-excel/export", [ExcelController::class,'export'])->name('excel.export');
Route::get('showForm',[ExcelController::class,'showForm'])->name('formulaire');
});

require __DIR__.'/auth.php';
