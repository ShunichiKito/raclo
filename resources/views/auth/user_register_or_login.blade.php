@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ secure_asset('css/user_register_or_login.css') }}">

<div class="row">
    <div class="col-xs-12">
        <nav class="navbar navbar-inverse !important"> 
                     <img src="{{secure_asset("logo_Raclo.PNG")}}" class="logo navbar-left">


        	<div class="container-fluid">
        		<div class="navbar-header">
        			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample3">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        			</button>
        		
        		</div>
        		
        		<div class="collapse navbar-collapse" id="navbarEexample3">
        			<form class="navbar-form navbar-right" method="POST" action="{{ route('login.post') }}">
        			    {{ csrf_field() }}
        				<div class="form-group">
        					<input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" placeholder="User Name" required autofocus>
        				</div>
        				<div class="form-group">
        				    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
        				</div>
        			    <button type="submit" class="btn btn-default log-btn">Login</button>
        				<!--//route is missing for stylist signup-->
        			    <a class="btn btn-danger log-btn" href="{{ route('s_signup_or_login') }}">For Stylists</a>
        			</form>
        		</div>
        	</div>
    	</nav>
    </div>
    
    <!--<div class="col-xs-7">-->
    <!--        {{HTML::image('img/hack_your_closet.jpg')}}-->
    <!--</div>-->
    
    <body style="background-image: url('img/hack_your_closet.jpg')">
    <!--<div class="col-xs-offset-1 col-xs-6 align-self-center">-->
    <!--    <div class="panel explanation">-->
    <!--            <div class="panel-heading exp-heading">-->
    <!--                <h1 class="catchcopy"> ~~ Get New Coordinate! ~~ </h1>-->
    <!--            </div>-->
                
                
        <div class="panel-body">
                <br>
                 <ul class="struggle">
                        <li>Have you ever had any problems coming up with your own outfit?</li>
                        <li>Are there any clothes that you've bought but ended up not wearing at all?</li>
                        <li>Have you ever imagined yourself wearing the same kind of clothes over and over again?</li>
                 </ul>
                <br> 
                <h3>If so,</h3>
                <h2>Raclo will be the right solution for you.</h2>
                <br>
                <h3>Raclo is a service that provides you with full outfit using your own clothes and/or with new items that suits your original items, supervised by experienced stylists.</h3>
                <br><br>
                 
                 
        </div>
      </div> 
    </div>
        
    <div class="col-xs-offset-1 col-xs-3 col-xs-offset-1">
        <div class="panel registration">
                <div class="panel-heading registration-heading">
                <h1>Sign Up</h1>
                <p>Your private information will be protected and you can edit it anytime</p>
                </div>
                <div class="panel-body">
                     {!! Form::open(['route' => 'signup.post']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'User name') !!}
                            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                           {!! Form::label('age', 'Age') !!} <br>
                           {{Form::select('age', ['～20', '21～30', '31～40','41～50','51～'], 'select age')}}
                        </div>
                        <div class="form-group">
                           {!! Form::label('gender', 'Gender') !!} <br>
                           {{Form::select('gender', ['Male','Female','Other','Rather not say'])}}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password_confirmation', 'Password（confirm）') !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::hidden('user_type', '1') !!}
                            {!! Form::hidden('background', ' ') !!}
                            {!! Form::hidden('style', ' ') !!}
                        </div>    
    
                        <div class="text-right">
                            {!! Form::submit('Sign Up', ['class' => 'btn btn-success']) !!}
                        </div>
                    {!! Form::close() !!} 
                </div>
            </div> 
        </div>
    </div>
    </body>
</div>

@endsection



