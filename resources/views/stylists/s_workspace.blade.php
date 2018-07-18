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
                <button class="tablinks" onclick="openTab(event, 'withmyitems')" id="defaultOpen">Coordinate</button>
                <button class="tablinks" onclick="openTab(event, 'withnewitems')">Suggestion</button>
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
                    
             @if (Auth::user()->id == $user->id)
                  {!! Form::open(['route' => 'microposts.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif
            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
        </div>
        <div class="col-xs-3">
        </div>
    </div>
@endsection