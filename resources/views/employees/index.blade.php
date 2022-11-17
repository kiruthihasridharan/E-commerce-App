@extends('products.layout')
@section('content')
    <div class="pull-left">
         <a class="btn btn-success" href="{{route('employees.create')}}"><h4> Entroll A Employee</h4></a>
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
	     <td style="text-align:center"><strong><h4>Email</strong></h4></td>
	     <td style="text-align:center"><strong><h4>Mobile</strong></h4></td>
	     <td colspan=3 style="text-align:center"><strong><h4>Actions</strong></h4></td>
      </tr>
            @php
            $i=0;
            @endphp

        @foreach($employees as $employee)
	     <tr>
	         <td style="text-align:center">{{++$i}}</td>
	         <td style="text-align:center">{{$employee->name}}</td>
	         <td style="text-align:center">{{$employee->email}}</td>
             <td  style="text-align:center">{{$employee->mobile}}</td>

             <td  style="text-align:center">
                 <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
                         @csrf
                         @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
             </td>
	     </tr>
	    @endforeach    
    </table>
@endsection