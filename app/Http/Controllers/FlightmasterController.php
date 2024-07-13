<?php

namespace App\Http\Controllers;

use App\Models\Flightmaster;
use Illuminate\Http\Request;

class FlightmasterController extends Controller
{

    public function index()
    {
        $flightMaster = Flightmaster::all();
        return view('pages.flightMaster',compact('flightMaster'));
    }

    public function store(Request $request)
    {
        Flightmaster::create($request->all());
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
    public function edit($id)
    {
        $flightMaster = Flightmaster::find($id);
        return view('pages.updateFlightMaster',compact('flightMaster'));
    }


    public function update(Request $request,$id)
    {
        Flightmaster::find($id)->update($request->all());
        return redirect()->route('flightMaster');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Flightmaster::where('id',$id)->delete();
        return redirect()->back();
    }
}
