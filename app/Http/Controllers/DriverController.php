<?php

namespace App\Http\Controllers;

use App\Models\driver;
use Illuminate\Http\Request;

class DriverController extends Controller
    {
    public function driver(){

        $driver_data = driver::get();
        return view('theme.driver.driver',compact('driver_data'));
    }
    public function create(){

        return view('theme.driver.add');
    }
    public function store(Request $request){

       $driver_data = driver::create($request->all());
        return redirect()->route('driver');
    }

    public function edit($id){

        $driver_data = driver::where('id',$id)->first();
        return view('theme.driver.edit',compact('driver_data'));
    }

    public function update(Request $request, $id){

        $driver_data = driver::findorfail($id);
        $driver_data->name = $request->name;
        $driver_data->address = $request->address;
        $driver_data->id_number = $request->id_number;
        $driver_data->license_number = $request->license_number;
        $driver_data->car_number = $request->car_number;
        $driver_data->save();
        return redirect()->route('driver');
    }

    public function destroy($id){

        $driver_data = driver::findOrfail($id);
        $driver_data->delete();
        return redirect()->back();
    }

}
