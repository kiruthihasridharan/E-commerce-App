@extends('products.layout')
@section('content')



            <div class="pull-left">
                <a class="btn btn-success" href="{{route('products.create')}}"><h4> Create New Product</h4></a>
            </div>
    
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
                     <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                       <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                       <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                          @csrf
                          @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
	        </tr>
	        @endforeach
        
    </table>
@endsection