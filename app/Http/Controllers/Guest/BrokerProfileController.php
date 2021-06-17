<?php

namespace App\Http\Controllers\Guest;

use App\Models\BrokerProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrokerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brokerProfiles = BrokerProfile::orderBy('id', 'desc')->get();
        return response()->json($brokerProfiles);
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
     * @param  \App\Models\BrokerProfile  $brokerProfile
     * @return \Illuminate\Http\Response
     */
    public function show(BrokerProfile $brokerProfile)
    {
        return response()->json($brokerProfile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BrokerProfile  $brokerProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(BrokerProfile $brokerProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BrokerProfile  $brokerProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrokerProfile $brokerProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BrokerProfile  $brokerProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrokerProfile $brokerProfile)
    {
        //
    }
}
