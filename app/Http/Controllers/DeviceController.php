<?php

namespace App\Http\Controllers;

use App\Models\device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function device(){

        $device_data = device::get();
        return view('theme.devices.device',compact('device_data'));
    }
    public function create(){

        return view('theme.devices.add');
    }

    public function store(Request $request){

       $driver_data = device::create($request->all());
       return redirect()->route('device');
    }

    public function edit($id){

        $device_data = device::where('id',$id)->first();
        return view('theme.devices.edit',compact('device_data'));

    }
    public function update(Request $request, $id){

        $device_data = device::findorfail($id);
        $device_data->device_name = $request->device_name;
        $device_data->ip_address = $request->ip_address;
        $device_data->device_key = $request->device_key;
        $device_data->save();
        return redirect()->route('device');
    }

    public function destroy($id){

        $device_data = device::findOrfail($id);
        $device_data->delete();
        return redirect()->back();
    }
}
