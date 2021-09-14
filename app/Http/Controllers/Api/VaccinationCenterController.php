<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VaccinationCenter;
use Illuminate\Http\Request;

class VaccinationCenterController extends Controller
{

    public function center(Request $request) {

    	$vaccine_center = VaccinationCenter::where('enabled', 1)->where('upazila_id', $request->upazila_id)->get();

    	return response()->json($vaccine_center);
    } 
}
