<html lang="en">
	    <head>
	        <title> E-store App</title>
	        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
	    </head>
	    <body>
		<div class="row">
            <div class="col-lg-12 margin-tb">
               <div class="pull-center"></br>
			   <div class="card-header">
                  <h1 class="display-3" style="text-align:center"><b>E-Store Products</b></h2>
              </div>
</div>
           </div>
        </div></br>

		     <div class="container">
			 <table class="table table-bordered">
			      <thead>
		    	<tr>
			        <td style="text-align:center" ><a class="btn btn-info" href="{{url('show')}}">Employee_Name</a></td>
					<td style="text-align:center" ><a class="btn btn-info" href="{{url('set')}}">Reset_Password</a></td>
					<td style="text-align:center"><a class="btn btn-info" href="{{route('orders.index')}}">My Order</a></td>
					<td style="text-align:center" ><a class="btn btn-info" href="{{url('logout')}}">Logout</a></td>
                 </tr>
                  </thead>
              </table>
            </div> </br></br>

            <div class="container">
			
	            @yield('content')
				
	        </div>
	    </body>
	</html>
	