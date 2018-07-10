@extends('layouts.app')

@section('content')
@if (Auth::check())
    <h1>id: {{ $user->name }} のプロフィール編集ページ</h1>


<div class="row">
    <div class="col-xs-offset-7 col-xs-5">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h1>Sign Up</h1>
            <p>Your private information will be protected and you can edit it anytime</p>
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 'update.post']) !!}
                    <div class="form-group">
                        {!! Form::label('user_name', 'User name') !!}
                        {!! Form::text('user_name', old('name'), ['class' => 'form-control']) !!}
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