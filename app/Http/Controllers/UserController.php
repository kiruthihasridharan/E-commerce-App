<?php

namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this ->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'password' => 'required',
        ]);
        $user = new User([
            'name'=> $request->get('name'),
            'email'=> $request->get('email'),
            'gender'=> $request->get('gender'),
            'address'=> $request->get('address'),
            'mobile'=> $request->get('mobile'),
            'role'=> $request->get('role'),
            'password'=>Hash::make($request->get('password')),
            'remember_token'=> Str::random(10),
        ]);
        $user->save();
       return view('index');
    }
}
