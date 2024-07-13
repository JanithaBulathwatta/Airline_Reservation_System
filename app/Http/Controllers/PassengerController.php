<?php

namespace App\Http\Controllers;

use App\Models\Passenge;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use PHPUnit\Event\Test\Passed;

class PassengerController extends Controller
{
    protected $passenger;

    public function __construct()
    {
        $this->passenger = new Passenge();
    }
    public function index()
    {
        $responce['passenger'] = $this->passenger->all();
        return view('pages.index')->with($responce);
    }

    
    public function store(Request $request)
    {
        $this->passenger -> Create($request->all());
        return redirect()->back();
    }



    public function edit($id)
    {
        $passenger = Passenge::find($id);
        return view('pages.upadatePassenger',compact('passenger'));
    }


    public function update(Request $request,$id)
    {
        $passenger = Passenge::find($id);
        $passenger->update($request->all());
        return redirect()->route('home');
    }


    public function destroy($id)
    {
        Passenge::where('id',$id)->delete();
        return redirect()->back();
    }
}
