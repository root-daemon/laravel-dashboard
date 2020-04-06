<?php

namespace App\Http\Controllers;
use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(){
        $plans = Plan::orderBy('id','desc')->get();
        return view('plans-table')->with('plans',$plans);
    }
}
