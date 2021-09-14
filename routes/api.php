<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VerificationController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DivissionController;
use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\UpazilaController;
use App\Http\Controllers\Api\VaccinationCenterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get( '/test', function () {
	return 'Changed this text';
});

Route::post('/verify', [VerificationController::class, 'verify']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/divisions', [DivissionController::class, 'divisions']);
Route::get('/districts', [DistrictController::class, 'districts']);
Route::get('/upazilas', [UpazilaController::class, 'upazilas']);
Route::get('/vaccine-center', [VaccinationCenterController::class, 'center']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
