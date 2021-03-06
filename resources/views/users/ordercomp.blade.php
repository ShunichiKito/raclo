<?php
use App\User;
use App\U_item;
use App\Stylist_profile_image;
use App\Order;
?>

@extends('layouts.user_app')

<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/ordercomp.css') }}">

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
<script type="text/javascript" src="gallery.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">

@if (Auth::check())
@section('content')

<?php
$user= \Auth::user()->first();
$my_images = U_item::where('myitems_check','on')->where('user_name',\Auth::user()->name)->get();
$new_images = U_item::where('newitems_check','on')->where('user_name',\Auth::user()->name)->get();
$order = Order::where('suspend','on')->where("user_id",\Auth::id())->first(); 
$stylist = User::where('id',$order->stylist_id)->first();
if(isset($stylist)) {
$item= Stylist_profile_image::where('user_name',$stylist->name)->first(); 
}    
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
        <aside class="col-xs-5">
        <div class="panel panel-default">
            <div class='panel-heading1'>
            <div class="container col-lg-12">
               <div class="tab tab_size_container">
                <button class="tablinks" onclick="openTab(event, 'withmyitems')" id="defaultOpen">From My Items</button>
                <button class="tablinks" onclick="openTab(event, 'withnewitems')">Get New Suggestions</button>
            </div>
            <br>
            
            <div id="withmyitems" class="tabcontents">
                <div class="closet-items">
                <!--item変数を追加してから以下を実行する-->
                    @if (Auth::check())
                        @include('items.before_coitems', ['items' => $my_images ])
                    @endif
                </div>
            </div>
            
            
            <div id="withnewitems" class="tabcontents">
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
                <h4>1. 注文に応じてFrom My ItemsとGet New Suggestionsのタブから注文したいアイテムを選択してください</h4>
            </div>
            <div class='panel-footer leftpanel'>    
                <div class="stylist-button">
                    <a href="{{ route('home') }}" class="btn btn-info centerbottun" role="button">Select Items</a>
                </div>
            </div>
        </div>    
            
            
             <!--タブ入れ替え       -->
            <script>
            function openTab(evt, cityName) {
               var i, tabcontent, tablinks;
               tabcontent = document.getElementsByClassName("tabcontents");
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
       
            
            
        <div class="col-xs-4">
            <div class="panel panel-default" id="panel2">
                <div class='panel-heading sprofile' id="sprofile">
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
                
                <div class="panelcenter-body">
                    <h3>
                        Stylist name:  
                        <?php if(isset($stylist)){ print $stylist->name; } ?>
                    </h3> 
                    <h3>
                        Class: 
                        <?php if(isset($stylist)){ print $stylist->rank; } ?>
                    </h3>
                    <!--<br>-->
                    <h4>2. 好みのスタイルや料金に応じた<br>スタイリストを選択してください</h4>
                </div>
                <div class="panel-footer stylistbtn">
                    <div class="stylistbutton">
                    <a href="{{ route('s_index') }}" class="btn btn-info button3" role="button">Choose Stylist</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xs-3">
            <div class="panel panel-danger" id="panel3">
                <div class='panel-heading'>

                    <p>Stylist : <?php if(isset($stylist)){print $stylist->name; } ?></p>
                    <p>Class : <?php if(isset($stylist)){print $stylist->rank; } ?></p>
                    <p>My Items Coordinate: <?php print $order->myitems_conumber; ?></p>
                    <p>New Items Coordinate: <?php print $order->newitems_conumber; ?></p>
                    <p>Price : <?php 
                    if(isset($stylist->rank)){
                            if($stylist->rank="legend") {
                                $price= 500*$order->myitems_conumber+300*$order->newitems_conumber;
                            }elseif($stylist->rank="pro") {
                                $price= 300*$order->myitems_conumber+200*$order->newitems_conumber;
                            }else {
                                $price= 150*$order->myitems_conumber+100*$order->newitems_conumber;
                            }
                            $order->price = $price;
                            $order->save();
                            print "¥".$price;
                    } ?></p>
                </div>
                <div class="panel-body">
                   <h4>3. 注文内容を確認の上、<br>注文を完了してください</h4>
               </div>
               <div class="panel-footer paybtn">
               <div class="button" id="button3">
                    <a href="{{ route('u_ordercomp') }}" class="btn btn-danger" role="button" onclick='return confirm("Order Confirmed");'>Order Complete</a>
                </div>
                </div>
                
            </div>
        </div>
       
    </div>
    </body>
            
</html>         
@endif
@endsection


<!--    body {-->
<!--    background-image: url("/room6.jpg"); -->
<!--    background-size: 100%;-->
<!--}-->
    
<!--    #panel2{-->
<!--        height: 505px;-->
<!--    }-->
    
<!--    #panel3{-->
<!--        height: 350px;-->
<!--    }-->
    
<!--    #button1 {-->
<!--        bottom: 20;-->
<!--        text-align: center;-->
<!--        left: 45;-->
<!--    }-->
    
<!--    #buttonitem {-->
<!--        bottom: 20;-->
<!--        text-align: center;-->
<!--        left: 90;-->
<!--    }-->
    
<!--    #button3 {-->
<!--        bottom: 20;-->
<!--        text-align: center;-->
<!--        left: 45;-->
<!--    }-->
    
<!--    .panel-heading1 {-->
<!--        overflow: scroll;-->
<!--        position: relative;-->
<!--        height: 50%;-->
<!--        width: 100%;-->
<!--        background-color: #f5f5f5;-->
<!--        border-color: #ddd;-->
<!--    }-->
    
<!--    h4 {-->
<!--        text-align: center;-->
<!--    }-->
    
<!--    #sprofile {-->
<!--        height: 50%;-->
<!--    }-->
<!--    p {-->
<!--        margin: 0;-->
<!--        font-size: 22;-->
<!--    }-->
<!--    
    
<!--    .tab button.active {-->
<!--        background-color: #5bc0de;-->
<!--    }-->
        
<!--    .tabcontent {-->
<!--        margin-left: 30;-->
<!--        display: inline-block;-->
<!--    }-->
<!--    li.before_co_li {-->
<!--        display: inline-block;-->
<!--    }-->
    
<!--    h3 {-->
<!--        text-align: center;-->
<!--    }-->
    
<!--    .tablinks {-->
<!--        font-size: 23px;-->
<!--    }-->
<!--    .button {-->
<!--        position: absolute;-->
<!--        margin-left: 100;-->
<!--        margin-top: 30;-->
<!--    }-->
    
<!--    .button1 {-->
<!--        bottom: 0;-->
<!--        top: 50;-->
<!--    }-->
    
<!--    .row {-->
<!--        font-family: "Abril-Fatface";-->
<!--    }-->
    
<!--    .navbar {-->
<!--        font-family: "Abril-Fatface";-->
<!--    }-->
    
<!--    /*.img {*/-->
<!--    /*    height: 200%;*/-->
<!--    /*    width: 50%;*/-->
<!--    /*}*/-->
    
<!--    /*.profile-image {*/-->
<!--    /*    position: absolute;*/-->
<!--    /*    margin-left: 50;*/-->
<!--    /*}*/-->
    
