@extends('products.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Entroll A New Employeee </h2>
        </div>
    </div>
</div>
<!-- error messages --> 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 

   
<form method="post" action="{{route('employees.store')}}">
        @csrf       
          <div class="form-group">    
              <label for="name">Full Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="text" class="form-control" name="gender"/>
          </div>
          <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address"/>
          </div>
          <div class="form-group">
              <label for="mobile">Mobile No:</label>
              <input type="text" class="form-control" name="mobile"/>
          </div> 
          <div class="form-group">
              <label for="password">Password:</label>
              <input type="text" class="form-control" name="password"/>
          </div>
          <input type="hidden" value="employee" name="role"/>
          <br>                        
          <button type="submit" class="btn btn-primary">Entroll</button>
      </form>
    

@endsection