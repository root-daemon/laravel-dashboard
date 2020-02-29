<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin');
    }
    public function showLoginForm(){
        return view('auth.adminlogin');
    }
    public function login(Request $request){
        $this->validate($request,[
            'email'=> 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('admin'));
          }

          // if unsuccessful, then redirect back to the login with the form data
          return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
