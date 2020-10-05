<?php

namespace App\Http\Controllers;

use App\owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $owners = owner::get();
        echo json_encode($owners);
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
        $owners = new owner();
        $owners->dni = $request->input('dni');
        $owners->name = $request->input('name');
        $owners->lastname = $request->input('lastname');
        $owners->address = $request->input('address');
        $owners->telephone = $request->input('telephone');
        $owners->city = $request->input('city');
        $owners->save();
        echo json_encode($owners);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $owner_id)
    {
        //
        $owners = owner::find($owner_id);
        $owners->dni = $request->input('dni');
        $owners->name = $request->input('name');
        $owners->lastname = $request->input('lastname');
        $owners->address = $request->input('address');
        $owners->telephone = $request->input('telephone');
        $owners->city = $request->input('city');
        $owners->save();
        echo json_encode($owners);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy($owner_id)
    {
        //
        $owners = owner::find($owner_id);
        $owners->delete();
    }
}
