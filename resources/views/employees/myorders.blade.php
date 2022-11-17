@extends('employees.layout')
@section('content')
<div class="pull-center">
                <h1 class="display-3"> Order Lists</h1>
            </div>
    
          </br></br>

               

           @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
    
   
    <table class="table table-bordered">
    
                <tr>
                    
                    <td style="text-align:center"><strong><h4>NO</strong></h4></td>
	                <td style="text-align:center"><strong><h4> Product Name</strong></td>
	                <td style="text-align:center"><strong><h4>Detail</strong></h4></td>
	                <td style="text-align:center"><strong><h4>Price</strong></h4></td>
                    <td style="text-align:center"><strong><h4>Customer Name</strong></h4></td>
                    <td style="text-align:center"><strong><h4>Customer Address</strong></h4></td>
                    <td style="text-align:center"><strong><h4>Customer mobile no</strong></h4></td>
	                
                </tr>
                @php
            $i=0;
            @endphp

        
            @foreach($products as $product)
            @foreach($users as $user)
	        <tr>
	            <td style="text-align:center">{{++$i}}</td>
	            <td style="text-align:center">{{$product->name}}</td>
	            <td style="text-align:center">{{$product->detail}}</td>
                <td  style="text-align:center">{{$product->price}}</td>
                <td  style="text-align:center">{{$user->name}}</td>
                <td  style="text-align:center">{{$user->address}}</td>
                <td  style="text-align:center">{{$user->mobile}}</td>

               
	        </tr>
	    @endforeach
        @endforeach
        
    </table>
@endsection