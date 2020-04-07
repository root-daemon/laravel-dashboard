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
    public function create(){
        return view('forms/owner');
    }
    public function store(Request $request){
        Owner::create([
            'client_client_id'=>$request->client_client_id,
            'contact_person'=>$request->contact_person,
            'desingnation'=>$request->designation,
            'contact_number'=>$request->contact_number,
            'street'=>$request->street,
            'city'=>$request->city,
            'state'=>$request->state,
            'zipcode'=>$request->zipcode,
            'country'=>$request->country
        ]);
        return redirect(route('dashboard'));
    }
}
