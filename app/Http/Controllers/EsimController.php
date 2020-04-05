<?php

namespace App\Http\Controllers;

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Esim  $esim
     * @return \Illuminate\Http\Response
     */
    public function show(Esim $esim)
    {
        //
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
}
