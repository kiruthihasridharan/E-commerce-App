@extends('base')
@section('main')
<div class="row">
<img class="picture" src="https://cdn.dribbble.com/users/1917942/screenshots/7139971/media/d802dc4eadb049f5a9684759cfdfbffa.gif"  style="
    float:right;
    width: 500px;
    height:420px;
    margin-top:50px;"/>

 <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
   <div class="card-header">
      <h1 class="display-3" style="text-align:center"><b>Customer Registration</b></h1>
    <div>
   @if($errors->any())
      <div class="alert alert-danger">
      <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      
    <form method="get" action="{{url('store')}}">
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
              <input type="hidden" value="customer" name="role"/>
          <br>           
          <div class="col-xs-12 col-sm-12 col-md-12 text-center" >             
             <button type="submit" class="btn btn-primary">Sign Up</button>
          </div>
      </form></br>
          <a class="btn btn-warning" href="{{url('/')}}">Back</a>
        
      </div>
    </div>
  </div>
</div>
@endsection