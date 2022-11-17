@extends('employees.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-center">
            <h2 class="display-3" style="text-align:center">Reset your Password</h2>
        </div>
           
     </div>
 </div>
 
 @if ($message = Session::get('success'))
       <div class="alert alert-success">
            <p>{{ $message }}</p>
       </div>
     @endif

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
   
    <form method="get" action="{{url('reset')}}">
        @csrf       
          <div class="form-group">    
              <label for="name">Current Password :</label>
              <input type="text" class="form-control" name="password"/>
          </div>

          <div class="form-group">
              <label for="email">New Password:</label>
              <input type="text" class="form-control" name="password"/>
          </div>
          <div class="form-group">
              <label for="gender">Confirm New Password:</label>
              <input type="text" class="form-control" name="paasword"/>
          </div>
              <input type="hidden" value="employee" name="role"/>
          <br>           
          <div class="col-xs-12 col-sm-12 col-md-12 text-center" >             
             <button type="submit" class="btn btn-primary">Change</button>
          </div>
      </form></br>
          <a class="btn btn-warning" href="{{url('show')}}">Back</a>
@endsection