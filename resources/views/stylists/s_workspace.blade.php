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
        <div class="col-xs-6">
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
                                    {{--{!! Form::open(['route' => ['branditems.search',$keyword], 'method' => 'get', 'class' => 'form-inline']) !!}--}}
                                    <!--    <div class="form-group">-->
                                    {{--        {!! Form::text('keyword', $keyword, ['class' => 'form-control input-lg', 'placeholder' => 'Input the keywords', 'size' => 40]) !!}--}}
                                    <!--    </div>-->
                                    {{--    {!! Form::submit('商品を検索', ['class' => 'btn btn-success btn-lg']) !!} --}}
                                    {{--{!! Form::close() !!}--}}
                                    <br>
                                    <input type="text" id="search_area">
                                    <button type="button" id="search_button">検索</button>
                                    <ul class="brand_items"></ul>
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
                                             $(".brand_items").empty();
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
                                                  $(".brand_items").append(temp);
                                                }) // each
                                              } // if
                                            }); // function(data)
                                          }); // clickイベント
                                        }); // function
                                    </script>
                                
                                </div>
                            </div>
                        </div>
                       {{--@include('items.brandavenue_items', ['items' => $new_images ])--}}
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
        <div class="col-xs-3">
            
                   
             
        </div>
    </div>
@endsection