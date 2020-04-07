<?php

namespace App\Http\Controllers;
use App\Plan;
use App\Esim;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(){
        $plans = Plan::orderBy('id','desc')->get();
        return view('plans-table')->with('plans',$plans);
    }
    public function create(Request $request){
        $esims = Esim::orderBy('id','desc')->get();
        $plan = Plan::find($request->plan_id);

        return view('forms/plan-esim-assign',[
            'esims'=>$esims,
            'plan'=>$plan
        ]);
    }
    public function store(Request $request){
        Esim::where('id',$request->esim_id)->update(array('plan_id'=>$request->plan_id));
        return redirect(route('dashboard'));
    }
}
