<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Validator;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::all();
        return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
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
        Employee::create($request->all());
	       return redirect()->route('employees.index')->with('success','Employee created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        
        return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'password' => 'required',
        ]);
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted Successfully!');
    }

    public function set()
    {
        return view('employees.reset');
    }
    public function reset(Request $request, Employee $employee)
    {
        $request->validate([
              'password' => 'required', ]);
              $employee->update($request->all());
              
              return view('employees.reset')->with('success', 'Password updated successfully!');
    }
}
