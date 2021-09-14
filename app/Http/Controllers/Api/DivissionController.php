<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Divission;
use Illuminate\Http\Request;

class DivissionController extends Controller
{
	public function index() {

	}
	
    public function divisions() {
    	$divisions = Divission::where('enabled', 1)->get();

    	return response()->json($divisions);
    } 
}
