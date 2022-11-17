<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Employee;
use App\Models\User;
use Validator;
use Auth;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role=='customer')
        {
            $products=Product::all();
            return view('orders.index',compact('products'));
        }
        else
        {
            $users=User::all();
            $products=Product::all();
            return view('employees.myorders',compact('products','users'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $products)
    {
        $employees=Employee::all();
        $products=Product::all();
        return view('orders.show',compact('products','employees'));
    }

}
