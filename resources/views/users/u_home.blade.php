@extends('layouts.user_app')

@section('content')
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <div class="raw">
        <div class="col-lg-12">
            
                <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_home.css') }}">
                
               
                <a href="u_index"><img src="hanger-29414_1280.png" class="left" alt="" height=100 width=100> </a>
                <a href="u_mycoordinates"><img src="star-158502_640.png" class="right" alt="" height=100 width=100></a>
                


        
                    <div class="tab">
                        <button class="tablinks" onclick="openCloset(event, 'Request')" id="defaultOpen">withinmyitems</button>
                        <button class="tablinks" onclick="openCloset(event, 'Coordinate')">withnewitems</button>
                    </div>
            
                    <div id="Request" class="tabcontent">
                      
                        <div class="closet-items">
                            <!--item変数を追加してから以下を実行する-->
                            @if (Auth::check())
                               @include('items.u_items', ['items' => $items])
                            @endif
                        </div>
                        

                    <h1>ここにリクエスト用画像</h1>
                    <input type="submit" name="itemSubmit" value="Next" class="next" >

                    </div>
            
                    <div id="Coordinate" class="tabcontent">
                    <h2>ここにコーディネイト用画像</h2>
            
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

        </body>
                
</html>
@endsection





