<?php



use App\Http\Controllers\HomeConroller;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\CommandeController;


use Illuminate\Support\Facades\Route;

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

Route::resource('home', HomeConroller::class);
Route::resource('admin', AdministrateurController::class);
Route::resource('client', ClientController::class);
Route::resource('chauffeur', ChauffeurController::class);
Route::get('/reclamation/all',[ReclamationController::class,'indexAll']);
Route::get('/reclamation/client/{client}',[ReclamationController::class,'indexClient']);
Route::get('/reclamation/chauffeur/{chauffeur}',[ReclamationController::class,'indexChauffeur']);
Route::resource('reclamation', ReclamationController::class);
Route::resource('voyage', CommandeController::class);


