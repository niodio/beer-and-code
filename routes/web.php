<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeerController;

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

// Route::get('/', function () {
//     return Inertia::render('Dashboard', ['title' => 'Já vejo a galera indo a loucura com esta stack']);
// });

// create route to controller
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/brewery/{id}/beers', [BeerController::class, 'index'])->name('brewery.beers');
