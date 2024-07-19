<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use App\Models\Flightmaster;
use App\Models\Flighttransaction;
use App\Models\Passenge;
use Illuminate\Http\Request;

class FlighttransactionController extends Controller
{

    public function index()
    {
        $flighttransaction = Flighttransaction::with('passenges','flightmasters','aircraft')->get();
        $passenger = Passenge::all();
        $flightmaster = Flightmaster::all();
        $aircraft = Aircraft::all();

        return view('pages.flightTransaction',compact('passenger','flightmaster','aircraft','flighttransaction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Flighttransaction::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
