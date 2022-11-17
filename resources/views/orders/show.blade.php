@extends('orders.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
                <h2 class="display-3" style="text-align:center">Place your Order</h2>
            </div>
           
        </div>
    </div>
   
    @foreach( $products as $product)
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="display-4" style="text-align:center" >Name:{{$product->name}} </strong>
                
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label> <strong class="display-4" style="text-align:center"> Employee Name:  </strong></label>
                <select name="employee" class="display-4" style="text-align:center">
                @foreach($employees as $employee)
                    <option  value="{{$employee->id}}">  {{$employee->name}}</option>
                @endforeach
                </select>
               
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="display-4" style="text-align:center">Price:  {{ $product -> price}}</strong>
               
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="{{route('orders.index')}}"> Back</a>
            </div>
        </div>
    </div>
    @endforeach
@endsection