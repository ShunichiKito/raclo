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
<link rel="stylesheet" type="text/css" href="{{ secure_asset('workspace_edit.css') }}">
@section('content')
    <div class="row">
        <aside class="col-xs-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title name_fontsize">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->id, 500) }}" alt="">
                </div>
            </div>
            <div class="alert alert-info count_coordinate" role="alert">3 Coordinates Left</div>
　　　　　　<br>
　　　　　　<br>
　　　　　　<div class="alert alert-warning count_coordinate" role="alert">5 Suggestions Left</div>
　　　　　　
        </aside>
        <div class="col-xs-5">
            <div class="tab tab_size_container">
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
                       @include('items.before_newitems', ['items' => $new_images ])
                    @endif
                </div>
            </div>
            
            <div id="BrandAvenue" class="tabcontent">
                <div class="closet-items">
                    <!--item変数を追加してから以下を実行する-->
                    @if (Auth::check())
                        <div class="search">
                            <div class="row">
                                <div class="text-center search_box">
                                    <br>
                                    <input type="text" id="search_area">
                                    <button type="button" id="search_button">検索</button>
                                    <ul  class="brand api_items ui-helper-reset ui-helper-clearfix"></ul>
                                    <style>
                                        li.brand_item {
                                            display: inline-block;
                                            margin: 10px;
                                        }
                                    </style>
                                    
                                    <!--楽天API-->
                                    <script>
                                        $(function(){
                                          // buttonがclickされたとき、変数に検索する値を代入
                                          $('#search_button').on('click', function(){
                                            var keyword = $('#search_area').val();
                                             $(".api_items").empty();
                                            // リクエストURLを設定する
                                            $.get('https://app.rakuten.co.jp/services/api/IchibaItem/Search/20170706?', {
                                              applicationId: "1028803390707827350",
                                              keyword: keyword
                                        
                                            // 結果が帰ってきたらここでそれを受け取り、空でなければ順番に出力していく
                                            }, function(data){
                                              if (data.count > 0){
                                                // console.log(data);
                                                $.each(data.Items, function(i, item){
                                                  var temp = $(`<li class="brand_item col-3-xs"><a href="${item.Item.itemUrl}"><img src="${item.Item.mediumImageUrls[0].imageUrl}" class="brand_item_size"></a></li>`);
                                                  $(".api_items").append(temp);
                                                jQuery("li", jQuery(".brand")).draggable({
                                                    revert: "invalid",
                                                    helper: "clone",
                                                    cursor: "move"
                                                });
                                                
                                                }) // each
                                              } // if
                                            }); // function(data)
                                          }); // clickイベント
                                        }); // function
                                    </script>
                                
                                </div>
                            </div>
                        </div>
                    @endif
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
                    
           
        </div>
        <div class="col-xs-4">
            <div id="coordinate_set" class=" ui-state-default">
              <p class="ui-widget-header"><span class="ui-icon" style="float:left;"></span>Coordinate set</p>
            </div>
            <button type="button" id="save">Save</button>
            <button type="button" id="clear">Clear</button>
            <style scoped>
              .brand { width:90%; height: 100%; float:left; }
              .brand .custom-state-active { background:#efefef; }
              .brand li {z-index:1;}
              .brand li, #coordinate_set li { padding:4px; text-align:center; float:left; list-style:none; display:inline-block; }
              .brand li p { margin:0 0 4px; cursor:move; }
              .brand li span { float:right; }
              #coordinate_set { width: 100%; height:600px; float:right; }
              #coordinate_set p { line-height:1.5; margin:0 0 4px; }
              #coordinate_set p span { float:left; }
            </style>     
            
            <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
            <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
            <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
             <script type="text/javascript">

              var _$ = jQuery;
              _$(function()
              {
                var $brand_items = _$(".brand");
                var $coordinate_set = _$("#coordinate_set");
                _$("li", $brand_items).draggable({
                  revert: "invalid",
                  helper: "clone",
                  cursor: "move"
                });
                $coordinate_set.droppable({
                  accept: ".brand > li",
                  activeClass: "ui-state-highlight",
                  drop: function(ev, ui){ setImage(ui.draggable);
                  }
                });
               
                _$(".before_co").droppable({
                  accept: ".before_co_li",
                  activeClass: "ui-state-highlight",
                  drop: function(ev, ui){ recycleImage( ui.draggable, _$(".before_co") ); }
                });
               
                 _$(".before_new").droppable({
                  accept: ".before_new_li",
                  activeClass: "ui-state-highlight",
                  drop: function(ev, ui){ recycleImage( ui.draggable, _$(".before_new" )); }
                });
                   _$(".api_items").droppable({
                  accept: ".brand_item",
                  activeClass: "ui-state-highlight",
                  drop: function(ev, ui){ recycleImage( ui.draggable, _$(".api_items")); }
                }); 
                
                // $brand_items.droppable({
                //   accept: "#coordinate_set li",
                //   activeClass: "ui-state-highlight",
                //   drop: function(ev, ui){ recycleImage( ui.draggable ); }
                // });
               
                 
                function setImage($item){
                  $item.fadeIn(function(){
                    $item.find("img").width("110px");
                    $item.appendTo($coordinate_set);
                   
                  });
                }
                function recycleImage($item,$target){
                  $item.fadeIn(function(){
                    // $item.find("img").width("30px");
                    $item.appendTo($target);
                  });
                }
                
                $("button#save").click(function() {
                   var items = $("li", $("#coordinate_set"));
                   for (var i = 0, len = items.length; i < len; i++) {
                     var item = items[i];
                     var element = {
                       img: $("img", item).attr("src")
                     }
                     localStorage.setItem(i, JSON.stringify(element));
                   }
                   // 保存されたことを確認する
                   for (var i = 0, len = localStorage.length; i < len; i++) {
                     var element = JSON.parse(localStorage.getItem(i));
                     $("ul#storedItems").append('<li><img src= '+element.img+'></li>');
                   }
                });
               $("button#clear").click(function() {
                 localStorage.clear();
                 $("ul#storedItems li").remove();
               });
            
              });
            </script>
        </div>
    </div>
    </div>
    <p>Stored Items</p>
              <ul id="storedItems">
              </ul>
    </div>          
@endsection