@extends('layouts.user_app')

@section('content')
@if (Auth::check())
    <h1>Profile Setting</h1>


<div class="row">
    <div class="col-xs-offset-7 col-xs-5">
        <div class="panel">
            <div class="panel-heading">
            <h1>{{ $user->name }}</h1>
            <p>Your private information will be protected and you can edit it anytime</p>
            </div>
            <div class="panel-body">
                
                {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
                
                    <div class="form-group">
                       {!! Form::label('age', 'age') !!} <br>
                       {{Form::select('age', ['～20', '21～30', '31～40','41～50','51～'])}}
                    </div>
                    <div class="form-group">
                       {!! Form::label('gender', 'Gender') !!} <br>
                       {{Form::select('gender', ['Male','Female','Other','Rather not say'])}}
                    </div>
                    
                    <div class="text-right">
                        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! Form::close() !!} 
            </div>
        </div>
    </div>
</div>

@endif
@endsection

<style>
body {
    background-image: url('/priceimg/4827196796_c511b4be80_o.jpg');
}

body.style {
    opacity: 0.2;
}

.panel{
    border-color:black;
    border-radius: 15px;
    font-family: "Abril-Fatface";
    /*margin-left: 663px;*/

}

.panel-heading{
    color: white;
    /*border-color: black;*/
    background-color:black;
    height: 50%;
    border-top-right-radius:15px;
    border-top-left-radius:15px;
    
    }


    
</style>