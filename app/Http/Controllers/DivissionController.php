<?php

namespace App\Http\Controllers;

use App\Models\Divission;
use Illuminate\Http\Request;

class DivissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Divission::paginate();
        return view('divisions.index', ['divisions' => $divisions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Divission  $divission
     * @return \Illuminate\Http\Response
     */
    public function show(Divission $divission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Divission  $divission
     * @return \Illuminate\Http\Response
     */
    public function edit(Divission $divission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Divission  $divission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divission $divission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Divission  $divission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Divission $divission)
    {
        //
    }

    /**
     * Enable or Disable a Division.
     *
     * @param  \App\Models\Divission  $divission
     * @return \Illuminate\Http\Response
     */
    public function enableDisable($id)
    {
        $division = Divission::findOrFail($id);
        $division->enabled = !$division->enabled;
        $division->save();

        return redirect( route( 'divisions.index' ) )->with([
            'message' => $division->name . ' Division Updated'
        ]);
    }
}
