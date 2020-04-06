<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::orderBy('id','desc')->get();
        //dd($devices);
        return  view('devices-table')->with('devices',$devices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms/device');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Device::create([
            'name' => $request->DEVICE_NAME,
            'owner_id'=>$request->client_id,
            'imei1'=>$request->IMEI1,
            'imei2'=>$request->IMEI2,
            'lot_id'=>$request->lot_id,
            'invoice_id'=>$request->invoice_id,
            'status'=>$request->STATUS,
            'current_location'=>$request->LOCATION,

        ]);
        return redirect( route('dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $device = Device::find($request->device_id);
        return view('device-single')->with('device',$device);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        //
    }
    public function type(Request $request){
        $type = $request->STATUS;
        //dd($request->all());
        if($type=='upcoming'){
           // dd('gell');
            return view('forms/device-upcoming')->with('STATUS',$type);
        }
        else if($type=='inventory'){
            return view('forms/device-inventory')->with('STATUS',$type);
        }
        else if($type=='invoiced'){
            return view('forms/device-invoiced')->with('STATUS',$type);
        }
        else if($type=='intransit'||$type=='delviredtoclient'){
            return view('forms/device-intransit')->with('STATUS',$type);
        }
        else{
            dd($type);
        }
    }
    public function typeshow(){
        return view('forms/device-type');

    }
}
