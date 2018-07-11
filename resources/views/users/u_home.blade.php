@extends('layouts.user_app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!--<div style="position: relative;">-->
                <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_home.css') }}">
                <!--<img src="cabinet-575361_1280.png" class="center" alt="" height=500 width=500>-->
               
                <a href="u_index"><img src="hanger-29414_1280.png" class="left" alt="" height=100 width=100></a>
                <a href="u_mycoordinates"><img src="star-158502_640.png" class="right" alt="" height=100 width=100></a>
                
                
                <!--<div style="position: absolute; top: 30px; left: 100px;">-->
        </div>
            <html>
                <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                </head>
                <body>
            
                    <div class="tab">
                        <button class="tablinks" onclick="openCloset(event, 'Request')" id="defaultOpen">withinmyitems</button>
                        <button class="tablinks" onclick="openCloset(event, 'Coordinate')">withnewitems</button>
                    </div>
            
                    <div id="Request" class="tabcontent">
                    <h3>ここにリクエスト用画像</h3>
            
                    </div>
            
                    <div id="Coordinate" class="tabcontent">
                    <h3>ここにコーディネイト用画像</h3>
            
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
</div>
@endsection





