<?php

namespace App\Http\Controllers;

use App\driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $drivers = driver::get();
        echo json_encode($drivers);
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
        $drivers = new driver();
        $drivers->dni = $request->input('dni');
        $drivers->name = $request->input('name');
        $drivers->lastname = $request->input('lastname');
        $drivers->address = $request->input('address');
        $drivers->telephone = $request->input('telephone');
        $drivers->city = $request->input('city');
        $drivers->save();
        echo json_encode($drivers);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $driver_id)
    {
        //
        $drivers = driver::find($driver_id);
        $drivers->dni = $request->input('dni');
        $drivers->name = $request->input('name');
        $drivers->lastname = $request->input('lastname');
        $drivers->address = $request->input('address');
        $drivers->telephone = $request->input('telephone');
        $drivers->city = $request->input('city');
        $drivers->save();
        echo json_encode($drivers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy($driver_id)
    {
        //
        $drivers = driver::find($driver_id);
        $drivers->delete();
    }
}
