@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample3">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				Raclo
			</a>
		</div>
		
		<div class="collapse navbar-collapse" id="navbarEexample3">
			<form class="navbar-form navbar-right" role="login">
				<div class="form-group">
					<input type="text" label="name" class="form-control" placeholder="User ID">
				</div>
				<div class="form-group">
					<input type="text" label="password" class="form-control" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-default"><a href="{{ route('login') }}">Login</a></button>
				<!--//route is missing for stylist signup-->
			    <button type="submit" class="btn btn-danger"><a href="{{ route('/s_signup_or_login') }}">For Stylists</a></button>
			</form>
		</div>
	</div>
</nav>
       
    </div>
</div>
@endsection