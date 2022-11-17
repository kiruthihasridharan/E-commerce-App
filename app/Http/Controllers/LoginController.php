<?php

namespace App\Http\Controllers;
use Validator;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index()
    {
       return view('index');

    } 
    function show()
    {
        if(Auth::user()->role=='admin')
           return view('dashboard.admin');
        if(Auth::user()->role=='customer')
           return view('dashboard.customer');
        if(Auth::user()->role=='employee')
           return view('dashboard.employee');


    } 
  
    function checklogin(Request $request)
   		{
			// Validation 
            $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:5' ]);

			//Authentication
            $user_data = array(
                'email' => $request->get('email'),
                'password' => $request->get('password')
            );
            if(Auth::attempt($user_data))
            {
                 if(Auth::user()->role=='admin')
                    return view('dashboard.admin');
                if(Auth::user()->role=='customer')
                    return view('dashboard.customer');
                 if(Auth::user()->role=='employee')
                    return view('dashboard.employee');
            }
            else{
                return back()->with('error','Wrong Login Details');
            }
    
		}

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
