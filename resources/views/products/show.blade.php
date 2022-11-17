@extends('products.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
                <h2 class="display-3" style="text-align:center">Product Deatils</h2>
            </div>
           
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="display-6" style="text-align:center">Name: {{$product->name}}</strong>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="display-6" style="text-align:center">Details: {{$product->detail}}</strong>
               
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="display-6" style="text-align:center">Price:  {{$product->price}}</strong>
               
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="{{route('products.index')}}"> Back</a>
            </div>
        </div>
    </div>
@endsection