<?php

namespace App\Http\Controllers\Guest;

use App\Models\ServiceProviderType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceProviderTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = ServiceProviderType::all();
        return response()->json($types);
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
     * @param  \App\Models\ServiceProviderType  $serviceProviderType
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceProviderType $serviceProviderType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProviderType  $serviceProviderType
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceProviderType $serviceProviderType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProviderType  $serviceProviderType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceProviderType $serviceProviderType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProviderType  $serviceProviderType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceProviderType $serviceProviderType)
    {
        //
    }
}
