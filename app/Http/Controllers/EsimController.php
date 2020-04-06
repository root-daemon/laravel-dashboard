<?php

namespace App\Http\Controllers;
use App\Plan;
use App\Esim;
use Illuminate\Http\Request;

class EsimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $esims = Esim::orderBy('id','desc')->get();
        return view('esim')->with('esims',$esims);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms/esim');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


            Esim::create([
                'msisiidn'=>$request->msisdn,
                'device_id'=>$request->device_id,
                'iccid1'=>$request->iccid1,
                'iccid2'=>$request->iccid2,
                'status'=>$request->status,
                'comments'=>$request->comments
            ]);

        return redirect()->route('all_esim');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Esim  $esim
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        //dd($request->all());
        $esim = Esim::find($request->esim_id);
        return view('esim-single')->with('esim',$esim);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Esim  $esim
     * @return \Illuminate\Http\Response
     */
    public function edit(Esim $esim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Esim  $esim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Esim $esim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Esim  $esim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Esim $esim)
    {
        //
    }
    public function assignaplan(){
        $plans = Plan::orderBy('id','desc')->get();
        return view('forms/assign')->with('plans',$plans);
    }
    public function assign(Request $request){
        dd($request->all());
        return true;
    }
}
