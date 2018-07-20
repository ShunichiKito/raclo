@extends('layouts.stylist_app')

<?php
// $all_images=[
//             'user' => $user,
//             'my_images' => $my_images,
//             'new_images' => $new_images
//         ];
// print_r($all_images);
// return;
?>

@section('content')
    <div class="row">
        <aside class="col-xs-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->id, 500) }}" alt="">
                </div>
            </div>
            <a herf='#' class='btn btn-danger'>Send the Request</a>
        </aside>
        <div class="col-xs-6">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'withmyitems')" id="defaultOpen">Coordinate</button>
                <button class="tablinks" onclick="openTab(event, 'withnewitems')">Suggestion</button>
                <button class="tablinks" onclick="openTab(event, 'BrandAvenue')">Brand Avenue</button>
            </div>
            
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
                       @include('items.u_newitems', ['items' => $new_images ])
                    @endif
                </div>
            </div>
                    
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
                    
           
        </div>
        <div class="col-xs-3">
                    <style>
              body {
                margin: 20px;
              }
              .item {
                padding: 10px;
                width: 80px;
                height: 20px;
                display:inline-block;
                border: 1px solid #2e6da4;
                background-color: #7da8c3;
                color: #FFFFFF;
              }
              .item:hover {
                cursor: pointer;
              }
              .item p {
                display: inline-block;
              }
              /*--------------------------------------------*/
              
              .container2 {
                margin-top: 50px;
                width: 400px;
                height:600px;
              }
              
              .main {
                width:200px;
                height:600px;
                float: left;
              }
              .main .drop_area {
                width:200px;
                height:300px;
                border: 1px solid #3a945b;
                background: #f0fff0;
              }
              
              .main .drop_area2 {
                width:200px;
                height:300px;
                border: 1px solid #3a945b;
                background: #f0fff0;
              }
              
              .side {
                width:200px;
                height:600px;
                float:left;
              }
              
            
              .side .drop_area3 {
                width:200px;
                height:200px;
                border: 1px solid #3a945b;
                background: #f0fff0;
              }
              
              .side .drop_area4 {
                width:200px;
                height:200px;
                border: 1px solid #3a945b;
                background: #f0fff0;
              }
              
              .side .drop_area5 {
                width:200px;
                height:200px;
                border: 1px solid #3a945b;
                background: #f0fff0;
              }
              
              
              .drop_area p {
                margin: 10px;
              }
              .drop_area2 p {
                margin: 10px;
              }
              .drop_area3 p {
                margin: 10px;
              }
              .drop_area4 p {
                margin: 10px;
              }
              .drop_area5 p {
                margin: 10px;
              }
              .ui-selected {
               background-color: #1cc7ff;
              }
              .ui-selectable-helper{
                position: absolute;
                z-index: 100;
                border:1px dotted black;
              }
            
              
            </style>
            
            <!--ここから下はアイテム-->
            <div id="container">
              <div class="item_area">
                <div class="item">
                  <p>1</p>
                </div>
                <div class="item">
                  <p>2</p>
                </div>
                <div class="item">
                  <p>3</p>
                </div>
                <div class="item">
                  <p>4</p>
                </div>
                <div class="item">
                  <p>5</p>
                </div>
              </div>
            </div> 
            
            <!--ここから下は服を配置するボックス-->
            <div class='container2'>
               <div class="main">
                    <div class="drop_area">
                      <p>Tops</p>
                    </div>
                    <div class="drop_area2">
                      <p>Bottoms</p>
                    </div>
               </div>
              
               <div class="side">
                    <div class="drop_area3">
                      <p>Accessories</p>
                    </div>
                    <div class="drop_area4">
                      <p>Bags</p>
                    </div>
                    <div class="drop_area5">
                      <p>shoes</p>
                    </div>
              </div>
            </div>
            
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
            <script>
              $(function() {
                $('.item_area').selectable({
                  cancel: "p",
                  selected: function(e, ui) {
                    $(ui.selected).draggable().draggable('enable');
                  }
                });
                
                $('.item').draggable({
                  revert: "invalid",
                  containment: "",
                  snap: true,
                  drag: function(e,ui){
                    $('.ui-selected').each(function(){
                      $(this).css({
                        top: ui.position.top,
                        left: ui.position.left
                      });
                    });
                  },
                  stop: function(e,ui) {
                    $('.ui-selected').each(function(){
                      $(this).selectable().selectable('destroy');
                      $(this).draggable().draggable('disable');
                    });
                  }
                }).draggable('disable');
            
                $('.drop_area').droppable({
                  activate: function(e,ui) {
                    $(this)
                      .find("p")
                      .html("Tops Area");
                  },
                  over: function(e,ui) {
                    $(this)
                      .css('background', '#e0ffff')
                      .css('border', '2px solid #00bfff')
                      .find("p")
                      .html("Put Your Tops Here" );
                  },
                  out: function(e,ui) {
                    $(this)
                      .css('background', '#ffffe0')
                      .css('border', '2px solid #ffff00')
                      .find("p")
                      .html("Out of Tops Area");
                  },
                  drop: function(e,ui) {
                    $(this)
                      .addClass("ui-state-highlight")
                      .css('background', '#fdf5e6')
                      .css('border', '2px solid #ffa07a')
                      .find( "p" )
                      .html( "Tops" );
                  }
                });
                
                 $('.drop_area2').droppable({
                  activate: function(e,ui) {
                    $(this)
                      .find("p")
                      .html("Bottoms Area");
                  },
                  over: function(e,ui) {
                    $(this)
                      .css('background', '#e0ffff')
                      .css('border', '2px solid #00bfff')
                      .find("p")
                      .html("Put Your Bottoms Here" );
                  },
                  out: function(e,ui) {
                    $(this)
                      .css('background', '#ffffe0')
                      .css('border', '2px solid #ffff00')
                      .find("p")
                      .html("Out of Bottoms Area");
                  },
                  drop: function(e,ui) {
                    $(this)
                      .addClass("ui-state-highlight")
                      .css('background', '#fdf5e6')
                      .css('border', '2px solid #ffa07a')
                      .find( "p" )
                      .html( "Bottoms" );
                  }
                });
                
                $('.drop_area3').droppable({
                  activate: function(e,ui) {
                    $(this)
                      .find("p")
                      .html("Accessories Area");
                  },
                  over: function(e,ui) {
                    $(this)
                      .css('background', '#e0ffff')
                      .css('border', '2px solid #00bfff')
                      .find("p")
                      .html("Put Your Accessories Here" );
                  },
                  out: function(e,ui) {
                    $(this)
                      .css('background', '#ffffe0')
                      .css('border', '2px solid #ffff00')
                      .find("p")
                      .html("Out of Accessories Area");
                  },
                  drop: function(e,ui) {
                    $(this)
                      .addClass("ui-state-highlight")
                      .css('background', '#fdf5e6')
                      .css('border', '2px solid #ffa07a')
                      .find( "p" )
                      .html( "Accessories" );
                  }
                });
                
                $('.drop_area4').droppable({
                  activate: function(e,ui) {
                    $(this)
                      .find("p")
                      .html("Bags Area");
                  },
                  over: function(e,ui) {
                    $(this)
                      .css('background', '#e0ffff')
                      .css('border', '2px solid #00bfff')
                      .find("p")
                      .html("Put Your Bags Here" );
                  },
                  out: function(e,ui) {
                    $(this)
                      .css('background', '#ffffe0')
                      .css('border', '2px solid #ffff00')
                      .find("p")
                      .html("Out of Bags Area");
                  },
                  drop: function(e,ui) {
                    $(this)
                      .addClass("ui-state-highlight")
                      .css('background', '#fdf5e6')
                      .css('border', '2px solid #ffa07a')
                      .find( "p" )
                      .html( "Bags" );
                  }
                });
                
                $('.drop_area5').droppable({
                  activate: function(e,ui) {
                    $(this)
                      .find("p")
                      .html("Shoes Area");
                  },
                  over: function(e,ui) {
                    $(this)
                      .css('background', '#e0ffff')
                      .css('border', '2px solid #00bfff')
                      .find("p")
                      .html("Put Your Shoes Here" );
                  },
                  out: function(e,ui) {
                    $(this)
                      .css('background', '#ffffe0')
                      .css('border', '2px solid #ffff00')
                      .find("p")
                      .html("Out of Shoes Area");
                  },
                  drop: function(e,ui) {
                    $(this)
                      .addClass("ui-state-highlight")
                      .css('background', '#fdf5e6')
                      .css('border', '2px solid #ffa07a')
                      .find( "p" )
                      .html( "Shoes" );
                  }
                });
            
                
              });
            </script>
        </div>
    </div>
@endsection