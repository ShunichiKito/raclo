@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!--<div style="position: relative;">-->
                <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_home.css') }}">
                <!--<img src="cabinet-575361_1280.png" class="center" alt="" height=500 width=500>-->
               
                <a href="u_index"><img src="hanger-29414_1280.png" class="left" alt="" height=100 width=100"></a>
                <a href="u_mycoordinates"><img src="star-158502_640.png" class="right" alt="" height=100 width=100"></a>
                
                
                <!--<div style="position: absolute; top: 30px; left: 100px;">-->
                <div class="closet-items">
                    <!--item変数を追加してから以下を実行する-->
                    {{-- @if (Auth::check()) --}}
                       {{-- @include('users.items', ['items' => $item]) --}}
                    {{-- @endif --}}
                </div>
        </div>
    </div>
@endsection
<!--あとでpaginateと一緒に以下を実行する-->
{{-- {!! $item->render() !!} --}}