
@extends('layouts.user_app')

@section('content')
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <div class="row">
        <div class="col-lg-12">
            <div class="screen">
                <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_home.css') }}">
                <a href="u_index"><img src="hanger-29414_1280.png" class="left" alt="" height=100 width=100> </a>
                <a href="u_mycoordinates"><img src="star-158502_640.png" class="right" alt="" height=100 width=100></a>
                <div class="tab">
                    <button class="tablinks" onclick="openCloset(event, 'Myitem')" id="defaultOpen">withinmyitems</button>
                    <button class="tablinks" onclick="openCloset(event, 'Newitem')">withnewitems</button>
                <!--</div>-->
                <div id="Myitem" class="tabcontent">
                    <!--myitemのコンテンツ-->
                    <!--<div class="w3--card-4">-->
                        <!--item変数を追加してから以下を実行する-->
                        @if (Auth::check())
                           @include('items.u_myitems', ['items' => $items ])
                        @endif
                    <!--</div>-->
                </div>
                    <div class="myitem-next">        
                        <input type="submit" name="itemSubmit" value="Next" />
                        {!! Form::close() !!}
                    </div>
                    </div>
                </div>
                <div id="Newitem" class="tabcontent">
                    <!--Newitemのコンテンツ-->
                    <div class="closet-items">
                        <!--item変数を追加してから以下を実行する-->
                        @if (Auth::check())
                           @include('items.u_newitems', ['items' => $items ])
                        @endif
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
            </div>        
        </div>
    </div>
    </body>
                
</html>

@endsection
<!--あとでpaginateと一緒に以下を実行する-->
{!! $items->render() !!}