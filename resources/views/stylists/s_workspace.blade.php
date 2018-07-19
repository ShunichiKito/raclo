@extends('layouts.stylist_app')

@section('content')
    <div class="row">
        <aside class="col-xs-3">
                     <div class='row text-center pad-top col-md-4 col-sm-4 col xs-8'>
                <!--<div class='col-md-4 col-sm-4 col xs-8'>-->
                    <div class='panel panel-danger'>
                        <div class='panel-heading'>
                            <img src="{{ $item->file_path }}" alt="" class="profile_image">
                            <h2 class="panel-body"><?php print $item->user_name ?></h2>
                        </div>
                        
                        <div class='panel panel-body'>
                            <div class="table-responsive">
                               <?php $user = User::where('users.name', $item->user_name)->first(); ?>  
                               <div class="panel-body"><?php print $user->style ?></div>
                            </div>
                        </div>
                        
                        <div class='panel panel-footer'>
                            <a href="{{ route('u_ordercomp', $item->user_name) }}" class='btn byn-danger'>
                                <button type="submit" class="btn btn-default" onclick='return confirm("Are you sure you want to request this stylist?");'>Send the Request</button>
                            </a>
                            
                        </div>
                    </div>
                <!--</div>-->
             </div>
            
            
            
            
            
        </aside>
        <div class="col-xs-6">
            
        　<div class="tab">
                        <button class="tablinks" onclick="openCloset(event, 'Myitem')" id="defaultOpen">Coordinate</button>
                        <button class="tablinks" onclick="openCloset(event, 'Newitem')">Suggestion</button>
                        <button class="tablinks" onclick="openCloset(event, 'Newitem')">Brand Avenue</button>
                    </div>
            
                    <div id="Myitem" class="tabcontent">
                      
                        <div class="closet-items">
                            <!--item変数を追加してから以下を実行する-->
                            @if (Auth::check())
                               @include('items.u_myitems', ['items' => $items ])
                            @endif
                        </div>

                    </div>
            
                    <div id="Newitem" class="tabcontent">
                        
                        <div class="closet-items">
                            <!--item変数を追加してから以下を実行する-->
                            @if (Auth::check())
                               @include('items.u_newitems', ['items' => $items ])
                            @endif
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
        </div>
        <div class="col-xs-3">

          
        </div>
@endsection