<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::orderBy('id','desc')->get();

        return view('clients-table')->with('clients',$clients);
    }
    public function show(Request $request){
        //dd($request->all());
        $client = Client::find($request->client_id);
        //dd($client);
        return view('client-single')->with('client',$client);
    }
    public function create(){
        return view('forms/client');
    }
    public function store(Request $request){
        //dd($request->all());
        Client::create([
            'name'=>$request->name,
            'client_id'=> $request->client_id,
            'number'=> $request->number,
            'contact_number'=> $request->contact_number,
            'designation'=> $request->designation,
            'contact_person'=> $request->contact_person,
            'street'=> $request->street,
            'state'=>$request->state,
            'city' => $request->city,
            'zipcode' => $request->zipcode,
            'country' => $request->country,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return redirect(route('dashboard'));
    }
}
