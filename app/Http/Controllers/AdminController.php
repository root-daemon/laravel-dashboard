<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }
      public function ShowUserPlans(Request $request, $client_id){
        $user = User::find($client_id);
        //dd($user->Plans);
        $plans = $user->Plans;
        return view('plan',[
            'user' => $user,
            'plans' => $plans
        ]);
      }
}
