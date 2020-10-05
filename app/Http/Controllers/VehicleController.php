<?php

namespace App\Http\Controllers;

use App\vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vehicles =vehicle::with('owner','driver','kind_vehicle')->get();
        echo json_encode($vehicles);
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
        $vehicles = new vehicle();
        $vehicles->plate = $request->input('plate');
        $vehicles->color = $request->input('color');
        $vehicles->mark = $request->input('mark');
        $vehicles->owner_id = $request->input('owner_id');
        $vehicles->driver_id = $request->input('driver_id');
        $vehicles->kind_vehicle_id = $request->input('kind_vehicle_id');
        $vehicles->save();
        echo json_encode($vehicles);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vehicle_id)
    {
        //
        $vehicles = vehicle::find($vehicle_id);
        $vehicles->plate = $request->input('plate');
        $vehicles->color = $request->input('color');
        $vehicles->mark = $request->input('mark');
        $vehicles->owner_id = $request->input('owner_id');
        $vehicles->driver_id = $request->input('driver_id');
        $vehicles->kind_vehicle_id = $request->input('kind_vehicle_id');
        $vehicles->save();
        echo json_encode($vehicles);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($vehicle_id)
    {
        //
        $vehicles = vehicle::find($vehicle_id);
        $vehicles -> delete();
    }
}
