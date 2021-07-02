<?php

namespace App\Http\Controllers\Guest;

use App\Models\MenuLocations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MenuLocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = MenuLocations::all();
        return response()->json($locations);
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
     * @param  \App\Models\MenuLocations  $menuLocations
     * @return \Illuminate\Http\Response
     */
    public function show(MenuLocations $menuLocations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuLocations  $menuLocations
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuLocations $menuLocations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuLocations  $menuLocations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuLocations $menuLocations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuLocations  $menuLocations
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuLocations $menuLocations)
    {
        //
    }
}
