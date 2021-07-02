<?php

namespace App\Http\Controllers\Guest;

use App\Models\PricePlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricePlans = PricePlan::all();
        return response()->json($pricePlans);
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
     * @param  \App\Models\PricePlan  $pricePlan
     * @return \Illuminate\Http\Response
     */
    public function show(PricePlan $pricePlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PricePlan  $pricePlan
     * @return \Illuminate\Http\Response
     */
    public function edit(PricePlan $pricePlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PricePlan  $pricePlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PricePlan $pricePlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PricePlan  $pricePlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PricePlan $pricePlan)
    {
        //
    }
}
