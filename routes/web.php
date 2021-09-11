<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivissionController;
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


Route::middleware(['auth', 'verified'])->group(function() {
	Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
	Route::resource('/categories', CategoryController::class);
	Route::resource('/divisions', DivissionController::class);
	Route::post('/divisions-enable-disable/{id}', [DivissionController::class, 'enableDisable'])->name('divisions-enable-disable');
	Route::resource('/districts', DistrictController::class);
	Route::resource('/peoples', PeopleController::class);
	Route::resource('/registration', RegistrationController::class);
	Route::resource('/upazilas', UpazilaController::class);
	Route::resource('/vaccination-center', VaccinationCenterController::class);
	Route::resource('/vaccine', VaccineController::class);
});

require __DIR__.'/auth.php';
