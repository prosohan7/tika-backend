<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Upazila;
use Illuminate\Http\Request;

class UpazilaController extends Controller
{

    public function upazilas(Request $request) {
    	// $districts = District::where('enabled', 1);

    	$upazilas = Upazila::where('enabled', 1)->where('district_id', $request->district_id)->get();

    	return response()->json($upazilas);
    } 
}
