<?php

namespace App\Http\Controllers\Guest;

use App\Models\ServiceProviderProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceProviderProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceProviderProfiles = ServiceProviderProfile::orderBy('id', 'desc')->get();
        return response()->json($serviceProviderProfiles);
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
     * @param  \App\Models\ServiceProviderProfile  $serviceProviderProfile
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceProviderProfile $serviceProviderProfile)
    {
        return response()->json($serviceProviderProfile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProviderProfile  $serviceProviderProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceProviderProfile $serviceProviderProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProviderProfile  $serviceProviderProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceProviderProfile $serviceProviderProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProviderProfile  $serviceProviderProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceProviderProfile $serviceProviderProfile)
    {
        //
    }
}
