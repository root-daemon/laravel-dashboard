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
}
