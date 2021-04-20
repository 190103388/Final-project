@extends('.master')
@section("content")
<div class="container custum-login">
	<div class="row">
		<img src="">
	</div>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<form action="register" method="POST">
				@csrf
			<div class="form-group">
		    <label for="exampleInputEmail1">User Name</label>
		    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="User Name">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div>
			<a href="{{url('/register/import')}}">Import Image</a>
		  </div>
		  <br>
		  <button type="submit" class="btn btn-default">Register</button>
		  <br><br>
		  <br><br>
		</form>
		</div>
</div>

	
	
</div>
</div>
@endsection