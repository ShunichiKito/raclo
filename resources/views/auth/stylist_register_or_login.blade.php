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
        				<button type="submit" class="btn btn-default"><a href="{{ route('u_login.post') }}">Login</a></button>
        				<!--//route is missing for stylist signup-->
        			    <button type="submit" class="btn btn-danger"><a href="{{ route('u_signup_or_login') }}">For Users</a></button>
        			</form>
        		</div>
        	</div>
    	</nav>
    </div>
</div>
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h1>Sign Up</h1>
            <p>Your private information will be protected and you can edit it anytime</p>
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 's_signup.post']) !!}
                    <div class="form-group">
                        {!! Form::label('stylist_name', 'User name') !!}
                        {!! Form::text('stylist_name', old('name'), ['class' => 'form-control']) !!}
                    </div>
                    
                     <div class="form-group">
                       {!! Form::label('age', 'Age') !!} <br>
                       {{Form::select('age', ['～20', '21～30', '31～40','41～50','51～'])}}
                    </div>
                    
                     <div class="form-group">
                       {!! Form::label('gender', 'Gender') !!} <br>
                       {{Form::select('gender', ['Male','Female','Other','Rather not say'])}}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('background', 'Backgrounds') !!}
                        {!! Form::text('background', old('background'), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('style', 'Style Preference') !!}
                        <br>(ex:American Casual....)
                        {!! Form::text('style', old('style'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Password（confirm）') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>

                    <div class="text-right">
                        {!! Form::submit('Sign Up', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! Form::close() !!} 
            </div>
        </div>
    </div>
</div>


@endsection