@extends('layouts.stylist_app')

@section('content')
@if (Auth::check())
<h1>Profile Setting</h1>

<div class="row">
    <div class="col-xs-7">
        @if(isset($item->file_path))
            <img src="{{ '/storage/s_profile_image/'.$item->file_path }}" alt="" class="profile_image profile_page">
            <style type="text/css">
                .profile_page {width:100%;}
            </style>
        @else
            <img src="{{ '/no_image.png' }}" alt="" class="profile_image profile_page">
            <style type="text/css">
                .profile_page {width:100%;}
            </style>
        @endif
          
    </div>
    <div class="col-xs-5">
        <div class="panel panel-danger">
            <div class="panel-heading">
            <h1>{{ $user->name }}</h1>
            <p>Your private information will be protected and can be edit it anytime</p>
            </div>
            <div class="panel-body">
                
                {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put','files' => true]) !!}
                    
                    <div class="form-group">
                       {!! Form::label('age', 'Age') !!} <br>
                       {{Form::select('age', ['～20', '21～30', '31～40','41～50','51～'], 'select age' )}}
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
                       {!! Form::label('clients', 'Clients per Month') !!} <br>
                       {{Form::select('clients', ['～5', '6～10', '11～20','21～30', '30～'], 'select number of clients' )}}
                    </div>

                    <div class="form-group">
                        {!! Form::hidden('user_type', '2') !!}
                    </div> 
                    <div class="form-group">
                        {!! Form::label('rank', 'Stylist rank') !!}
                        {{Form::select('rank', ['legend', 'pro', 'amature'])}}
                    </div>
                    <div class="form-group">
                        {!! Form::label('file','Change the profile image',['class'=>'control-label']) !!}
                        {!! Form::file('file') !!}
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