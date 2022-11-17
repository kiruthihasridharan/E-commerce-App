@extends('orders.layout')
@section('content')


    
    
          </br></br>
          </br></br>

           @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
    
   
    <table class="table table-bordered">
    
                <tr>
                    
                    <td style="text-align:center"><strong><h4>NO</strong></h4></td>
	                <td style="text-align:center"><strong><h4>Name</strong></td>
	                <td style="text-align:center"><strong><h4>detail</strong></h4></td>
	                <td style="text-align:center"><strong><h4>Price</strong></h4></td>
	                <td colspan=3 style="text-align:center"><strong><h4>Actions</strong></h4></td>
                </tr>
                @php
            $i=0;
            @endphp

        
        @foreach($products as $product)
	        <tr>
	            <td style="text-align:center">{{++$i}}</td>
	            <td style="text-align:center">{{$product->name}}</td>
	            <td style="text-align:center">{{$product->detail}}</td>
                <td  style="text-align:center">{{$product->price}}</td>
                <td  style="text-align:center">
                     
              <a class="btn btn-warning" href="{{ route('orders.show',$product->id) }}">Place order</a>
                    
                        
                </td>
	        </tr>
	        @endforeach
        
    </table>
@endsection