<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use Illuminate\Http\Request;

class AircraftController extends Controller
{

    public function index()
    {
        $airCraft = Aircraft::all();
        return view('pages.airCraft',compact('airCraft'));
    }


    public function store(Request $request)
    {
        Aircraft::create($request->all());
        return redirect()->back();
    }


    public function edit($id)
    {
        $air = Aircraft::find($id);
        return view('pages.updateAircraft',compact('air'));
    }


    public function update(Request $request,$id)
    {
        Aircraft::find($id)->update($request->all());
        return redirect()->route('loadairCraft');
    }


    public function destroy($id)
    {
        Aircraft::where('id',$id)->delete();
        return redirect()->back();
    }
}
