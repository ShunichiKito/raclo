@extends('layouts.user_app')

@section('content')
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_home.css') }}">
        <!--写真チェックしたら発動-->
        <script type="text/javascript">
                $(document).ready(function(e){
            		$(".img-check").click(function(){
        				$(this).toggleClass("check");
        			});
            	}); 
        </script>
    </head>
    <body>
        <div class="container col-lg-12">
        <!--画像アップロード-->
        
         {!! Form::open(['url' => '/u_items/store', 'method' => 'post', 'files' => true]) !!}

                <div class="form-group1">
                        {!! Form::label('file','Upload my clothes',['class'=>'control-label']) !!}
                        {!! Form::file('file') !!}
                    <!--</div>  -->
                    <div class="form-group2" id="classbtn">
                    <!--<button type="button" class="btn btn-primary btn-danger btn-lg btn-block">Upload my clothes</button>-->

                        {!! Form::submit('Upload', ['class' => 'btn btn-primary btn-danger btn-lg btn-block']) !!}
                    </div>

                </div>
        {!! Form::close() !!} 

        <!--アップロードした写真表示-->
        
        
            <div class="screen">
                <a href="u_index"><img src="hanger-29414_1280.png" class="left hangerhover" alt=""></a> 
                <style>.hangerhover:hover{
                                          position:relative;
                                          top:10px;
                                          left:10px;
                                          }
                </style>
                <a href="u_index"><img src="hanger-29414_1280.png" class="right hangerhover" alt=""></a>
                <!--<a href="u_mycoordinates"><img src="laundry-basket-2414021_1280.png" class="lefty" alt=""></a>-->
                <!--<p class="left-fukidashi">ハンガー</p>-->
                    <div class="tab">
                        <button class="tablinks" onclick="openCloset(event, 'Myitem');fukidashi" id="defaultOpen">From My Items</button>
                        <!--<p class="fukidashi">吹き出しが表示されます</p>-->
                        <button class="tablinks" onclick="openCloset(event, 'Newitem');fukidashi2">Get New Suggestions</button>
                        <!--<p class="fukidashi2">吹き出しが表示されます</p>-->
                        
                        
 
                    
                    </div>
                    
                    
                    
                    
                     {!! Form::open(['route' => ['items.selected']]) !!}
                    <input type="submit" name="itemSubmit" value="Next" class="submission item-next"/>

                    <div id="Myitem" class="tabcontent">
                        <div class=cloths>
                        <!--myitemのコンテンツ-->     
                        <!--<div class="w3--card-4">-->
                            <!--item変数を追加してから以下を実行する-->
                            @if (Auth::check())
                               @include('items.u_myitems', ['items' => $items ])
                               @include('users.popup')
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
                                @include('users.popup2')
                            @endif
                        </div>
                    </div>
                   
                    <!--<input type="submit" name="itemSubmit" value="Next" class="submission item-next"/>-->
                    
                    <!--<img src="laundry-basket-2414021_1280.png" class="lefty" alt=""></a>-->
                    
                
                    <!-- {!! Form::open(['url' => '/u_items/store', 'method' => 'post', 'files' => true]) !!}-->
                    <!--    <div class="form-group">-->
                    <!--        {!! Form::label('file','画像アップロード',['class'=>'control-label']) !!}-->
                    <!--        {!! Form::file('file') !!}-->
                    <!--    </div>  -->
                    <!--    <div class="form-group">-->
                    <!--        {!! Form::submit('Upload', ['class' => 'btn btn-success']) !!}-->
                    <!--    </div>-->
                    <!--{!! Form::close() !!} -->
                    
                    
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
