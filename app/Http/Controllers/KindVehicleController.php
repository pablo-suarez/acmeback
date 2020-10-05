<?php

namespace App\Http\Controllers;

use App\kind_vehicle;
use Illuminate\Http\Request;

class KindVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kinds = kind_vehicle::get();
        echo json_encode($kinds);
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
        //kind_vehicle
        $kinds = new kind_vehicle();
        $kinds->name = $request->input('name');
        $kinds->save();
        echo json_encode($kinds);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kind_vehicle  $kind_vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(kind_vehicle $kind_vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kind_vehicle  $kind_vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(kind_vehicle $kind_vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kind_vehicle  $kind_vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kind_vehicle_id)
    {
        //kind_vehicle
        $kinds = kind_vehicle::find($kind_vehicle_id);
        $kinds->name = $request->input('name');
        $kinds->save();
        echo json_encode($kinds);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kind_vehicle  $kind_vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($kind_vehicle_id)
    {
        //kind_vehicle
        $kinds = kind_vehicle::find($kind_vehicle_id);
        $kinds->delete();
        echo json_encode($kinds);
    }
}
