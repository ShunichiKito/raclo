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
                <button class="tablinks" onclick="openTab(event, 'withmyitems')" id="defaultOpen">With My Items</button>
                <button class="tablinks" onclick="openTab(event, 'withnewitems')">With New Items</button>
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
        </div>
    </div>
@endsection