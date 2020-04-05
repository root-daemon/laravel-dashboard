<?php

namespace App\Http\Controllers;

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
        dd($request->all());
        return view('chart');
    }
}
