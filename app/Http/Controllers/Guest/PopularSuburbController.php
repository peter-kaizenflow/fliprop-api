<?php

namespace App\Http\Controllers\Guest;

use App\Models\PopularSuburb;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PopularSuburbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suburbs = PopularSuburb::all();
        return response()->json($suburbs);
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
     * @param  \App\Models\PopularSuburb  $popularSuburb
     * @return \Illuminate\Http\Response
     */
    public function show(PopularSuburb $popularSuburb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PopularSuburb  $popularSuburb
     * @return \Illuminate\Http\Response
     */
    public function edit(PopularSuburb $popularSuburb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PopularSuburb  $popularSuburb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PopularSuburb $popularSuburb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PopularSuburb  $popularSuburb
     * @return \Illuminate\Http\Response
     */
    public function destroy(PopularSuburb $popularSuburb)
    {
        //
    }
}
