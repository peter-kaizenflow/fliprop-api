<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::all();
        return response()->json($property);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $query = DB::table('properties');

        if ($request->filled('bedrooms')) {
            $query->where('bedrooms', '>=', $request->bedrooms);
        }

        if ($request->filled('toilets')) {
            $query->where('toilets', '>=', $request->toilets);
        }

        if ($request->filled('bathrooms')) {
            $query->where('bathrooms', '>=', $request->bathrooms);
        }

        if ($request->filled('closed_parking')) {
            $query->where('closed_parking', '>=', $request->closed_parking);
        }

        if ($request->filled('street_parking')) {
            $query->where('street_parking', '>=', $request->street_parking);
        }

        if ($request->filled('house_size')) {
            $query->where('age', '>=', $request->age);
        }

        if ($request->filled('age')) {
            $query->where('age', '<=', $request->age);
        }

        if ($request->filled('price')) {
            $query->where('price', '<=', $request->price);
        }

        if ($request->filled('estimation')) {
            $query->where('estimation', '<=', $request->estimation);
        }

        if ($request->filled('erf_size')) {
            $query->where('levies', '<=', $request->levies);
        }

        if ($request->filled('erf_size')) {
            $query->where('levies', '<=', $request->levies);
        }

        $properties = $query->get();

        return response()->json($properties);
    }
}
