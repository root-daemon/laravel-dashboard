<?php

namespace App\Http\Controllers;
use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index(){
        $owners = Owner::orderBy('id','desc')->get();
        //dd($owners);
        return view('owners-table')->with('owners',$owners);
    }
}
