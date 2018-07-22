
@extends('layouts.user_app')

@section('content')
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_home.css') }}">
    </head>
    <body>
        <div class="container col-lg-12">
        <!--画像アップロード-->
        
        {!! Form::open(['url' => '/u_items/store', 'method' => 'post', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('file','画像アップロード',['class'=>'control-label']) !!}
                {!! Form::file('file') !!}
            </div>  
            <div class="form-group">
                {!! Form::submit('Upload', ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!} 
        
        <!--アップロードした写真表示-->
        
        
            <div class="screen">
                <a href="u_index"><img src="hanger-29414_1280.png" class="left" alt="" height=100 width=100> </a>
                <a href="u_mycoordinates"><img src="star-158502_640.png" class="right" alt="" height=100 width=100></a>
               
                    <div class="tab">
                        <button class="tablinks" onclick="openCloset(event, 'Myitem')" id="defaultOpen">withinmyitems</button>
                        <button class="tablinks" onclick="openCloset(event, 'Newitem')">withnewitems</button>
                    </div>
                     {!! Form::open(['route' => ['items.selected']]) !!}

                    <div id="Myitem" class="tabcontent">
                        <div class=cloths>
                        <!--myitemのコンテンツ-->
                        <!--<div class="w3--card-4">-->
                            <!--item変数を追加してから以下を実行する-->
                            @if (Auth::check())
                               @include('items.u_myitems', ['items' => $items ])
                            @endif
                        </div>
                    </div>
                
                    <div id="Newitem" class="tabcontent">
                        <div class=cloths>
                        <!--Newitemのコンテンツ-->
                        <!--<div class="closet-items">-->
                            <!--item変数を追加してから以下を実行する-->
                            @if (Auth::check())
                               @include('items.u_newitems', ['items' => $items ])
                            @endif
                        </div>
                    </div>
                    <input type="submit" name="itemSubmit" value="Next" class="submission myitem-next"/>
                    {!! Form::close() !!}    
            </div>      
        </div>
               
               
                <script>
                function openCloset(evt, cityName) {
                   var i, tabcontent, tablinks;
                   tabcontent = document.getElementsByClassName("tabcontent");
                   for (i = 0; i < tabcontent.length; i++) {
                       tabcontent[i].style.display = "none";
                   }
                   tablinks = document.getElementsByClassName("tablinks");
                   for (i = 0; i < tablinks.length; i++) {
                       tablinks[i].className = tablinks[i].className.replace(" active", "");
                   }
                   document.getElementById(cityName).style.display = "block";
                   evt.currentTarget.className += " active";
                }
                document.getElementById("defaultOpen").click();
                </script>

    </body>
                
</html>

@endsection
<!--あとでpaginateと一緒に以下を実行する-->
<!--{!! $items->render() !!}-->