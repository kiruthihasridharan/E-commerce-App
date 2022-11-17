@extends('base')
@section('main')

<div class="row" >
<img class="picture" src="https://cdn.dribbble.com/users/1141739/screenshots/4674704/bicycle_2.gif"  style="
    float:right;
    width: 460px;
    margin-top: 0;"/>
 <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
 <div class="card-header">
     <br/>
 <h1 class="display-3" style="text-align:center"><b>E-Store</b></h2>



  @if ($message =Session::get('error'))
      <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{{$message}}</strong>
      </div>
@endif


   @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There are some problems with your input.</br></br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div><br />
   @endif


	<div>
      <form method="post" action="{{ url('login') }}"> 
          {{ csrf_field() }}
          <div class="form-group">    
              <label for="email"><strong>Email Id:</strong></label>
             <input type="email" name="email" class="form-control">
                 </br>
             
          </div>
          <div class="form-group">
              <label for="password"><strong>Password:</strong></label>
              <input type="password" class="form-control" name="password"/>
          </div></br></br>
          <div class="col-xs-12 col-sm-12 col-md-12 text-center" >             
            <button type="submit" class="btn btn-primary" ><b>Login</b></button>
          <div></br>
          <a class="btn btn-info" href="{{url('register')}}">Register</a>
      </form>

      
  </div>
</div>
</div>

</div>
</body>
@endsection

