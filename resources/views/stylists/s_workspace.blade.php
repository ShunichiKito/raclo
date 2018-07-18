@extends('layouts.stylist_app')

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
                <button class="tablinks" onclick="openTab(event, 'withmyitems')" id="defaultOpen">With My Items</button>
                <button class="tablinks" onclick="openTab(event, 'withnewitems')">With New Items</button>
                <button class="tablinks" onclick="openTab(event, 'BrandAvenue')">Brand Avenue</button>
            </div>
            
            <div id="withmyitems" class="tabcontent">
                      
                <div class="closet-items">
                <!--item変数を追加してから以下を実行する-->
                    @if (Auth::check())
                        @include('items.u_myitems', ['items' => $items ])
                    @endif
                        </div>

                    </div>
            
                    <div id="withnewitems" class="tabcontent">
                        
                        <div class="closet-items">
                            <!--item変数を追加してから以下を実行する-->
                            @if (Auth::check())
                               @include('items.u_newitems', ['items' => $items ])
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
            <div class="row" style="margin-top:15px">
                <div class="col-xs-3">
                    <div id="canvasRow">
                　      <div id="canvasPopover"></div>
                            <div id="statusBar" style="margin-right: 0px;"></div>
                                <div id="canvasContainer" style="width: 1028px; height: 772px;" class="">
                                    <div id="clgProps" style="display: block;">2 | 0</div>
                                    <div id="objProps" style="display: none;">481,505 | 257x348 | 0°</div>
                                    <div class="canvas-container" style="width: 100%; height: 100%; position: relative; user-select: none;">
                                        <canvas id="canvas" width="1024" height="768" class="lower-canvas" style="position: absolute; width: 100%; height: 100%; left: 0px; top: 0px; touch-action: none; user-select: none;"></canvas>
                                        <canvas class="upper-canvas " width="1024" height="768" style="position: absolute; width: 100%; height: 100%; left: 0px; top: 0px; touch-action: none; user-select: none; cursor: default;"></canvas>
                                    </div>
                                </div><!--/#canvasContainer-->
    　　　　            </div>
                </div><!--/.canvasRow--><!--/.col-xs-12-->
            </div>
        </div>
@endsection