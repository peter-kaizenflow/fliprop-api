<?php

namespace App\Http\Controllers\Guest;

use App\Models\FeaturedProperty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeaturedPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featured = FeaturedProperty::all();
        return response()->json($featured);
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
     * @param  \App\Models\FeaturedProperty  $featuredProperty
     * @return \Illuminate\Http\Response
     */
    public function show(FeaturedProperty $featuredProperty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeaturedProperty  $featuredProperty
     * @return \Illuminate\Http\Response
     */
    public function edit(FeaturedProperty $featuredProperty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeaturedProperty  $featuredProperty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeaturedProperty $featuredProperty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeaturedProperty  $featuredProperty
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeaturedProperty $featuredProperty)
    {
        //
    }
}
