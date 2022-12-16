<?php

namespace App\Http\Controllers;

use App\Models\EmergencyContacts;
use App\Http\Requests\StoreEmergencyContactsRequest;
use App\Http\Requests\UpdateEmergencyContactsRequest;

class EmergencyContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('emergency-contacts');
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
     * @param  \App\Http\Requests\StoreEmergencyContactsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmergencyContactsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmergencyContacts  $emergencyContacts
     * @return \Illuminate\Http\Response
     */
    public function show(EmergencyContacts $emergencyContacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmergencyContacts  $emergencyContacts
     * @return \Illuminate\Http\Response
     */
    public function edit(EmergencyContacts $emergencyContacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmergencyContactsRequest  $request
     * @param  \App\Models\EmergencyContacts  $emergencyContacts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmergencyContactsRequest $request, EmergencyContacts $emergencyContacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmergencyContacts  $emergencyContacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmergencyContacts $emergencyContacts)
    {
        //
    }
}
