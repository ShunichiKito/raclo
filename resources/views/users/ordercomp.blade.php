<?php
use App\User;
use App\U_item;
use App\Stylist_profile_image;
use App\Order;
?>

@extends('layouts.user_app')


<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

@if (Auth::check())
@section('content')

<?php
$user= \Auth::user()->first();
$my_images = U_item::where('myitems_check','on')->get();
$new_images = U_item::where('newitems_check','on')->get();
?>
<html>
    <head>
        <br>
        <h3 class="panel-title name_fontsize">{{ $user->name }}'s Order Confirmation Page</h3>
        <br>
        <br>
    </head>
    
    <body>
    <div class="row">
        <aside class="col-xs-4">
        <div class="panel panel-default">
            <div class='panel-heading1'>
            <div class="container col-lg-12">
               <div class="tab tab_size_container">
                <button class="tablinks" onclick="openTab(event, 'withmyitems')" id="defaultOpen">Coordinate</button>
                <button class="tablinks" onclick="openTab(event, 'withnewitems')">Suggestion</button>
            </div>
            <br>
            
            <div id="withmyitems" class="tabcontent">
                <div class="closet-items">
                <!--item変数を追加してから以下を実行する-->
                    @if (Auth::check())
                        @include('items.before_coitems', ['items' => $my_images ])
                    @endif
                </div>
            </div>
            
            
            <div id="withnewitems" class="tabcontent">
                <div class="closet-items">
                    <!--item変数を追加してから以下を実行する-->
                    @if (Auth::check())
                       @include('items.before_newitems', ['items' => $new_images ])
                    @endif
                </div>
            </div>
            </div>
            </div>
        
            <div class='panel-body'>
                <div class="button">
                    <a href="{{ route('home') }}" class="btn btn-info" role="button">Select Items</a>
                </div>
            </div>
        </div>    
            
            
             <!--タブ入れ替え       -->
            <script>
            function openTab(evt, cityName) {
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
        </aside>
        <?php 
         $order = Order::where('suspend','on')->first(); 
            if(isset($order)){
             $stylist = User::where('id',$order->stylist_id)->first();
            
                if(isset($stylist)) {
                    $item= Stylist_profile_image::where('user_name',$stylist->name)->first(); 
                }
            }    
         ?> 
            
            
        <div class="col-xs-4">
            <div class="panel panel-default" id="panel2">
                <div class='panel-heading'>
                    @if(isset($item->file_path))
                        <img src="{{ '/storage/s_profile_image/'.$item->file_path }}" alt="" class="profile_image profile_page">
                        <style type="text/css">
                        .profile_page {height:100%; width: 100%;}
                        </style>
                    @else
                        <img src="{{ '/no_image.png' }}" alt="" class="profile_image profile_page">
                        <style type="text/css">
                        .profile_page {height:100%; width: 100%;}
                        </style>
                    @endif
                </div>
                
                <div class="panel-body">
                    <h3>{{ $stylist->name }}</h3>
                    <h3>{{ $stylist->rank }}</h3>
                    <div class="button" id="button1">
                    <a href="{{ route('s_index') }}" class="btn btn-info" role="button">Choose Stylist</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xs-4">
            <div class="panel panel-default" id="panel3">
                <div class='panel-body'>
                    <br>
                    <h4>My Items Coordinate: </h4>
                    <br>
                    <h4>New Items Coordinate: </h4>
                    <br>
                    <h4>Price : </h4>
                </div>
            </div>
           <br>
           <br>
           <div class="button" id="button3">
            <a href="{{ route('u_ordercomp') }}" class="btn btn-danger" role="button" onclick='return confirm("Order Confirmed");'>Order Complete</a>
            </div>
        </div>
       
    </div>
    </body>
            
</html>         
@endif
@endsection

<style>
    
    body {
    background-image: url("/room6.jpg"); 
    background-size: 100%;
}
    
    #panel2{
        height: 555px;    
    }
    
    #panel3{
        height: 275px;
    }
    
    #button1 {
        bottom: 50;
        text-align: center;
        left: 45;
    }
    
    #button3 {
        bottom: 50;
        text-align: center;
        left: 45;
    }
    
    .panel-heading1 {
        overflow: scroll;
        position: relative;
        height: 50%;
        width: 100%;
        background-color: #f5f5f5;
        border-color: #ddd;
    }
    
    .panel-body {
        height: 50%;
    }
    
    .tab button.active {
        background-color: #5bc0de;
    }
        
    .tabcontent {
        margin-left: 30;
        display: inline-block;
    }
    
    h3 {
        text-align: center;
    }
    
    .button {
        position: absolute;
        margin-left: 100;
        margin-top: 30;
    }
    
    .button1 {
        bottom: 0;
        top: 50;
    }
    
    .row {
        font-family: "Abril-Fatface";
    }
    
    .navbar {
        font-family: "Abril-Fatface";
    }
    
    .img {
        height: 100%;
        width: 50%;
    }
    
    /*.profile-image {*/
    /*    position: absolute;*/
    /*    margin-left: 50;*/
    /*}*/
    
</style>