<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('skil', [SkilController::class, 'index'])->name('skil');
Route::get("/skil/create",[SkilController::class,"create"]);
Route::post("/skil/store",[SkilController::class,"store"]);
Route::post("/skil/{id}/delete",[SkilController::class,"destroy"]);
Route::get("/skil/{id}/edit",[SkilController::class,"edit"]);
Route::post("/skil/{id}/update",[SkilController::class,"update"]);


Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get("/service/create",[ServiceController::class,"create"]);
Route::post("/service/store",[ServiceController::class,"store"]);
Route::post("/service/{id}/delete",[ServiceController::class,"destroy"]);
Route::get("/service/{id}/edit",[ServiceController::class,"edit"]);
Route::post("/service/{id}/update",[ServiceController::class,"update"]);


Route::get('/backoffice',function(){
    $page = '';
    return view('backoffice.backoffice', compact('page'));
})->name("backoffice");


Route::get("/personne",[PersonneController::class,"index"])->name("personne");
Route::get('/personne/create', [PersonneController::class, 'create']);
Route::post("/personne/store",[PersonneController::class,"store"]);
Route::post("/personne/{id}/delete",[PersonneController::class,"destroy"]);
Route::get("/personne/{id}/edit",[PersonneController::class,"edit"]);
Route::post("/personne/{id}/update",[PersonneController::class,"update"]);


Route::get("/portfolio",[PortfolioController::class,"index"])->name("portfolio");
Route::get("/portfolio/create",[PortfolioController::class,"create"]);
Route::post("/portfolio/store",[PortfolioController::class,"store"]);
Route::post("/portfolio/{id}/delete",[PortfolioController::class,"destroy"]);
Route::get("/portfolio/{id}/edit",[PortfolioController::class,"edit"]);
Route::post("/portfolio/{id}/update",[PortfolioController::class,"update"]);
