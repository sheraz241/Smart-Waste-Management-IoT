<?php

namespace App\Http\Controllers;

use App\Models\truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    public function truck(){

        $truck_data = truck::get();
        return view('theme.truck.truck',compact('truck_data'));
    }
    public function create(){

        return view('theme.truck.add');
    }

    public function store(Request $request){

       $truck_data = truck::create($request->all());
       return redirect()->route('truck');
    }

    public function edit($id){

        $truck_data = truck::where('id',$id)->first();
        return view('theme.truck.edit',compact('truck_data'));

    }
    public function update(Request $request, $id){

        $truck_data = truck::findorfail($id);
        $truck_data->device_name = $request->truck_number;
        $truck_data->ip_address = $request->truck_license;
        $truck_data->device_key = $request->truck_location;
        $truck_data->save();
        return redirect()->route('truck');
    }

    public function destroy($id){

        $truck_data = truck::findOrfail($id);
        $truck_data->delete();
        return redirect()->back();
    }
}
