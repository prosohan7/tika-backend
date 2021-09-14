<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{ 

    public function districts(Request $request) {

    	$districts = District::where('enabled', 1)->where('division_id', $request->division_id)->get();

    	return response()->json($districts);
    } 

}
