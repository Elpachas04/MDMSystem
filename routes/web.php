<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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

// path that will display the information from DB
Route::get('/viewData', function () {
    return view('viewData');
});

// Route::post('/upload-content',[PatientController::class,'uploadContent'])->name('import.content');

// $router->get('/import', 'ImportController@import');
// $router->get('/importPatient', 'PatientController@import');

Route::get('/import-form',[PatientController::class,'importForm']);

Route::post('/import',[PatientController::class,'import'])->name('patient.import');