<?php

namespace App\Http\Controllers;
use App\Esim;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        return view('admin');
    }
    public function test(Request $request){
        //dd($request->all());
        $esim = Esim::find($request->esim_id);
        return view('esim-single')->with('esim',$esim);
    }

}
